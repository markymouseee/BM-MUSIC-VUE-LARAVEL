<template>
    <div class="space-y-6">
        <!-- Header -->
        <div>
            <h1 class="text-3xl font-bold mb-2">Your Library</h1>
            <p class="text-muted-foreground">All your music, playlists, and albums in one place</p>
        </div>

        <!-- Controls -->
        <div class="flex flex-col sm:flex-row gap-4 justify-between">
            <div class="flex gap-2">
                <button @click="setFilter('all')" :class="`px-4 py-2 rounded-lg transition-colors ${filter === 'all' ? 'bg-primary text-primary-foreground' : 'border border-border hover:bg-accent'
                    }`">
                    All
                </button>
                <button @click="setFilter('albums')" :class="`px-4 py-2 rounded-lg transition-colors ${filter === 'albums' ? 'bg-primary text-primary-foreground' : 'border border-border hover:bg-accent'
                    }`">
                    Albums
                </button>
                <button @click="setFilter('playlists')" :class="`px-4 py-2 rounded-lg transition-colors ${filter === 'playlists' ? 'bg-primary text-primary-foreground' : 'border border-border hover:bg-accent'
                    }`">
                    Playlists
                </button>
            </div>

            <div class="flex gap-2">
                <div class="relative">
                    <Search class="absolute left-3 top-1/2 transform -translate-y-1/2 text-muted-foreground w-4 h-4" />
                    <input type="text" placeholder="Search library..."
                        class="pl-10 pr-4 py-2 w-64 bg-background border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-ring" />
                </div>
                <button class="p-2 border border-border rounded-lg hover:bg-accent">
                    <Filter class="w-4 h-4" />
                </button>
                <div class="flex border border-border rounded-lg">
                    <button @click="setViewMode('grid')"
                        :class="`p-2 ${viewMode === 'grid' ? 'bg-primary text-primary-foreground' : 'hover:bg-accent'} rounded-l-lg`">
                        <Grid class="w-4 h-4" />
                    </button>
                    <button @click="setViewMode('list')"
                        :class="`p-2 ${viewMode === 'list' ? 'bg-primary text-primary-foreground' : 'hover:bg-accent'} rounded-r-lg`">
                        <List class="w-4 h-4" />
                    </button>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div v-if="viewMode === 'grid'"
            class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
            <div v-for="item in libraryItems" :key="item.id"
                class="group hover:shadow-lg transition-all duration-200 cursor-pointer bg-card border border-border rounded-lg">
                <div class="p-4">
                    <div class="relative mb-4">
                        <img :src="item.image" :alt="item.title" class="w-full aspect-square object-cover rounded-lg" />
                        <div class="absolute top-2 left-2">
                            <span class="bg-black/50 text-white text-xs px-2 py-1 rounded">
                                {{ item.type }}
                            </span>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-medium truncate">{{ item.title }}</h3>
                        <p class="text-sm text-muted-foreground truncate">{{ item.artist }}</p>
                        <p class="text-xs text-muted-foreground">{{ item.year }} • {{ item.tracks }} tracks</p>
                    </div>
                </div>
            </div>
        </div>

        <div v-else class="bg-card border border-border rounded-lg">
            <div class="divide-y divide-border">
                <div v-for="item in libraryItems" :key="item.id"
                    class="flex items-center gap-4 p-4 hover:bg-accent/50 transition-colors cursor-pointer">
                    <img :src="item.image" :alt="item.title" class="w-12 h-12 rounded-lg object-cover" />
                    <div class="flex-1">
                        <h3 class="font-medium">{{ item.title }}</h3>
                        <p class="text-sm text-muted-foreground">{{ item.type }} • {{ item.artist }}</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm">{{ item.tracks }} tracks</p>
                        <p class="text-xs text-muted-foreground">{{ item.year }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { Search, Filter, Grid, List } from 'lucide-vue-next';

interface LibraryItem {
    id: number;
    title: string;
    type: string;
    artist: string;
    year: string;
    tracks: number;
    image: string;
}

const viewMode = ref<'grid' | 'list'>('grid');
const filter = ref('all');

const libraryItems = ref<LibraryItem[]>([
    {
        id: 1,
        title: 'Summer Vibes',
        type: 'Album',
        artist: 'The Sunset Band',
        year: '2023',
        tracks: 12,
        image: 'https://images.unsplash.com/photo-1629923759854-156b88c433aa?w=300&h=300&fit=crop&crop=center',
    },
    {
        id: 2,
        title: 'My Favorites',
        type: 'Playlist',
        artist: 'Your Collection',
        year: '2024',
        tracks: 127,
        image: 'https://images.unsplash.com/photo-1601127383943-c0af90870458?w=300&h=300&fit=crop&crop=center',
    },
    {
        id: 3,
        title: 'Midnight Dreams',
        type: 'Album',
        artist: 'Luna Eclipse',
        year: '2023',
        tracks: 10,
        image: 'https://images.unsplash.com/photo-1703192715698-dfc5c79de649?w=300&h=300&fit=crop&crop=center',
    },
    {
        id: 4,
        title: 'Workout Mix',
        type: 'Playlist',
        artist: 'Your Collection',
        year: '2024',
        tracks: 45,
        image: 'https://images.unsplash.com/photo-1629923759854-156b88c433aa?w=300&h=300&fit=crop&center',
    },
]);

const setViewMode = (mode: 'grid' | 'list') => {
    viewMode.value = mode;
};

const setFilter = (newFilter: string) => {
    filter.value = newFilter;
};
</script>

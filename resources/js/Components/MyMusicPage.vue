<template>
    <div class="space-y-8">
        <!-- Header -->
        <div>
            <h1 class="text-3xl font-bold mb-2">My Music</h1>
            <p class="text-muted-foreground">Your personal music collection</p>
        </div>

        <!-- Recent Albums -->
        <section>
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-semibold">Recent Albums</h2>
                <button class="px-4 py-2 border border-border rounded-lg hover:bg-accent transition-colors">
                    View All
                </button>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
                <div v-for="album in albums" :key="album.id"
                    class="group hover:shadow-lg transition-all duration-200 cursor-pointer bg-card border border-border rounded-lg">
                    <div class="p-4">
                        <div class="relative mb-4">
                            <img :src="album.image" :alt="album.title"
                                class="w-full aspect-square object-cover rounded-lg" />
                            <button
                                class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity shadow-lg bg-primary text-primary-foreground w-10 h-10 rounded-full flex items-center justify-center">
                                <Play class="w-4 h-4" />
                            </button>
                        </div>
                        <div>
                            <h3 class="font-medium truncate">{{ album.title }}</h3>
                            <p class="text-sm text-muted-foreground truncate">{{ album.artist }}</p>
                            <p class="text-xs text-muted-foreground">{{ album.year }} • {{ album.tracks }} tracks</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Playlists -->
        <section>
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-semibold">Playlists</h2>
                <button
                    class="px-4 py-2 bg-primary text-primary-foreground rounded-lg hover:opacity-90 transition-opacity flex items-center gap-2">
                    <Plus class="w-4 h-4" />
                    Create Playlist
                </button>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div v-for="playlist in playlists" :key="playlist.id"
                    class="group hover:shadow-lg transition-all duration-200 cursor-pointer bg-card border border-border rounded-lg">
                    <div class="p-4">
                        <div class="flex items-center gap-4">
                            <div class="relative">
                                <img :src="playlist.image" :alt="playlist.title"
                                    class="w-16 h-16 object-cover rounded-lg" />
                                <button
                                    class="absolute -bottom-2 -right-2 w-8 h-8 opacity-0 group-hover:opacity-100 transition-opacity shadow-lg bg-secondary text-secondary-foreground rounded-full flex items-center justify-center">
                                    <Play class="w-3 h-3" />
                                </button>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-medium">{{ playlist.title }}</h3>
                                <p class="text-sm text-muted-foreground">{{ playlist.tracks }} songs</p>
                            </div>
                            <button class="p-2 hover:bg-accent rounded-lg">
                                <MoreHorizontal class="w-4 h-4" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recently Played -->
        <section>
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-semibold">Recently Played</h2>
                <button class="px-4 py-2 border border-border rounded-lg hover:bg-accent transition-colors">
                    Clear History
                </button>
            </div>
            <div class="bg-card border border-border rounded-lg">
                <div class="p-6">
                    <div class="space-y-4">
                        <div v-for="(track, index) in recentTracks" :key="track.id"
                            class="flex items-center gap-4 group hover:bg-accent/50 p-2 rounded-lg transition-colors">
                            <span class="text-muted-foreground text-sm w-6">{{ index + 1 }}</span>
                            <div class="flex-1">
                                <p class="font-medium">{{ track.title }}</p>
                                <p class="text-sm text-muted-foreground">{{ track.artist }} • {{ track.album }}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-muted-foreground">{{ track.playedAt }}</p>
                                <p class="text-xs text-muted-foreground flex items-center gap-1">
                                    <Clock class="w-3 h-3" />
                                    {{ track.duration }}
                                </p>
                            </div>
                            <div class="opacity-0 group-hover:opacity-100 flex items-center gap-2">
                                <button class="w-8 h-8 hover:bg-accent rounded-lg flex items-center justify-center">
                                    <Play class="w-4 h-4" />
                                </button>
                                <button class="w-8 h-8 hover:bg-accent rounded-lg flex items-center justify-center">
                                    <Heart class="w-4 h-4" />
                                </button>
                                <button class="w-8 h-8 hover:bg-accent rounded-lg flex items-center justify-center">
                                    <MoreHorizontal class="w-4 h-4" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { Play, Heart, MoreHorizontal, Plus, Clock } from 'lucide-vue-next';

interface Album {
    id: number;
    title: string;
    artist: string;
    year: string;
    tracks: number;
    image: string;
}

interface Playlist {
    id: number;
    title: string;
    tracks: number;
    image: string;
}

interface RecentTrack {
    id: number;
    title: string;
    artist: string;
    album: string;
    duration: string;
    playedAt: string;
}

const albums = ref<Album[]>([
    {
        id: 1,
        title: 'Summer Vibes',
        artist: 'The Sunset Band',
        year: '2023',
        tracks: 12,
        image: 'https://images.unsplash.com/photo-1629923759854-156b88c433aa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxhbGJ1bSUyMGNvdmVyJTIwbXVzaWMlMjB2aW55bHxlbnwxfHx8fDE3NTY3ODc5MTR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
    },
    {
        id: 2,
        title: 'Midnight Dreams',
        artist: 'Luna Eclipse',
        year: '2023',
        tracks: 10,
        image: 'https://images.unsplash.com/photo-1601127383943-c0af90870458?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtdXNpYyUyMHBsYXlsaXN0JTIwYWxidW0lMjBhcnR8ZW58MXx8fHwxNzU2ODQ0MDI1fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
    },
    {
        id: 3,
        title: 'Ocean Waves',
        artist: 'Coastal Harmony',
        year: '2022',
        tracks: 8,
        image: 'https://images.unsplash.com/photo-1703192715698-dfc5c79de649?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxyZXRybyUyMG11c2ljJTIwY2Fzc2V0dGV8ZW58MXx8fHwxNzU2ODMzMzgyfDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
    },
    {
        id: 4,
        title: 'City Lights',
        artist: 'Urban Nights',
        year: '2023',
        tracks: 14,
        image: 'https://images.unsplash.com/photo-1629923759854-156b88c433aa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxhbGJ1bSUyMGNvdmVyJTIwbXVzaWMlMjB2aW55bHxlbnwxfHx8fDE3NTY3ODc5MTR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
    },
    {
        id: 5,
        title: 'Mountain High',
        artist: 'Alpine Sound',
        year: '2022',
        tracks: 9,
        image: 'https://images.unsplash.com/photo-1601127383943-c0af90870458?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtdXNpYyUyMHBsYXlsaXN0JTIwYWxidW0lMjBhcnR8ZW58MXx8fHwxNzU2ODQ0MDI1fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
    },
    {
        id: 6,
        title: 'Retro Nights',
        artist: 'Vintage Crew',
        year: '2021',
        tracks: 11,
        image: 'https://images.unsplash.com/photo-1703192715698-dfc5c79de649?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxyZXRybyUyMG11c2ljJTIwY2Fzc2V0dGV8ZW58MXx8fHwxNzU2ODMzMzgyfDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
    },
]);

const playlists = ref<Playlist[]>([
    {
        id: 1,
        title: 'My Favorites',
        tracks: 127,
        image: 'https://images.unsplash.com/photo-1629923759854-156b88c433aa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxhbGJ1bSUyMGNvdmVyJTIwbXVzaWMlMjB2aW55bHxlbnwxfHx8fDE3NTY3ODc5MTR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
    },
    {
        id: 2,
        title: 'Workout Mix',
        tracks: 45,
        image: 'https://images.unsplash.com/photo-1601127383943-c0af90870458?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtdXNpYyUyMHBsYXlsaXN0JTIwYWxidW0lMjBhcnR8ZW58MXx8fHwxNzU2ODQ0MDI1fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
    },
    {
        id: 3,
        title: 'Chill Vibes',
        tracks: 89,
        image: 'https://images.unsplash.com/photo-1703192715698-dfc5c79de649?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxyZXRybyUyMG11c2ljJTIwY2Fzc2V0dGV8ZW58MXx8fHwxNzU2ODMzMzgyfDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
    },
]);

const recentTracks = ref<RecentTrack[]>([
    {
        id: 1,
        title: 'Sunset Boulevard',
        artist: 'The Sunset Band',
        album: 'Summer Vibes',
        duration: '3:45',
        playedAt: '2 hours ago',
    },
    {
        id: 2,
        title: 'Moonlight Serenade',
        artist: 'Luna Eclipse',
        album: 'Midnight Dreams',
        duration: '4:12',
        playedAt: '5 hours ago',
    },
    {
        id: 3,
        title: 'Wave Rider',
        artist: 'Coastal Harmony',
        album: 'Ocean Waves',
        duration: '3:28',
        playedAt: '1 day ago',
    },
    {
        id: 4,
        title: 'Neon Lights',
        artist: 'Urban Nights',
        album: 'City Lights',
        duration: '3:55',
        playedAt: '2 days ago',
    },
]);
</script>

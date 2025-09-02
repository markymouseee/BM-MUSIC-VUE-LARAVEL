<template>
    <div v-if="isOpen" :class="`w-64 bg-card border-r border-border h-full flex flex-col ${className}`">
        <!-- Logo -->
        <div class="p-6 border-b border-border">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div
                        class="w-8 h-8 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                        <PlayCircle class="w-5 h-5 text-white" />
                    </div>
                    <span class="text-xl font-semibold">BM Music</span>
                </div>
                <button v-if="onClose" @click="onClose" class="lg:hidden p-2 hover:bg-accent rounded-lg">
                    <X class="w-5 h-5" />
                </button>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 p-4">
            <ul class="space-y-2">
                <li v-for="item in menuItems" :key="item.id">
                    <button @click="handleTabChange(item.id)" :class="`w-full flex items-center gap-3 px-3 py-2 rounded-lg transition-colors text-left ${activeTab === item.id
                            ? 'bg-primary text-primary-foreground'
                            : 'text-muted-foreground hover:text-foreground hover:bg-accent'
                        }`">
                        <component :is="item.icon" class="w-5 h-5" />
                        <span>{{ item.label }}</span>
                    </button>
                </li>
            </ul>
        </nav>

        <!-- User Profile -->
        <div class="p-4 border-t border-border">
            <div class="flex items-center gap-3">
                <div
                    class="w-10 h-10 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center">
                    <span class="text-white font-medium">JD</span>
                </div>
                <div class="flex-1">
                    <p class="font-medium">John Doe</p>
                    <p class="text-sm text-muted-foreground">Premium User</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { Home, Music, TrendingUp, Users, Settings, PlayCircle, Heart, Library, X } from 'lucide-vue-next';

interface MenuItem {
    id: string;
    icon: any;
    label: string;
}

interface Props {
    activeTab: string;
    isOpen?: boolean;
    className?: string;
}

interface Emits {
    (e: 'tabChange', tab: string): void;
    (e: 'close'): void;
}

withDefaults(defineProps<Props>(), {
    isOpen: true,
    className: ''
});

const emit = defineEmits<Emits>();

const menuItems: MenuItem[] = [
    { id: 'dashboard', icon: Home, label: 'Dashboard' },
    { id: 'my-music', icon: Music, label: 'My Music' },
    { id: 'library', icon: Library, label: 'Library' },
    { id: 'favorites', icon: Heart, label: 'Favorites' },
    { id: 'analytics', icon: TrendingUp, label: 'Analytics' },
    { id: 'artists', icon: Users, label: 'Artists' },
    { id: 'settings', icon: Settings, label: 'Settings' },
];

const handleTabChange = (tab: string) => {
    emit('tabChange', tab);
    emit('close');
};

const onClose = () => {
    emit('close');
};
</script>

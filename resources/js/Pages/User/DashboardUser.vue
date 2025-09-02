<template>
    <div class="min-h-screen bg-background flex flex-col">
        <div class="flex flex-1 relative">
            <!-- Desktop Sidebar -->
            <div class="hidden lg:block">
                <Sidebar :activeTab="activeTab" @tabChange="setActiveTab" />
            </div>

            <!-- Mobile Sidebar Overlay -->
            <div v-if="sidebarOpen" class="fixed inset-0 z-50 lg:hidden">
                <div class="absolute inset-0 bg-black/50" @click="setSidebarOpen(false)" />
                <div class="absolute left-0 top-0 h-full">
                    <Sidebar :activeTab="activeTab" @tabChange="setActiveTab" :isOpen="sidebarOpen"
                        @close="setSidebarOpen(false)" />
                </div>
            </div>

            <!-- Main content -->
            <div class="flex-1 flex flex-col min-w-0">
                <!-- Header -->
                <Header @menuClick="setSidebarOpen(true)" />

                <!-- Page content -->
                <main class="flex-1 p-4 sm:p-6 overflow-auto">
                    <component :is="currentPage" />
                </main>
            </div>
        </div>

        <!-- Music player -->
        <MusicPlayer />
    </div>
</template>

<script setup lang="ts">
import { ref, computed } from 'vue';
import Sidebar from '@/Components/Sidebar.vue';
import Header from '@/Components/Header.vue';
import DashboardPage from '../../Components/DashboardPage.vue';
import MyMusicPage from '@/Components/MyMusicPage.vue';
import LibraryPage from '@/Components/LibraryPage.vue';
import MusicPlayer from '@/Components/MusicPlayer.vue';

const activeTab = ref('dashboard');
const sidebarOpen = ref(false);

const setActiveTab = (tab: string) => {
    activeTab.value = tab;
};

const setSidebarOpen = (open: boolean) => {
    sidebarOpen.value = open;
};

const currentPage = computed(() => {
    switch (activeTab.value) {
        case 'dashboard':
            return DashboardPage;
        case 'my-music':
            return MyMusicPage;
        case 'library':
            return LibraryPage;
        case 'favorites':
            return {
                template: `
          <div class="space-y-6">
            <div>
              <h1 class="text-3xl font-bold mb-2">Favorites</h1>
              <p class="text-muted-foreground">Your liked songs and albums</p>
            </div>
            <div class="text-center py-12">
              <p class="text-muted-foreground">Coming soon...</p>
            </div>
          </div>
        `
            };
        case 'analytics':
            return {
                template: `
          <div class="space-y-6">
            <div>
              <h1 class="text-3xl font-bold mb-2">Analytics</h1>
              <p class="text-muted-foreground">Detailed insights about your music</p>
            </div>
            <div class="text-center py-12">
              <p class="text-muted-foreground">Coming soon...</p>
            </div>
          </div>
        `
            };
        case 'artists':
            return {
                template: `
          <div class="space-y-6">
            <div>
              <h1 class="text-3xl font-bold mb-2">Artists</h1>
              <p class="text-muted-foreground">Discover and follow your favorite artists</p>
            </div>
            <div class="text-center py-12">
              <p class="text-muted-foreground">Coming soon...</p>
            </div>
          </div>
        `
            };
        case 'settings':
            return {
                template: `
          <div class="space-y-6">
            <div>
              <h1 class="text-3xl font-bold mb-2">Settings</h1>
              <p class="text-muted-foreground">Customize your music experience</p>
            </div>
            <div class="text-center py-12">
              <p class="text-muted-foreground">Coming soon...</p>
            </div>
          </div>
        `
            };
        default:
            return DashboardPage;
    }
});
</script>

<template>
    <header class="bg-card border-b border-border px-4 sm:px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Mobile menu button and search -->
            <div class="flex items-center gap-4 flex-1">
                <button @click="$emit('menuClick')" class="lg:hidden p-2 hover:bg-accent rounded-lg">
                    <Menu class="w-5 h-5" />
                </button>

                <div class="flex-1 max-w-md">
                    <div class="relative">
                        <Search
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 text-muted-foreground w-4 h-4" />
                        <input type="text" placeholder="Search for songs, artists, albums..."
                            class="w-full pl-10 pr-4 py-2 bg-background border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-ring" />
                    </div>
                </div>
            </div>


            <div class="flex items-center gap-3">
                <button class="p-2 hover:bg-accent rounded-lg relative">
                    <Bell class="w-5 h-5 text-muted-foreground" />
                    <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full"></span>
                </button>

                <button class="p-2 hover:bg-accent rounded-lg">
                    <MessageSquare class="w-5 h-5 text-muted-foreground" />
                </button>

                <!-- User avatar -->
                <div class="flex items-center gap-2">
                    <div
                        class="w-8 h-8 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center">
                        <User class="w-4 h-4 text-white" />
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script setup lang="ts">
import { Search, Bell, MessageSquare, User, Menu } from 'lucide-vue-next';

interface Emits {
    (e: 'menuClick'): void;
}

defineEmits<Emits>();
</script>

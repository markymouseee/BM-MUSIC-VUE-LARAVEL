<template>
    <div class="bg-card border-t border-border p-3 sm:p-4">
        <div class="flex items-center justify-between">
            <!-- Current track info -->
            <div class="flex items-center gap-3 flex-1 min-w-0">
                <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400&h=400&fit=crop&crop=center"
                    alt="Current track" class="w-12 h-12 sm:w-14 sm:h-14 rounded-lg object-cover" />
                <div class="min-w-0 flex-1">
                    <p class="font-medium truncate text-sm sm:text-base">Summer Vibes</p>
                    <p class="text-xs sm:text-sm text-muted-foreground truncate">The Sunset Band</p>
                </div>
                <button @click="toggleLike"
                    :class="`${isLiked ? 'text-red-500' : 'text-muted-foreground'} hidden sm:flex p-2 hover:bg-accent rounded-lg`">
                    <Heart :class="`w-5 h-5 ${isLiked ? 'fill-current' : ''}`" />
                </button>
            </div>

            <!-- Player controls -->
            <div class="flex flex-col items-center gap-2 flex-1 max-w-md">
                <div class="flex items-center gap-1 sm:gap-2">
                    <button class="hidden sm:flex w-8 h-8 hover:bg-accent rounded-lg items-center justify-center">
                        <Shuffle class="w-4 h-4" />
                    </button>
                    <button class="w-8 h-8 sm:w-10 sm:h-10 hover:bg-accent rounded-lg flex items-center justify-center">
                        <SkipBack class="w-4 h-4 sm:w-5 sm:h-5" />
                    </button>
                    <button @click="togglePlay"
                        class="w-10 h-10 sm:w-12 sm:h-12 bg-primary text-primary-foreground rounded-full flex items-center justify-center hover:opacity-90">
                        <Pause v-if="isPlaying" class="w-5 h-5 sm:w-6 sm:h-6" />
                        <Play v-else class="w-5 h-5 sm:w-6 sm:h-6" />
                    </button>
                    <button class="w-8 h-8 sm:w-10 sm:h-10 hover:bg-accent rounded-lg flex items-center justify-center">
                        <SkipForward class="w-4 h-4 sm:w-5 sm:h-5" />
                    </button>
                    <button class="hidden sm:flex w-8 h-8 hover:bg-accent rounded-lg items-center justify-center">
                        <Repeat class="w-4 h-4" />
                    </button>
                </div>
                <div class="flex items-center gap-2 w-full max-w-md">
                    <span class="text-xs text-muted-foreground hidden sm:inline">1:23</span>
                    <div class="flex-1 relative">
                        <input type="range" :value="progress" min="0" max="100" @input="updateProgress"
                            class="w-full h-1 bg-muted rounded-lg appearance-none cursor-pointer slider" />
                    </div>
                    <span class="text-xs text-muted-foreground hidden sm:inline">3:45</span>
                </div>
            </div>

            <!-- Volume control -->
            <div class="hidden lg:flex items-center gap-2 flex-1 justify-end">
                <Volume2 class="w-5 h-5 text-muted-foreground" />
                <div class="w-24 relative">
                    <input type="range" :value="volume" min="0" max="100" @input="updateVolume"
                        class="w-full h-1 bg-muted rounded-lg appearance-none cursor-pointer slider" />
                </div>
            </div>

            <!-- Mobile heart button -->
            <button @click="toggleLike"
                :class="`${isLiked ? 'text-red-500' : 'text-muted-foreground'} sm:hidden p-2 hover:bg-accent rounded-lg`">
                <Heart :class="`w-5 h-5 ${isLiked ? 'fill-current' : ''}`" />
            </button>
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { Play, Pause, SkipBack, SkipForward, Shuffle, Repeat, Volume2, Heart } from 'lucide-vue-next';

const isPlaying = ref(false);
const isLiked = ref(false);
const progress = ref(33);
const volume = ref(70);

const togglePlay = () => {
    isPlaying.value = !isPlaying.value;
};

const toggleLike = () => {
    isLiked.value = !isLiked.value;
};

const updateProgress = (event: Event) => {
    const target = event.target as HTMLInputElement;
    progress.value = parseInt(target.value);
};

const updateVolume = (event: Event) => {
    const target = event.target as HTMLInputElement;
    volume.value = parseInt(target.value);
};
</script>

<style scoped>
.slider::-webkit-slider-thumb {
    appearance: none;
    height: 12px;
    width: 12px;
    border-radius: 50%;
    background: hsl(var(--primary));
    cursor: pointer;
}

.slider::-moz-range-thumb {
    height: 12px;
    width: 12px;
    border-radius: 50%;
    background: hsl(var(--primary));
    cursor: pointer;
    border: none;
}
</style>

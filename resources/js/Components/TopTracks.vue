<template>
  <VCard>
    <VCardHeader>
      <VCardTitle>Top Tracks</VCardTitle>
    </VCardHeader>
    <VCardContent>
      <div class="space-y-4">
        <div
          v-for="(track, index) in tracks"
          :key="track.id"
          class="flex items-center gap-4 group hover:bg-accent/50 p-2 rounded-lg transition-colors"
        >
          <span class="text-muted-foreground text-sm w-6">{{ index + 1 }}</span>
          <img
            :src="track.image"
            :alt="track.title"
            class="w-12 h-12 rounded-lg object-cover"
          />
          <div class="flex-1">
            <p class="font-medium">{{ track.title }}</p>
            <p class="text-sm text-muted-foreground">{{ track.artist }}</p>
          </div>
          <div class="text-right">
            <p class="text-sm font-medium">{{ track.plays }}</p>
            <p class="text-xs text-muted-foreground">{{ track.duration }}</p>
          </div>
          <div class="opacity-0 group-hover:opacity-100 flex items-center gap-2">
            <VButton variant="ghost" size="icon">
              <Play class="w-4 h-4" />
            </VButton>
            <VButton variant="ghost" size="icon">
              <MoreHorizontal class="w-4 h-4" />
            </VButton>
          </div>
        </div>
      </div>
    </VCardContent>
  </VCard>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { Play, MoreHorizontal } from 'lucide-vue-next';
import { VCard, VCardHeader, VCardTitle, VCardContent, VButton } from './ui/index';

interface Track {
  id: number;
  title: string;
  artist: string;
  plays: string;
  duration: string;
  image: string;
}

const tracks = ref<Track[]>([
  {
    id: 1,
    title: 'Summer Vibes',
    artist: 'The Sunset Band',
    plays: '1.2M',
    duration: '3:45',
    image: 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400&h=400&fit=crop&crop=center',
  },
  {
    id: 2,
    title: 'Midnight Dreams',
    artist: 'Luna Eclipse',
    plays: '987K',
    duration: '4:12',
    image: 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=400&h=400&fit=crop&crop=center',
  },
  {
    id: 3,
    title: 'Ocean Waves',
    artist: 'Coastal Harmony',
    plays: '756K',
    duration: '3:28',
    image: 'https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=400&h=400&fit=crop&crop=center',
  },
  {
    id: 4,
    title: 'City Lights',
    artist: 'Urban Nights',
    plays: '642K',
    duration: '3:55',
    image: 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400&h=400&fit=crop&crop=center',
  },
  {
    id: 5,
    title: 'Mountain High',
    artist: 'Alpine Sound',
    plays: '523K',
    duration: '4:03',
    image: 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=400&h=400&fit=crop&crop=center',
  },
]);
</script>

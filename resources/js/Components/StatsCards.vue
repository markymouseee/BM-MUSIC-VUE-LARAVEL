<template>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <VCard v-for="stat in stats" :key="stat.title" className="hover:shadow-md transition-shadow">
            <VCardContent>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-muted-foreground text-sm">{{ stat.title }}</p>
                        <p class="text-2xl font-semibold mt-1">{{ stat.value }}</p>
                        <p class="text-green-600 text-sm mt-1">{{ stat.change }}</p>
                    </div>
                    <div :class="`w-12 h-12 rounded-lg ${stat.bgColor} flex items-center justify-center`">
                        <component :is="stat.icon" :class="`w-6 h-6 ${stat.color}`" />
                    </div>
                </div>
            </VCardContent>
        </VCard>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { TrendingUp, Users, Music, PlayCircle } from 'lucide-vue-next';
import { VCard, VCardContent } from './ui/index';

interface Stat {
    title: string;
    value: string;
    change: string;
    icon: any;
    color: string;
    bgColor: string;
}

const stats = ref<Stat[]>([
    {
        title: 'Total Plays',
        value: '2,847',
        change: '+12.5%',
        icon: PlayCircle,
        color: 'text-blue-600',
        bgColor: 'bg-blue-100',
    },
    {
        title: 'Total Songs',
        value: '1,249',
        change: '+3.2%',
        icon: Music,
        color: 'text-green-600',
        bgColor: 'bg-green-100',
    },
    {
        title: 'Monthly Listeners',
        value: '18,429',
        change: '+8.7%',
        icon: Users,
        color: 'text-purple-600',
        bgColor: 'bg-purple-100',
    },
    {
        title: 'Revenue',
        value: '$12,847',
        change: '+15.3%',
        icon: TrendingUp,
        color: 'text-orange-600',
        bgColor: 'bg-orange-100',
    },
]);
</script>

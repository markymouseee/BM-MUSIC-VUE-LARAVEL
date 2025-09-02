<template>
    <VCard>
        <VCardHeader>
            <VCardTitle>Recent Activity</VCardTitle>
        </VCardHeader>
        <VCardContent>
            <div class="space-y-4">
                <div v-for="activity in activities" :key="activity.id" class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-muted rounded-full flex items-center justify-center">
                        <span class="text-sm font-medium">
                            {{activity.user.split(' ').map(n => n[0]).join('')}}
                        </span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm">
                            <span class="font-medium">{{ activity.user }}</span>
                            {{ ' ' + activity.action + ' ' }}
                            <span class="font-medium">{{ activity.target }}</span>
                        </p>
                        <p class="text-xs text-muted-foreground">{{ activity.time }}</p>
                    </div>
                    <component :is="activity.icon" :class="`w-5 h-5 ${activity.iconColor}`" />
                </div>
            </div>
        </VCardContent>
    </VCard>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { Play, Heart, Download, Share } from 'lucide-vue-next';
import { VCard, VCardHeader, VCardTitle, VCardContent } from './ui/index';

interface Activity {
    id: number;
    user: string;
    action: string;
    target: string;
    time: string;
    icon: any;
    iconColor: string;
}

const activities = ref<Activity[]>([
    {
        id: 1,
        user: 'Sarah Johnson',
        action: 'liked',
        target: 'Summer Vibes',
        time: '2 hours ago',
        icon: Heart,
        iconColor: 'text-red-500',
    },
    {
        id: 2,
        user: 'Mike Chen',
        action: 'played',
        target: 'Midnight Dreams',
        time: '4 hours ago',
        icon: Play,
        iconColor: 'text-blue-500',
    },
    {
        id: 3,
        user: 'Emma Davis',
        action: 'downloaded',
        target: 'Ocean Waves',
        time: '6 hours ago',
        icon: Download,
        iconColor: 'text-green-500',
    },
    {
        id: 4,
        user: 'Alex Wilson',
        action: 'shared',
        target: 'City Lights',
        time: '8 hours ago',
        icon: Share,
        iconColor: 'text-purple-500',
    },
]);
</script>

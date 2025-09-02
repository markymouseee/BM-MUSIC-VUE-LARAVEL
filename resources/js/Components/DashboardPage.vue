<template>
    <div class="space-y-6">
        <Head title="BM Music - Dashboard" />
        <!-- Welcome section -->
        <div>
            <h1 class="text-3xl font-bold mb-2">Welcome back, John!</h1>
            <p class="text-muted-foreground">Here's what's happening with your music today.</p>
        </div>

        <!-- Stats cards -->
        <StatsCards />

        <!-- Charts and activity grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <AnalyticsChart />
            <RecentActivity />
        </div>

        <!-- Top tracks -->
        <TopTracks />
    </div>
</template>

<script setup lang="ts">
import StatsCards from './StatsCards.vue';
import AnalyticsChart from './AnalyticsChart.vue';
import RecentActivity from './RecentActivity.vue';
import TopTracks from './TopTracks.vue';
import { Head } from '@inertiajs/vue3';
</script>

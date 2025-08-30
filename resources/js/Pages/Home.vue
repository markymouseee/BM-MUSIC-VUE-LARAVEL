<script setup>
    import { ref } from 'vue';
    import { Head } from '@inertiajs/vue3';

    const message = ref('This page is working with Vue + Laravel + Vite + Inertia');

</script>
<template>
    <Head title="Home" />
    <h1 class="text-2xl text-amber-500 dark:text-cyan-500">{{ message }}</h1>
</template>

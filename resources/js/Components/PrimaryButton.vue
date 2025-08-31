<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    type: {
        type: String,
        default: 'button',
    },
    disabled: {
        type: Boolean,
        default: false,
    }
})

</script>

<template>
    <button :type="type" :disabled="disabled"
        class="w-full inline-flex items-center justify-center py-2 px-4 rounded-lg bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold shadow hover:from-blue-500 disabled:opacity-60">
        <slot />
    </button>
</template>
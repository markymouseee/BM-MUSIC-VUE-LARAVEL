<script setup lang="ts">
import { defineProps } from 'vue';

const props = defineProps({
    type: {
        type: String as () => 'button' | 'submit' | 'reset',
        default: 'button',
    },
    disabled: {
        type: Boolean,
        default: false,
    }
})
</script>

<template>
    <button :type="props.type" :disabled="disabled"
        class="w-full inline-flex items-center justify-center py-2 px-4 rounded-lg text-gray-100 border border-gray-600 hover:border-gray-500 bg-gray-600 dark:border-gray-700 dark:bg-gray-700 font-semibold shadow hover:bg-gray-500 dark:hover:bg-gray-600 dark:hover:border-gray-600">
        <slot />
    </button>
</template>

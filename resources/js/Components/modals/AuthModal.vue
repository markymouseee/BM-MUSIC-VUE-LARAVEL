<script setup lang="ts">

const props = defineProps({
    error: {
        type: String,
        message: String,
    },
    id: {
        type: String,
        required: true
    },
    title: {
        type: String,
        required: true
    }
})

</script>

<template>
    <div :id="props.id" aria-hidden="true" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed animate-fade-in-modal  top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
         <div class="relative p-4 w-full max-w-md max-h-full">
             <div class="relative bg-white dark:bg-gray-800 shadow-sm">
                 <div
                     class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                     <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                         {{ props.title }}
                     </h3>

                     <button type="button"
                         class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                         :data-modal-hide="props.id">
                         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                         </svg>
                         <span class="sr-only">Close modal</span>
                     </button>
                 </div>

                 <div class="p-4 md:p-5">
                    <slot />
                 </div>
             </div>
         </div>
    </div>
</template>

<style scoped>
@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(0);
    }

    to {
        opacity: 1;
        transform: translateY(40px);
    }
}

.animate-fade-in-modal {
    animation: fade-in-up 0.3s ease-out forwards;
}
</style>


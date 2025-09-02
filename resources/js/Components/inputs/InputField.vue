<script setup lang="ts">

const props = defineProps({
    modelValue: {
        type: String,
        default: "",
    },
    placeholder: {
        type: String,
        default: "",
    },
    type: {
        type: String,
        default: "text",
    },
});

const emit = defineEmits(["update:modelValue"]);

const updateValue = (event: any) => {
    emit("update:modelValue", event.target.value);
};
</script>

<template>
    <input :type="props.type" :placeholder="props.placeholder" :value="props.modelValue" @input="updateValue"
        class="w-full px-4 py-2 border rounded-lg dark:text-gray-100 pr-12 focus:outline-none focus:from-blue-600 focus:to-purple-600 dark:bg-gray-700 dark:border-gray-600" />
</template>

<script setup lang="ts">

const props = defineProps({
    id: {
        type: String,
        required: true,
    },
    label: {
        type: String,
        required: true,
    },
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
    name: {
        type: String,
        required: true,
    },
    errorMessage: {
        type: String,
        default: "",
    },
    error: {
        type: Boolean,
        default: false,
    }
});

const emit = defineEmits<{
    (e: "update:modelValue", value: string): void
    (e: "clearError"): void
}>();

const updateValue = (event: Event) => {
    const target = event.target as HTMLInputElement;
    emit("update:modelValue", target.value);


    if (props.errorMessage) {
        emit("clearError");
    }
};
</script>

<template>
    <div>
        <label :for="props.id" :class="['block text-sm font-medium mb-2', props.error ?
            'text-red-700 dark:text-red-500' : 'text-gray-700 dark:text-gray-300']">
            {{ props.label }}
        </label>
        <input :type="props.type" :name="props.name" :id="props.id" :placeholder="props.placeholder"
            :value="props.modelValue" @input="updateValue" :class="['w-full px-4 py-2 border rounded-lg dark:bg-gray-700 pr-12 focus:outline-none', props.error ?
                ' text-red-700 dark:text-red-500 focus:ring-red-500 dark:border-red-500' :
                ' dark:border-gray-600 dark:text-gray-100 focus:from-blue-600 focus:to-purple-600']" />

        <div v-if="errorMessage != ''" class="text-red-500 text-sm mt-2">
            <span>
                {{ props.errorMessage }}
            </span>
        </div>
    </div>
</template>

<script setup lang="ts">
type Level = 'primary' | 'secondary' | 'success' | 'warning' | 'danger' | 'info' | 'custom';
type Variant = 'normal' | 'outline' | 'transparent';

const props = withDefaults(defineProps<{
    level?: Level
    variant?: Variant,
    loading?: boolean,
    loadingText?: string
}>(), {
    variant: 'normal',
    level: 'primary',
    loading: false,
    loadingText: ''
})

const basicClasses = 'px-4 py-2 text-xs rounded-md border focus:outline-none transition focus:ring font-medium disabled:opacity-75 disabled:cursor-not-allowed tracking-widest';
const classes = {
    primary: {
        normal: `bg-blue-500 active:bg-blue-600 border-blue-500 hover:bg-blue-400 disabled:hover:bg-blue-500 focus:ring-blue-500/25 focus:border-blue-600 text-white ${basicClasses}`,
        outline: `border-blue-500 hover:bg-blue-500 active:bg-blue-600 disabled:hover:bg-white focus:ring-blue-600/25 focus:border-blue-600 text-blue-500 hover:text-white disabled:hover:text-blue-500 ${basicClasses}`
    },
    secondary: {
        normal: `bg-gray-800 active:bg-gray-900 border-gray-800 hover:bg-gray-700 disabled:hover:bg-gray-800 focus:ring-gray-900/25 focus:border-gray-900 text-white ${basicClasses}`,
        outline: `border-gray-900 hover:bg-gray-900 disabled:hover:bg-white focus:ring-gray-900/25 focus:border-gray-800 text-gray-900 hover:text-white disabled:hover:text-gray-900 ${basicClasses}`
    },
    success: {
        normal: `bg-green-500 active:bg-green-600 border-green-500 hover:bg-green-400 disabled:hover:bg-green-500 focus:ring-green-500/25 focus:border-green-600 text-white ${basicClasses}`,
        outline: `border-green-500 hover:bg-green-500 active:bg-green-600 disabled:hover:bg-white focus:ring-green-600/25 focus:border-green-600 text-green-500 hover:text-white disabled:hover:text-green-500 ${basicClasses}`
    },
    warning: {
        normal: `bg-yellow-500 active:bg-yellow-600 border-yellow-500 hover:bg-yellow-400 disabled:hover:bg-yellow-500 focus:ring-yellow-500/25 focus:border-yellow-600 text-white ${basicClasses}`,
        outline: `border-yellow-500 hover:bg-yellow-500 active:bg-yellow-600 disabled:hover:bg-white focus:ring-yellow-600/25 focus:border-yellow-600 text-yellow-500 hover:text-white disabled:hover:text-yellow-500 ${basicClasses}`
    },
    danger: {
        normal: `bg-red-500 active:bg-red-600 border-red-500 hover:bg-red-400 disabled:hover:bg-red-500 focus:ring-red-500/25 focus:border-red-600 text-white ${basicClasses}`,
        outline: `border-red-500 hover:bg-red-500 active:bg-red-600 disabled:hover:bg-white focus:ring-red-600/25 focus:border-red-600 text-red-500 hover:text-white disabled:hover:text-red-500 ${basicClasses}`
    },
    info: {
        normal: `underline text-gray-500 hover:text-gray-800 underline-offset-1 active:text-gray-900`,
        outline: 'underline text-gray-500 hover:text-gray-800 underline-offset-1 active:text-gray-900'
    },
    custom: {
        normal: `${basicClasses}`,
        outline: `${basicClasses}`
    }
}

const buttonClasses = () => {
    const { level, variant } = props;
    return classes[level][variant];
}

</script>
<template>
    <button
        v-bind:disabled="loading"
        :class="[buttonClasses(), loading ? 'inline-flex items-center' : '']"
    >
        <svg
            v-if="loading"
            :class="['animate-spin h-5 w-5 text-white', loadingText ? '-ml-1 mr-3' : '']"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
        >
            <circle
                class="opacity-25"
                cx="12"
                cy="12"
                r="10"
                stroke="currentColor"
                stroke-width="4"
            />
            <path
                class="opacity-75"
                fill="currentColor"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
            />
        </svg>
        <span v-if="loading">{{ loadingText }}</span>
        <slot v-else />
    </button>
</template>

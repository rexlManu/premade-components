<script setup lang="ts">
import { Element } from '@/scripts/entity/models';
import AppButton from '@/views/components/button.vue';

defineProps<{
    element: Element,
}>()
</script>
<template layout="component">
    <div class="flex flex-col space-y-4">
        <div class="flex space-x-4">
            <app-button level="primary">Button</app-button>
            <app-button level="secondary">Button</app-button>
            <app-button level="success">Button</app-button>
            <app-button level="warning">Button</app-button>
            <app-button level="danger">Button</app-button>
            <app-button level="info">Button</app-button>
        </div>

        <div class="flex space-x-4">
            <app-button disabled level="primary">Button</app-button>
            <app-button disabled level="secondary">Button</app-button>
            <app-button disabled level="success">Button</app-button>
            <app-button disabled level="warning">Button</app-button>
            <app-button disabled level="danger">Button</app-button>
            <app-button disabled level="info">Button</app-button>
        </div>

        <div class="flex space-x-4">
            <app-button variant="outline" level="primary">Button</app-button>
            <app-button variant="outline" level="secondary">Button</app-button>
            <app-button variant="outline" level="success">Button</app-button>
            <app-button variant="outline" level="warning">Button</app-button>
            <app-button variant="outline" level="danger">Button</app-button>
            <app-button variant="outline" level="info">Button</app-button>
        </div>
        <div class="flex space-x-4">
            <app-button disabled variant="outline" level="primary">Button</app-button>
            <app-button disabled variant="outline" level="secondary">Button</app-button>
            <app-button disabled variant="outline" level="success">Button</app-button>
            <app-button disabled variant="outline" level="warning">Button</app-button>
            <app-button disabled variant="outline" level="danger">Button</app-button>
            <app-button disabled variant="outline" level="info">Button</app-button>
        </div>

        <div class="flex space-x-4">
            <app-button loading loadingText="Processing..." level="primary">Button</app-button>
            <app-button loading loadingText="Processing..." level="secondary">Button</app-button>
            <app-button loading level="success">Button</app-button>
            <app-button loading level="warning">Button</app-button>
        </div>
        <div class="flex space-x-4">
            <app-button
                class="bg-fuchsia-500 active:bg-fuchsia-600 border-fuchsia-500 hover:bg-fuchsia-400 disabled:hover:bg-fuchsia-500 focus:ring-fuchsia-500/25 focus:border-fuchsia-600 text-white"
                level="custom"
            >Button</app-button>
            <app-button
                class="bg-black text-white border-black focus:ring-black/25"
                level="custom"
            >Button</app-button>
            <app-button
                class="bg-[#1DA1F2] hover:bg-[#1DA1F2]/90 focus:ring-[#1DA1F2]/25 text-white inline-flex items-center"
                level="custom"
            >
                <svg
                    class="h-5 w-5 mr-2 -ml-1 fill-current"
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <title>Twitter</title>
                    <path
                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"
                    />
                </svg>
                Twitter
            </app-button>
        </div>
    </div>
</template>

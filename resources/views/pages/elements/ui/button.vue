<script setup lang="ts">import { Element } from '@/scripts/entity/models';

defineProps<{
    element: Element,
}>()
</script>
<template layout="component">
    <div class="flex space-x-4">
        <button
            class="px-6 py-2 text-white transition rounded bg-primary-500 focus:ring focus:ring-primary-500/25 hover:bg-primary-400"
        >Example</button>
        <button
            class="px-6 py-2 text-white transition bg-green-500 rounded focus:ring focus:ring-green-500/25 hover:bg-green-400"
        >Example</button>
        <button
            class="px-6 py-2 text-white transition bg-yellow-500 rounded focus:ring focus:ring-yellow-500/25 hover:bg-yellow-400"
        >Example</button>
        <button
            class="px-6 py-2 text-white transition bg-red-500 rounded focus:ring focus:ring-red-500/25 hover:bg-red-400"
        >Example</button>
        <button
            class="px-6 py-2 text-white transition rounded bg-fuchsia-500 focus:ring focus:ring-fuchsia-500/25 hover:bg-fuchsia-400"
        >Example</button>
    </div>
</template>

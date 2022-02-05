<script setup lang="ts">
import { Link } from '@inertiajs/inertia-vue3'
import { useRouter } from '@/scripts/contracts/router';
import { ChevronRightIcon, ExternalLinkIcon } from '@heroicons/vue/solid'
import { Category, Element } from '@/scripts/entity/models';

const route = useRouter();

defineProps<{
    category: Category,
    elements: Element[]
}>()
</script>
<template layout>
    <div class="container mx-auto">
        <div class="py-6">
            <div class="flex flex-row items-center pb-2 space-x-2 border-b border-gray-300">
                <Link
                    class="font-medium text-gray-500 hover:text-gray-700"
                    :href="route('categories.index')"
                >Components</Link>
                <ChevronRightIcon class="w-5 h-5 text-gray-500" />
                <span
                    class="font-medium text-gray-500 hover:text-gray-700 hover:cursor-pointer"
                >{{ category.name }}</span>
            </div>
            <div v-for="element in elements" :key="element.id" class="flex flex-col space-y-2">
                <div class="flex flex-row justify-between pt-4 pb-2">
                    <h4 class="text-lg text-gray-900">{{ element.name }}</h4>
                    <a
                        class="flex flex-row items-center space-x-1 text-lg text-gray-500 hover:text-gray-800"
                        :href="element.source"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <ExternalLinkIcon class="w-5 h-5" />
                        <span>Source</span>
                    </a>
                </div>
                <div class="w-full p-1 bg-white rounded-md shadow-sm">
                    <iframe
                        :src="route('elements.show', [element.id])"
                        class="w-full p-0 m-0 h-72"
                        frameborder="0"
                    ></iframe>
                </div>
            </div>
        </div>
    </div>
</template>

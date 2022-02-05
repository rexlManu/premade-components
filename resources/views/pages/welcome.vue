<script setup lang="ts">
import { useRouter } from '@/scripts/contracts/router';
import { Category } from '@/scripts/entity/models';
import { Link } from '@inertiajs/inertia-vue3'

type CategoriesProps = Category & { elements_count: number }

defineProps<{
    categories: CategoriesProps[],
}>()

const route = useRouter();

</script>

<template layout>
    <div class="container mx-auto">
        <div class="grid grid-cols-6 py-6">
            <div class="col-span-2">
                <h2 class="text-xl text-gray-900">UI Elements</h2>
                <p class="text-gray-500">Components for ui</p>
            </div>
            <div class="grid col-span-4 gap-3 md:grid-cols-3">
                <Link
                    :href="route('categories.show', [category.id])"
                    v-for="category in categories"
                    :key="category.id"
                    class="flex flex-col p-4 space-y-1 transition bg-white border rounded-md shadow hover:border-primary-300 hover:bg-primary-50"
                >
                    <h3 class="text-sm text-gray-900">{{ category.name }}</h3>
                    <p class="text-xs text-gray-400">{{ category.elements_count }} components</p>
                </Link>
            </div>
        </div>
    </div>
</template>

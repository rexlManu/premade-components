<script setup lang="ts">
import { Link } from '@inertiajs/inertia-vue3'
import { useRouter } from '@/scripts/contracts/router';
import { SearchIcon } from '@heroicons/vue/solid'
const route = useRouter();
const menuElements = [
    {
        name: 'Components',
        href: route('categories.index')
    },
    {
        name: 'Source',
        href: route('redirect.github'),

    }
]

</script>

<template>
    <div class="min-h-screen bg-gray-100">
        <header class="bg-white border-b border-gray-300">
            <div class="container mx-auto">
                <nav class="flex flex-row items-center justify-between">
                    <div class="flex flex-row items-center space-x-6">
                        <h1 class="text-xl font-bold text-primary-500">Premade Components</h1>
                        <div class="flex flex-row">
                            <Link
                                v-for="menuElement in menuElements"
                                :key="menuElement.name"
                                :href="menuElement.href"
                                class="px-3 py-4 text-gray-500 transition border-b border-transparent hover:border-gray-500 hover:text-gray-900"
                            >{{ menuElement.name }}</Link>
                        </div>
                    </div>
                    <div class="relative">
                        <input
                            class="pl-8 text-gray-500 border-gray-300 rounded-md focus:border-primary-500 focus:ring focus:ring-primary-500/25"
                            type="text"
                            placeholder="Search"
                        />
                        <div class="absolute top-0 flex items-center h-full left-2">
                            <SearchIcon class="w-5 h-5 text-gray-500" />
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <slot />
        </main>
    </div>
</template>

<template>
    <li v-if="!item.hasChild" class="p-2 rounded-md hover:bg-gray-200 cursor-pointer">
        <Link :href="item.route"
            class="flex items-center  py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
            <span class="material-symbols-outlined">{{ item.icon }} </span>
            <span class="ms-3 hidden md:inline">{{ item.name }}</span>
        </Link>
    </li>
    <li v-else class="p-2 rounded-md hover:bg-gray-200 cursor-pointer">
        <Button type="button" @click="isOpen = !isOpen"
            class="flex items-center w-full justify-between px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group"
            aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
            <span class="material-symbols-outlined">{{ item.icon }}</span>

            <span class="flex-1 hidden md:inline ms-3 text-left rtl:text-right whitespace-nowrap">{{ item.name }}</span>
        </Button>
        <ul v-show="isOpen" :key="item.name" class="py-2 z-4 space-y-2">
            <li v-for="child in item.Childs" :key="child.name">
                <Link :href="child.route"
                    class="pl-3 md:pl-10 flex items-center  py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                    <span class="material-symbols-outlined">
                        {{ child.icon }}
                    </span>
                    <span>{{ child.name }}</span>
                </Link>
            </li>

        </ul>
    </li>

</template>
<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
const props = defineProps(
    {
        item: {
            type: Object,
            required: true
        }
    }
)
const isOpen = ref(false)
</script>
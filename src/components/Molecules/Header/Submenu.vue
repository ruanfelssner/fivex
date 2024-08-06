<template>
    <AtomsContainer class="py-3">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <router-link to="/" class="inline-flex items-center text-sm font-medium text-gray-700">
                        <AtomsIcon icon="house" size="sm" class="me-1" />
                        Home
                    </router-link>
                </li>
                <li v-for="item in items" :key="item.title" class="inline-flex items-center">
                    <div class="flex items-center">
                        <AtomsIcon icon="chevron-right" size="sm" class="me-1" />
                        <router-link :to="item.link" class="text-sm font-medium text-gray-700">{{item.title}}</router-link>
                    </div>
                </li>
            </ol>
        </nav>
    </AtomsContainer>
    <hr class="mb-3">
</template>
<script setup lang="ts">
type Item = {
    title: string,
    link: string
}
const props = defineProps<{
    items: Item[]
}>();
</script>


<template>
    <AtomsRow :colsDesktop="2">
        <MoleculesProductCarouselCard v-for="(product, id) of list" :key="product.id" :product="product" />
    </AtomsRow>
</template>
<script setup lang="ts">
import type { Product } from '@/types/product';

import { defineProps } from 'vue';
const props = defineProps<{
    list: Product[]
}>();
</script>
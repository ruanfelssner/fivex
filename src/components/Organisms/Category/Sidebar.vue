<template>
    <div>
        <OrganismsCategoryCardSidebar title="Preço" :items="listPrices" @clickItem="filteredItems($event, 'price')" />
    </div>
</template>
<script setup lang="ts">
import type { Product, Item } from '@/types/product';

import { defineProps, defineEmits } from 'vue';
const emit = defineEmits(['filteredItems'])
const props = defineProps<{
    listOriginal: Product[]
}>();

const listPrices = ref<Item[]>([    
    { qtd:0, checked: false, min: 0, max: 199.99, title: "R$50-R$199,99" },
    { qtd:0, checked: false, min: 200, max: 499.99, title: "R$200-R$499,99" },
    { qtd:0, checked: false, min: 500, max: 999.99, title: "R$500-R$999,99" },
    { qtd:0, checked: false, min: 1000, max: 1999.99, title: "R$1.000-R$2.000,00" },
    { qtd:0, checked: false, min: 2000, max: 2999.99, title: "R$2.000-R$3.000,00" },
    { qtd:0, checked: false, min: 3000, max: 3999.99, title: "R$3.000-R$4.000,00" },
    { qtd:0, checked: false, min: 4000, max: 4999.99, title: "R$4.000-R$5.000,00" },
    { qtd:0, checked: false, min: 5000, max: 5999.99, title: "R$5.000-R$6.000,00" }
])

watch(() => props.listOriginal, (value) => {
    listPrices.value = listPrices.value.map(item => {
        let qtd = value.filter(product => product.price >= item.min && product.price <= item.max).length;
        return { ...item, qtd }
    })
})

const filters = ref({
    price: []
})

const filteredItems = (value, type) => {
    if(type === 'price'){
        let find = filters.value.price.find(item => item === value);
        find ? (filters.value.price = filters.value.price.filter(item => item !== value)) : filters.value.price.push(value)
        console.log(filters.value.price, '----> price')
    }
}


</script>
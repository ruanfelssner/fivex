<template>
    <div>
        <h2>{{ props.title }}</h2>
        <ul>
            <li v-for="(item, id) of items" :key="item.title"> 
                <label :for="item.title" class="hover:underline hover:cursor-pointer" @click="clickItem(item.title)" v-show="item.qtd > 0">
                    <input type="checkbox" :checked="item.checked" :id="item.title">
                    {{ item.title }} ({{ item.qtd }})
                </label>
            </li>
        </ul>
    </div>
</template>

<script lang="ts" setup>

import type { Item } from '@/types/product';
import { defineProps } from 'vue';

const props = defineProps<{
    title: string,
    items: Item[]
}>();

const emit = defineEmits(['clickItem'])


const clickItem = (e) => {
    emit('clickItem', e);
}
</script>
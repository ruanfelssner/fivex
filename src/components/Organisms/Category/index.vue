<template>
    <MoleculesHeaderSubmenu :items="submenu" />
    <AtomsContainer class="py-4">
        <AtomsRow :colsDesktop="5">
            <div>
                <OrganismsCategorySidebar :list="list" :listOriginal="listOriginal" @filteredItems="updateList" />
            </div>
            <div class="col-span-3">
                <OrganismsCategoryProducts :list="list" />
            </div>
        </AtomsRow>
    </AtomsContainer>
</template>
<script lang="ts" setup>
import { ref } from 'vue';
import { useRoute } from 'vue-router';

import { service } from '@/services/api';

const list = ref([]);
const listOriginal = ref([]);
const { params } = useRoute();

const formattedTitles = (title: string) => {
    return title.replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
}

const submenu = ref([])

if(params.category){
    submenu.value.push({
        title: formattedTitles(params.category),
        link: '/categorias/' + params.category
    })      
}

if(params.slug){
    submenu.value.push({
        title: formattedTitles(params.slug),
        link: '/categorias/' + params.category + '/' + params.slug
    })
}

if(params.category || params.slug){
    
    (async () => {
        try {
            const categorys = await service('wc/v3/products/categories', { slug: params.slug ? params.slug : params.category });
            const categoryID = categorys[0].id;
            const data = await service('wc/v3/products', { category: categoryID });
            list.value = data
            listOriginal.value = data;
        } catch (error) {
            console.error(error);
        }
    })();
}

const updateList = (value) => {
    list.value = value;
}

</script>
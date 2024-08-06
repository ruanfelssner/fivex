<template>
    <AtomsContainer class="py-6">
        <AtomsRow>
            <div class="col-12 mb-4">
                <h1 class="text-2xl font-bold pt-6 pb-3 uppercase text-center">Blog</h1>
            </div>
        </AtomsRow>
        <AtomsRow :colsDesktop="4">
            <div v-for="(item, id) of blog" :key="id+'blog'" class="cursor-pointer hover:opacity-80">
                <router-link :to="'/blog/'+item.slug" class="thumb"><img :src="item.images[0].source_url" alt="" /></router-link>
                <router-link :to="'/blog/'+item.slug"><h3 class="text-lg font-bold py-2 uppercase text-start">{{item.title.rendered}}</h3></router-link>
            </div>
        </AtomsRow>
    </AtomsContainer>
</template>
<script lang="ts" setup>

import type { Blog } from '@/types/blog';

import { service } from '@/services/api';

const loading = ref(true);
const blog = ref<Blog[]>([]);

(async () => {
    try {
        const data = await service('wp/v2/posts', { per_page: 10, _embed: true });
        blog.value = data.map((item: any) => ({
            id: item.id,
            title: item.title,
            excerpt: item.excerpt,
            content: item.content,
            date: item.date,
            slug: item.slug,
            images: item._embedded['wp:featuredmedia'],
        }));
    } catch (error) {
        console.error(error);
    } finally {
        loading.value = false;
    }
})();

</script>
<style lang="scss" scoped>
.thumb{
    @apply max-h-[230px] overflow-hidden block;
    img{
        @apply w-full h-full object-cover;
    }
    &:hover{
        img{
            @apply transform scale-110;
        }
    }
}
</style>
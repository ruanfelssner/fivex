<template>
    <AtomsContainer class="overflow-hidden">
            <AtomsRow :colsDesktop="1" :colsMobile="1">
                <div class="text-start">
                    <h1 class="text-2xl font-bold pt-6 uppercase">{{ title }}</h1>
                </div>
                <hr class="border-ecommerce-primary mb-2">
            </AtomsRow>
            <AtomsRow :colsDesktop="1" :colsMobile="1">
                <AtomsIcon icon="spinner" class="mx-auto spinner" v-if="loading" />
                <div class="my-6" v-else>
                    <Swiper
                        :modules="[SwiperAutoplay, SwiperNavigation, SwiperPagination]"
                        :slides-per-view="3"
                        :loop="true"
                        :effect="'creative'"                        
                        :navigation="{
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        }"
                        :breakpoints="{
                            320: {
                                slidesPerView: 1.1,
                                spaceBetween: 8
                            },
                            480: {
                                slidesPerView: 1.5,
                                spaceBetween: 8
                            },
                            640: {
                                slidesPerView: 1.8,
                                spaceBetween: 10
                            },
                            1024: {
                                slidesPerView: 2.5,
                                spaceBetween: 12
                            },
                            1440: {
                                slidesPerView: 3.5,
                                spaceBetween: 12
                            },
                        }"
                        :space-between="8"
                        :autoplay="{
                        }"
                    >
                        <SwiperSlide v-for="(item, id) of products">
                                <MoleculesProductCarouselCard :product="item" :key="'Product '+id" />
                        </SwiperSlide>                       
                        <button type="button" class="button-swiper swiper-button-next"><AtomsIcon icon="chevron-right" size="xs" class="text-ecommerce-primary drop-shadow-md" /></button>
                        <button type="button" class="button-swiper swiper-button-prev"><AtomsIcon icon="chevron-left" size="xs" class="text-ecommerce-primary drop-shadow-md" /></button>
                    </Swiper>
                </div>
            </AtomsRow>
        </AtomsContainer>
</template>

<script lang="ts" setup>

import type { Product } from '@/types/product';
import { service } from '@/services/api';

const props = defineProps<{
    params: any;
    title: string;
}>();

const loading = ref(true); // Inicialmente, o estado de carregamento é verdadeiro
const products = ref<Product[]>([]);

(async () => {
    try {
        const data = await service('wc/v3/products', props.params);
        products.value = data as Product[];
    } catch (error) {
        console.error(error);
    } finally {
        loading.value = false; // Depois que o pedido é tratado, definimos loading para false
    }
})();

</script>
<style lang="scss" scoped>
.button-swiper{
    &::after{
        display: none;
    }
}
</style>
<template>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow rounded-lg text-center hover:opacity-70 overflow-hidden" @click="buyProduct()">
        <a href="javascript:void(0);" class="thumb"><img :src="product.images[0]?.src" v-if="product.images[0]" alt=""></a>
        <div class="p-2 mb-4">
            <a href="javascript:void(0);" class="hover:no-underline"><h1 class="font-bold leading-normal pt-3 line-clamp-2">{{ product.name }}</h1></a>
            <a href="javascript:void(0);" class="hover:no-underline"><h5 class="mb-2 text-2xl font-black  tracking-tight  text-ecommerce-secondary" v-if="product.regular_price">{{ formatPrice(product.regular_price) }}</h5></a>
            <a href="javascript:void(0);" class="comprar hover:no-underline inline-flex items-center px-6 py-2 text-sm font-medium text-center rounded-full bg-ecommerce-primary text-ecommerce-secondary tracking-widest0">
                <AtomsIcon icon="spinner" class="me-2 spinner" v-if="loading" />
                <AtomsIcon icon="cart-shopping" class="me-2" v-else />
                 COMPRAR</a>
        </div>
    </div>
</template>
<script setup lang="ts">

import type { Product } from '@/types/product';



const router = useRouter()


const props = defineProps<{
    product: Product;
}>();

const formatPrice = (price: string) => {
    return new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(parseFloat(price));
};

const loading = ref(false);

const buyProduct = () => {
    loading.value = true;
    setTimeout(() => {
        router.push({ path: "/produto/"+props.product.slug })
    }, 1500);

};
</script>
<style lang="scss" scoped>
.thumb{
    display: block;
    overflow: hidden;
    img{
        width: 100%;
        height: 450px;
        object-fit: cover;
    }
    &:hover{
        img{
            transform: scale(1.1);
        }
    }
}
.comprar {
    transition: all 0.3s;
    &:hover{     
        transform: scale(1.1);
    }
}
</style>
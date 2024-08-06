<template>
    <div :class="
    fluid ? 'mx-auto sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px] px-4 px-md-0' : 
    'mx-auto sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px] px-4 px-md-0'">
        <slot />
    </div>
</template>
<script setup>
defineProps({
    fluid: {
        type: Boolean,
        default: false
    }
});
</script>
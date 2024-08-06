<template>
    <button class="bg-white p-2 rounded-full text-black min-w-10 hover:bg-[rgba(255,255,255,0.8)]">
        <AtomsIcon :icon="icon" :size="size" :prefix="prefix" />
        <span>{{ title }}</span>
    </button>
</template>
<script setup>

defineProps({
    title: {
        type: String
    },
    icon: {
        type: String,
        required: true
    },
    prefix: {
        type: String,
        default: 'fas'
    },
    size: {
        type: String,
        default: 'xl'
    }
});

</script>
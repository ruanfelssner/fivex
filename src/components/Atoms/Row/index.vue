<template>
    <div 
      :class="[
        'grid',
        `grid-cols-${colsMobile ? colsMobile : 1}`,
        `md:grid-cols-${colsDesktop ? colsDesktop : 1}`,
        'gap-4'
      ]"
    >
      <slot />
    </div>
  </template>
  
  <script setup>
    defineProps({
    colsDesktop: {
      type: Number,
      default: 1
    },
    colsMobile: {
      type: Number,
      default: 1
    }
  });
  </script>
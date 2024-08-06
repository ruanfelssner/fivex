import { defineNuxtConfig } from '@nuxt/bridge'

export default defineNuxtConfig({
  app: {
    pageTransition: { name: 'page', mode: 'out-in' }
  },
  srcDir: 'src',
  ssr: false,
  devtools: { enabled: true },
  css: ['~/assets/css/global.css'],
  modules: [
    '@nuxtjs/tailwindcss',
    'nuxt-swiper'
  ],
  build: {
    typescript: {
      typeRoots: ['./node_modules/@types', './types']
    }
  }
})
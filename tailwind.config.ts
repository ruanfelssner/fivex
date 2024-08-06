export default {
  content: [
    './src/components/**/*.{js,vue,ts}',
    './src/layouts/**/*.vue',
    './src/pages/**/*.vue',
    './src/plugins/**/*.{js,ts}',
    './src/app.vue',
    './src/error.vue'
  ],
  theme: {
    extend: {
      colors: {
        ecommerce: {
          primary:"#fef000",
          secondary: "#000000",
          warning: '#B42318',
          alert: '#B7720B',
          success: '#039855'
        }
      }
    },
  },
  css: [
    '@fortawesome/fontawesome-svg-core/styles.css'
  ],
  plugins: [],
  safelist: [
    ...Array.from({ length: 12 }, (_, i) => `grid-cols-${i + 1}`),
    ...Array.from({ length: 12 }, (_, i) => `md:grid-cols-${i + 1}`)
  ]
};
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php'],
  theme: {
    extend: {
      colors: {
        primary: '#fff100',
        secondary: '#2d3748',
        accent: '#f6ad55',
        dark: '#2d3748',
        light: '#f7fafc'
      },
      typography: {
        DEFAULT: {
          css: {
            color: '#000',
            h1: {
              color: '#000',
              fontWeight: '700'
            },
            h2: {
              color: '#000',
              fontWeight: '600'
            },
            h3: {
              color: '#000',
              fontWeight: '500'
            },
            p: {
              color: '#000',
              lineHeight: '1.7'
            },
            a: {
              color: '#fff100',
              textDecoration: 'underline',
              '&:hover': {
                color: '#f6ad55'
              }
            }
          }
        }
      }
    }
  },
  plugins: [require('@tailwindcss/typography')]
}

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php'],
  theme: {
    extend: {
      typography: {
        DEFAULT: {
          css: {
            color: '#333',
            h1: {
              color: '#111',
              fontWeight: '700',
            },
            h2: {
              color: '#222',
              fontWeight: '600',
            },
            h3: {
              color: '#333',
              fontWeight: '500',
            },
            p: {
              color: '#555',
              lineHeight: '1.7',
            },
            a: {
              color: '#1a202c',
              textDecoration: 'underline',
              '&:hover': {
                color: '#2d3748',
              },
            },
          },
        },
      },
    },
  },
  plugins: [require('@tailwindcss/typography')],
}

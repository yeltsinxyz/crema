module.exports = {
  purge: [
    '*.php',
    '/lib/php/*.php'
  ],
  theme: {
    fontFamily: {
      sans: ['Manrope', 'sans-serif'],
      serif: ['Manrope', 'sans-serif'],
      mono: ['Manrope', 'sans-serif'],
    },
    aspectRatio: {
      none: 0,
      square: [1, 1],
      "16/9": [16, 9],
      "4/3": [4, 3],
      "21/9": [21, 9]
    },
    extend: {},
  },
  variants: {
    mixBlendMode: ['responsive'],
    backgroundBlendMode: ['responsive'],
    isolation: ['responsive'],
    aspectRatio: ['responsive'],
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('tailwindcss-blend-mode')(),
    require('tailwindcss-css-filters'),
    require('tailwindcss-skip-link')(),
    require("kutty"),
    require("tailwindcss-responsive-embed"),
    require("tailwindcss-aspect-ratio"),
    require("tailwind-heropatterns")({}),
  ],
}

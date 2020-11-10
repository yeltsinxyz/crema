module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
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
    extend: {},
  },
  variants: {
    mixBlendMode: ['responsive'],
    backgroundBlendMode: ['responsive'],
    isolation: ['responsive'],
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('tailwindcss-blend-mode')(),
    require('tailwindcss-css-filters')
  ],
}

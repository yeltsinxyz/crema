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
  variants: {},
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

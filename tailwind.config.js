module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'sans': ['poppins'],
      'serif': ['playfairdisplay'],
    },
    extend: {},
  },
  variants: {
    extend: {
      borderColor: ['active'],
      ringWidth: ['hover', 'active'],
      ringColor: ['hover', 'active'],
      ringOpacity: ['hover', 'active'],
    },
  },
  plugins: [],
}

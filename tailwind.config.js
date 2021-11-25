module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        body: ['Montserrat']
      },
      height: {
        200: '40rem'
      },
      minHeight: {
        200: '40rem'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

const colors = require('tailwindcss/colors')

module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './vendor/filament/**/*.blade.php',
  ],
  theme: {
    extend: {
      colors: {
        'warm-gray': colors.stone,
        teal: colors.teal,
        danger: colors.rose,
        primary: colors.blue,
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}

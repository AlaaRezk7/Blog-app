/** @type {import('tailwindcss').Config} */
export default {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
  theme: {
    extend: {
        // Check for customizations
        visibility: ['responsive', 'hover', 'focus'],
        opacity: ['disabled'],
    }
},
purge: {
  content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ]
},
variants: {
  extend: {
      opacity: ['disabled'],
  }
}
}


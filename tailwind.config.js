/** @type {import('tailwindcss').Config} */
export default {
  content: [
  "./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  './src/**/*.{html,js}', // Adjust paths based on your project structure
  './styles.css', // Ensure this is included if not part of your main build
],

theme: {
  extend: {
    backgroundSize: {
      '200%': '200%',
      '150%': '150%',
    },

  },
  fontFamily: {
    body: ['Lufga']
  }
},
variants: {
  extend: {
    backgroundSize: ['hover'],
  },
},
plugins: [],
}


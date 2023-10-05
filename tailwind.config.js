const defaultTheme= require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './**/*.php',
        './*.html'
      ],
      theme: {
        extend: {
          colors: {
              primary: '#003459',
          },
          fontFamily: {
          }
        },
      },
      plugins: [
        require('@tailwindcss/typography'),
      ],
}

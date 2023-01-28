/** @type {import('tailwindcss').Config} */
module.exports = {
        content: [
            './storage/framework/views/*.php',
            './config/*.php',
            './resources/**/*.php',
            './resources/**/*.js',
            './resources/**/*.vue',
        ]
    ,
    prefix: 'tw-',
  theme: {
    extend: {},
  },
  plugins: [],
}

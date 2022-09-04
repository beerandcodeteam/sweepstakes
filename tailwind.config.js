/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js"
    ],
  theme: {
    extend: {
        colors: {
            primary: {
                base: "#F44A33",
                light: "#FF4D57",
                dark: "#B71C1C",
            }
        }
    },
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}

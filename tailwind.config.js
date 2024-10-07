module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}


// tailwind.config.js
module.exports = {
  theme: {
    extend: {
      fontFamily: {
        custom: ['Formata', 'sans-serif'],
      },
    },
  },
};

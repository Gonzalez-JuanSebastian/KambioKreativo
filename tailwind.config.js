module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#279ED9',
        primaryDark: '#1975BC',
        dark: '#231F20',
        light: '#F8FAFC',
        accent: '#FF6B35'
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
        body: ['Open Sans', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
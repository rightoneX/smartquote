/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./includes/*.php', 
            './pages/*.php',
          './*.php'],
  theme: {
    screens:{
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px'

    },
    extend: {
      colors: {
        logoStyle: '#23642'
      }
    },
  },
  plugins: [],
}

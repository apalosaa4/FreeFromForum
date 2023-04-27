/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.html",
    "./public/**/*.ts",
    "./public/**/*.css",
    "./resources/**/*.php",
    "./src/**/*.css"
  ],
  theme: {
    extend: {
      letterSpacing:{
        tightest: '-.075em',
        tighter: '-.05em',
        tight: '-.025em',
        normal: '0',
        wide: '.025em',
        wider: '.05em',
        widest: '.1em',
        mwidest: '.25em',
      },
      screens:{
        extrasm:'200px'
      },
      colors:{
        'primary': '#FF6363',
        'green-basic': '#6B8F71',
        'green-medium': '#84ab8b',
        'green-text': '#D9FFF5',
        'green-light': '#AAD2BA',
        'green-cambridge': '#90BAAD',
        'green-background': '#DBECE2',
        'green-background-second': '#C3E0CF',
        
        'gray-dark': '#1D1E18',
        'gray-medium': '#515E6F',
        'gray-light': '#92B8C2',
      },
      fontFamily:{
        'josefin-sans': ['Josefin Sans', 'sans-serif'],
        'montserrat': ['Montserrat', 'sans-serif'],
        'cinzel': ['Cinzel', 'serif'],
        'gruppo': ['Gruppo', 'cursive'],
        'la-belle-aurore': ['La Belle Aurore', 'cursive'],
        'the-girl-next-door': ['The Girl Next Door', 'cursive']
      }
    }
  },
  plugins: [],
}

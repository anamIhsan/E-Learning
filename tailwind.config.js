module.exports = {
  purge: [
    './resources/**/*.blade.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        navbar : '#2e4370',
        splide : '#f7f8fa',
        promosi : '#414a4f',
        login : '#ecf1f5'
      },

      spacing: {
        '504' : '32rem', 
        '404' : '34rem', 
        '336' : '21rem', 
        '27' : '27rem', 
        '55' : '0.30rem', 
        '07' : '7.50rem', 
      },

      margin: {
        '70' : '70px',
        '130' : '130px',
      }
    },
  },
  variants: {
    extend: {
      display: ['group-focus']
    },
  },
  plugins: [],
}

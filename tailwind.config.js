/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js, php}"],
  theme: {
    extend: {
      colors: {
        darkPrincipal: "#d25d19",
        Principal: "#170E45"
      },
      screens: {
      'cp': '550px',
      'mcp':{'max': '550px'},
      'sm': '640px', 
      'msm': {'max':'640px'}, 
      'md': '768px',
      'mmd': {'max':'768px'},
      'md992': {'min':'992px'},
      'mmd992': {'max':'992px'},
      'lg': '1024px',
      'xl': '1280px',
    }  
    },
  },
  plugins: [],
}
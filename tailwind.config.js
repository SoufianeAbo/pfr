/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      animation: {
        "slide-top": "slide-top 8s cubic-bezier(0.455, 0.030, 0.515, 0.955)   infinite"
      },
      keyframes: {
        "slide-top": {
          "0%": {
            transform: "translateY(0)"
          },
          "50%": {
            transform: "translateY(-80px)"
          },
          to: {
            transform: "translateY(0)"
          }
        }
      }
    }
  },
  plugins: [
    require("tailwindcss-animate"),
    plugin(({ matchUtilities, theme }) => {
      matchUtilities(
        {
          "animation-delay": (value) => {
            return {
              "animation-delay": value,
            };
          },
        },
        {
          values: theme("transitionDelay"),
        }
      );
    }),
  ],
}
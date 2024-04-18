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
        "slide-top": "slide-top 8s cubic-bezier(0.455, 0.030, 0.515, 0.955)   infinite",
        "slide-in-blurred-bottom": "slide-in-blurred-bottom 0.6s cubic-bezier(0.230, 1.000, 0.320, 1.000)   both"
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
        },
        "slide-in-blurred-bottom": {
          "0%": {
              transform: "translateY(1000px) scaleY(2.5) scaleX(.2)",
              "transform-origin": "50% 100%",
              filter: "blur(40px)",
              opacity: "0"
          },
          to: {
              transform: "translateY(0) scaleY(1) scaleX(1)",
              "transform-origin": "50% 50%",
              filter: "blur(0)",
              opacity: "1"
          }
        }
      }
    }
  },
  plugins: [
    require("tailwindcss-animate"),
    require("tailwindcss-textshadow"),
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
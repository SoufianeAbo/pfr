/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/careers/*.blade.php",
    "./resources/**/games/*.blade.php",
    "./resources/**/employee/*.blade.php",
  ],
  theme: {
    extend: {
      animation: {
        "slide-top": "slide-top 8s cubic-bezier(0.455, 0.030, 0.515, 0.955)   infinite",
        "slide-in-blurred-bottom": "slide-in-blurred-bottom 0.6s cubic-bezier(0.230, 1.000, 0.320, 1.000)   both",
        "angle-rotate": "angle-rotate 0.5s cubic-bezier(0.455, 0.030, 0.515, 0.955) both"
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
        },
        "angle-rotate": {
          "0%": {
            transform: "rotate(0)",
          },
          to: {
            transform: "rotate(180deg)",
          }
        }
      }
    }
  },
  plugins: [
    require("tailwindcss-animate"),
    require("tailwindcss-textshadow"),
    require("taos/plugin"),
    require('daisyui'),
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

  daisyui: {
    themes: false, // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
    darkTheme: "light", // name of one of the included themes for dark mode
    base: true, // applies background color and foreground color for root element by default
    styled: true, // include daisyUI colors and design decisions for all components
    utils: true, // adds responsive and modifier utility classes
    prefix: "daisy-", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
    logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
    themeRoot: ":root", // The element that receives theme color CSS variables
  },
}
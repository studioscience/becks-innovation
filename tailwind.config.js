/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [],
  theme: {
    colors: {
			template: "#F9F8F3",
			transparent: "transparent",
			green: "#00693F",
      darkgreen: "#012e1c",
      yellow:"#FFDB00",
      black:"#000000",
      white:"#ffffff",
      beige:"#f6f4ed",
      tan:"#e4dfce",
			gray: {
				100: "#f7fafc",
				600: "#959595",
				800: "#D3D4D9",
			},
			offwhite: "#F2F0E4",
			halfwhite: "#F6F6F0",
			activegreen: "#3B7F73",
			icongray: "#F2F0E4",
		},
    fontSize: {
      sm: '0.8rem',
      base: '1rem',
      xl: '1.25rem',
      '2xl': '1.563rem',
      '3xl': '1.953rem',
      '4xl': '2.441rem',
      '5xl': '3.052rem',
    },
    extend: {
      backdropBrightness: {
        25: '.25',
        175: '1.75',
      }
    },
  },
  content: [
    './assests/src/scripts/**/*.js',
    './views/**/*.php',
    './partials/**/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
    './inc/**/*.php',
    './404.php',
    './archive.php',
    './comments.php',
    './footer.php', 
    './header.php',
    './index.php',
    './page.php',
    './search.php',
    './searchform.php',
    './single.php',
  ],
 
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
  ],
}

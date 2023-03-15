/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [],
  theme: {
    colors: {
			template: "#F9F8F3",
			transparent: "transparent",
			green: "#00693F",
      yellow:"#FFDB00",
      beige:"#E4DFCE",
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
    extend: {},
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

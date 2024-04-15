/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.html",
  ],
  theme: {
    extend: {
      fontFamily:{
        marko:['Marko One, serif;'],
        inria:['Inria Serif'],
      },
      backgroundImage:{
        'bground': "url('/public/img/bground.jpg')",
        'logo': "url('/public/img/logo.jpg')"
      },
      animation: {
				fade: 'fadeIn 1.1s ease-in-out',
			},

			keyframes: {
				fadeIn: {
					from: { opacity: 0 },
					to: { opacity: 1 },
				},
      },
    },
  },
  plugins: [],
}
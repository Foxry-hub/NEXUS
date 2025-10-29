/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class', // Enable dark mode with class strategy
  theme: {
    extend: {
      colors: {
        // Nexus Brand Colors
        'nexus-indigo': {
          50: '#eef2ff',
          100: '#e0e7ff',
          200: '#c7d2fe',
          300: '#a5b4fc',
          400: '#818cf8',
          500: '#6366f1', // Primary brand color
          600: '#4f46e5',
          700: '#4338ca',
          800: '#3730a3',
          900: '#312e81',
        },
        'nexus-violet': {
          50: '#faf5ff',
          100: '#f3e8ff',
          200: '#e9d5ff',
          300: '#d8b4fe',
          400: '#c084fc',
          500: '#a855f7',
          600: '#9333ea',
          700: '#7e22ce',
          800: '#6b21a8',
          900: '#5c2d91', // Deep violet for accents
        },
      },
      fontFamily: {
        sans: ['Instrument Sans', 'Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
      backgroundImage: {
        'gradient-nexus': 'linear-gradient(135deg, #6366f1 0%, #a855f7 100%)',
        'gradient-nexus-dark': 'linear-gradient(135deg, #4f46e5 0%, #7e22ce 100%)',
      },
      boxShadow: {
        'nexus': '0 10px 40px -10px rgba(99, 102, 241, 0.3)',
        'nexus-lg': '0 20px 60px -15px rgba(99, 102, 241, 0.4)',
      },
    },
  },
  plugins: [],
}

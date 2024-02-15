/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    colors: {
      'white': '#ffffff',
      'black': "#273846",
      'wood': {
        100: '#FEFDFB',
        200: '#FAF6F0',
        300: '#FAF6F0',
        400: '#FAF6F0',
        500: '#FAF6F0',
        600: '#FAF6F0',
        700: '#FAF6F0',
        800: '#FAF6F0',
        900: '#FAF6F0',
      },
      'mist': {
        50: '#273846',
        200: '#273846',
        300: '#273846',
        400: '#273846',
        500: '#273846',
        600: '#273846',
        700: '#273846',
        800: '#273846',
        900: '#273846',
      }
    },
    extend: {},
    fontSize: {
      xs: [
        "0.75rem",
        {
          lineHeight: "1rem",
        },
      ],
      sm: [
        "0.875rem",
        {
          lineHeight: "1.5rem",
        },
      ],
      base: [
        "1rem",
        {
          lineHeight: "1.75rem",
        },
      ],
      lg: [
        "1.125rem",
        {
          lineHeight: "2rem",
        },
      ],
      xl: [
        "1.25rem",
        {
          lineHeight: "2rem",
        },
      ],
      "2xl": [
        "1.5rem",
        {
          lineHeight: "2rem",
        },
      ],
      "3xl": [
        "2rem",
        {
          lineHeight: "2.5rem",
        },
      ],
      "4xl": [
        "2.5rem",
        {
          lineHeight: "3.5rem",
        },
      ],
      "5xl": [
        "3rem",
        {
          lineHeight: "3.5rem",
        },
      ],
      "6xl": [
        "3.75rem",
        {
          lineHeight: "1",
        },
      ],
      "7xl": [
        "4.5rem",
        {
          lineHeight: "1.1",
        },
      ],
      "8xl": [
        "6rem",
        {
          lineHeight: "1",
        },
      ],
      "9xl": [
        "8rem",
        {
          lineHeight: "1",
        },
      ],
    },
    fontFamily: {
      serif: ['EB Garamond', 'font-serif'],
      sans: ['inter', 'font-sans'],
      mono: ['JetBrains Mono', 'font-sans'],
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

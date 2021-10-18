const colors = require('tailwindcss/colors')
module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    screens: {
      'mini': '360px',
      
      'sm': '640px',
      
      'md': '768px',

      'lg': '1024px',

      'xl' : '1280px',
      '2xl' : '1536px',
    },
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      red: colors.red,
      yellow: colors.yellow,
      blue: colors.blue,
      orange: colors.orange,
      green: colors.green,
      cyan: colors.cyan,
      sky: colors.sky,
      indigo: colors.indigo,
      violet: colors.violet,
      purple: colors.purple,
      pink: colors.pink,
      rose: colors.rose,

      primary: {
        darkest: '#240604',
        dark: '#360907',
        DEFAULT: '#510D0A',
        light: '#7F1510',
        lightest: '#E95149',
      },
      secundary: {
        darkest: '#7A5000',
        dark: '#A36A00',
        DEFAULT: '#E59500',
        light: '#FFB01F',
        lightest: '#FFBF47',
      },
      tertiary: {
        darkest: '#000C14',
        dark: '#001829',
        DEFAULT: '#002642',
        light: '#00538F',
        lightest: '#0083E0',
      },
      baseLight: {
        darkest: '#C4ABAB',
        dark: '#D5C3C3',
        DEFAULT: '#E5DADA',
        light: '#F7F3F3',
        lightest: '#FFFAFA'
      },
      baseDark: {
        dark: '#010208',
        DEFAULT: '#02040F',
      },
    },
    extend: {
      animation: {
        'spin-slow': 'spin 3s linear infinite',
      },
      brightness: {
        25: '.25',
      },
    },
  },
  variants: {
    extend: {
      scale: ['group-hover'],
      animation: ['hover', 'focus'],
      filter: ['hover', 'focus'],
    },
  },
  plugins: [],
}

const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            primary: colors.emerald,
            white: colors.white,
        },
        extend: {
            fontFamily: {
                // sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
                serif: ['Merriweather', ...defaultTheme.fontFamily.serif]
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};

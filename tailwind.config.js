const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        plugin(function({ addUtilities }) {
            addUtilities({
                '.font-arabic': {
                    'font-family': 'Amiri',
                },
                '.font-roboto': {
                    'font-family': 'Roboto',
                },
            })
        }),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')
    ],
};

const plugin = require('tailwindcss/plugin')

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: ["class", ".body--dark"],
    content: [
        // "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./resources/vendor/larasar/js/**/*.vue",
        // "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],
    important: true,
    theme: {},

    plugins: [
        plugin(function({ addUtilities }) {
            addUtilities({
                '.font-arabic': {
                    'font-family': 'Amiri',
                },
                '.font-public-sans': {
                    'font-family': '"Public Sans"',
                },
            })
        }),
        // require('@tailwindcss/forms'),
        // require('@tailwindcss/typography'),
    ],
};

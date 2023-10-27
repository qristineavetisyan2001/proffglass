const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                'amu': ['Arial', 'AMU'],
                'noah' : ['Noah']
            },
            backgroundColor: {
                'black-37': 'rgba(0, 0, 0, 0.45)',
                'home-page-background': '#F1F1F1',
                'line-color': '#828485',
            },
            textColor: {
                'title-color': '#404449',
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};

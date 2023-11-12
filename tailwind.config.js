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
            },
            screens: {
                'xs': '320px',    // Extra Small screens (e.g., smartphones)
                'sm': '640px',    // Small screens (e.g., small tablets)
                'md': '768px',    // Medium screens (e.g., large smartphones and tablets)
                'lg': '1024px',   // Large screens (e.g., desktops and laptops)
                'xl': '1280px',   // Extra Large screens (e.g., larger desktops)
                '2xl': '1536px',  // Larger screens (e.g., wide monitors)
                '3xl': '1920px',  // Big Screen
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};

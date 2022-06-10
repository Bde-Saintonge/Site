// const colors = require("tailwindcss/colors");

module.exports = {
    darkMode: "media",
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                jaunesaintonge: "#fcc13e",
                bleusaintonge: "#224096",
            },
        },
        variants: {},
        plugins: [
            require('@tailwindcss/forms'),
        ],
    },
    plugins: [],
};

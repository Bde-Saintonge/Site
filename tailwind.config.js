// const colors = require("tailwindcss/colors");

module.exports = {
    darkMode: "media",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                jaunesaintonge: "#fcc13e",
                bleusaintonge: "#224096",
            },
        },
        variants: {},
        plugins: [],
    },
    plugins: [],
};

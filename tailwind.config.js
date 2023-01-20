const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    extend: {
        colors: {
            brightRed: "hsl(12, 88%, 59%)",
            brightRedLight: "hsl(12, 88%, 69%)",
            brightRedSupLight: "hsl(12, 88%, 95%)",
            darkBlue: "hsl(217, 68%, 50%)",
            darkGrayishBlue: "hsl(227, 12%, 61%)",
            veryDarkBlue: "hsl(233, 12%, 13%)",
            veryPaleRed: "hsl(13, 100%, 96%)",
            veryLightGray: "hsl(0, 0%, 98%)",
        },
    },

    plugins: [require("@tailwindcss/forms")],
};

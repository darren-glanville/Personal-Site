import preset from "./vendor/filament/support/tailwind.config.preset";
const defaultTheme = require("tailwindcss/defaultTheme");

export default {
    presets: [preset],
    plugins: [require("tailwindcss-animate")],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Roboto Condensed", ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                base: "2rem",
            },
        },
    },
};

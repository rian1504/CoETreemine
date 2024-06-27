/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
        colors: {
            "custom-grey": "#F5F5F5",
            "buyer-green": "#047C1E",
            "admin-green": "#85B485",
        },
        fontFamily: {
            inter: ["Inter", "sans-serif"],
        },
    },
    plugins: [require("flowbite/plugin")],
};

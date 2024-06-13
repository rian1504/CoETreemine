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
            grays: {
                600: "989898",
                700: "#EEF0E5",
                800: "#F5F5F5",
                900: "#D9D9D9",
            },
            greens: {
                600: "#B0D9B1",
                700: "#79AC78",
                800: "#618274",
                900: "#047C1E",
            },
            admin: {
                100: "#FCFCFC",
                900: "#85B485"
            }
        },
    },
    plugins: [require("flowbite/plugin")],
};

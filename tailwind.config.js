/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {},
        colors: {
            transparent: 'F5F5F5',
            grey: 'D9D9D9',
            primary: '047C1E',
            secondary: '618274',
            tertiery: 'B0D9B1',
            quaternary: '79AC78'
        }
    },
    plugins: [
        require('flowbite/plugin')]
};

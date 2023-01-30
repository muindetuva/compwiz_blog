/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            'sm': '425px',
            'md': '640px',
            'lg': '768px',
            'xl': '1024px'
        },
        extend: {},
    },
    plugins: [],
}

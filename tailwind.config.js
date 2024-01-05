/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontSize: {
                md: "17px",
            },
            fontFamily: {
                arab: "p294-v1",
            },
        },
    },
    plugins: [],
};

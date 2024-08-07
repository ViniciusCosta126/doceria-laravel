/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            sm: "480px",
            md: "768px",
            lg: "976px",
            xl: "1440px",
        },
        colors: {
            blue: "#151E3F",
            purple: "#7e5bef",
            pink: "#ff49db",
            orange: "#F47521",
            green: "#1C830C",
            "green-light": "#75b798",
            yellow: "#ffc82c",
            "gray-dark": "#273444",
            gray: "#93A8AC",
            "gray-light": "#d3dce6",
            dark: "#000",
            white: "#ffff",
            red: "#DF2F2F",
            "red-light": "#E44E5A",
        },
        fontFamily: {
            sans: ["Poppins", "sans-serif"],
            serif: ["Merriweather", "serif"],
        },
        extend: {},
    },
    plugins: [],
};

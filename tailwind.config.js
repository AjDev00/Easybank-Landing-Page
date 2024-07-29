/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                // mobileBgImage:
                //     "url('/src/assets/home/background-home-mobile.jpg')",
                desktopBgImage: "url('/images/bg-intro-desktop.svg')",
            },
        },
    },
    plugins: [],
};

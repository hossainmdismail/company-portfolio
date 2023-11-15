/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "button-primary": "#C2E812",
                "primary-bg": "#C2E812",
                "primary-hover": "#c2e813f0",
                "text-primary": "#111",
                "footer-bg": "#121212;",
                "carusel-primary": "#121212",
                "h-overlay": "linear-gradient(180deg, #121212 0%, rgba(18, 18, 18, 0.00) 100%)",
                "paragraph": "#000000c7",
            },
            fontFamily: {
                'figtree': ['Figtree', 'sans-serif'],
            },
            // Add any other theme customizations here
        },
    },
    plugins: [],
}


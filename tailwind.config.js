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
                primary: { "50": "#eff6ff", "100": "#dbeafe", "200": "#bfdbfe", "300": "#93c5fd", "400": "#60a5fa", "500": "#3b82f6", "600": "#2563eb", "700": "#1d4ed8", "800": "#1e40af", "900": "#1e3a8a" },
                azul: {"200": "#5c9cbc", "300": "#5c9cbc", "400": "#18699d", "500": "#04548c", "600": "#033B63"},
                rojo: {"300": "#eb335b", "400": "#e9204c", "500": "#cf143d", "600": "#ba1237", "700": "#950f2c"},
                verde: {"500": "#BED700"},
                marron: {"500": "#FEB901"}, 
              }
        },
    },
    plugins: [],
};

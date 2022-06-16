// tailwind.config.js
const url = require("url");
module.exports = {
    mode: 'jit',
    purge: [],
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                'poppins': ['Poppins', 'sans-serif'],
                'hind': ['Hind', 'sans-serif'],
            },
            backgroundImage: {
                'anyBG': "url('/Microsoft.png')",
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}

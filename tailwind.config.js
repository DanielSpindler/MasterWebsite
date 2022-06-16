// tailwind.config.js
module.exports = {
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
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}

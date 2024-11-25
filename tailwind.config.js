import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins'],
            },
            colors: {
                // 'primary-blue':'#111827',
                'dark-blue': '#2d3748',
                'light-blue': '#4A5568',
                'primary-yellow': '#FFC107',
                'highlight-yellow': '#FF9800',
                'primary-gray': '#757575',
                'light-gray': '#F5F5F5',
                'transparent-black': 'rgba(0, 0, 0, 0.5)',
                'primary-blue':'rgb(26, 32, 44)',
            },
            backgroundImage: {
                // 'primary-blue': 'linear-gradient(-90deg, #111827, #1e293b)',
                // 'primary-blue': 'linear-gradient(-90deg, #111827, #3b82f6)',
                // 'primary-blue': 'linear-gradient(-90deg, #111827, #1e3a8a)',
                // 'primary-blue': 'linear-gradient(-90deg, #111827, #2563eb)',

            },
            screens: {
                'lg': '1040px',
                'md':'800px',
                'sm': '512px',
                'xs': '370px'
            },
            spacing: {
                '100': '30rem'
            }
        },
    },
    plugins: [],
};

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
            colors:{
                'primary-blue':'#111827',
                'dark-blue':'#111840',
                'light-blue':'#4A5568',
                'primary-yellow':'#FFC107',
                'highlight-yellow':'#FF9800',
                'primary-gray':'#757575',
                'light-gray':'#F5F5F5',
                'transparent-black':'rgba(0, 0, 0, 0.5)'
            },
            screens:{
                'lg':'1040px',
                'sm':'512px'
            },
            spacing:{
                '100':'30rem'
            }
        },
    },
    plugins: [],
};

import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Plus Jakarta Sans"', ...defaultTheme.fontFamily.sans],
                display: ['"Instrument Serif"', 'Georgia', 'serif'],
            },
            colors: {
                inn: {
                    navy: '#0B1220',
                    slate: '#1E293B',
                    mist: '#F8FAFC',
                },
                tax: {
                    teal: '#0D9488',
                    mint: '#CCFBF1',
                    deep: '#115E59',
                },
                loan: {
                    navy: '#0A1628',
                    gold: '#C9A227',
                    champagne: '#F5E6C8',
                },
            },
            backgroundImage: {
                'main-gradient': 'linear-gradient(135deg, #0B1220 0%, #1E3A5F 50%, #0D9488 100%)',
                'tax-gradient': 'linear-gradient(180deg, #FFFFFF 0%, #F0FDFA 50%, #ECFDF5 100%)',
                'loan-gradient': 'linear-gradient(135deg, #0A1628 0%, #132743 40%, #1a365d 100%)',
            },
            animation: {
                'fade-up': 'fadeUp 0.7s ease-out forwards',
                'float': 'float 6s ease-in-out infinite',
            },
            keyframes: {
                fadeUp: {
                    '0%': { opacity: '0', transform: 'translateY(24px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-12px)' },
                },
            },
            maxWidth: {
                '8xl': '88rem',
                '9xl': '96rem',
            },
        },
    },
    plugins: [],
};

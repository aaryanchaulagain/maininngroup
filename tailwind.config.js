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
                    navy: '#0B1F33',
                    'navy-deep': '#122B45',
                    'footer-bg': '#081726',
                    blue: '#1E63D8',
                    gold: '#C9A96E',
                    bg: '#F7F9FC',
                    text: '#101828',
                    muted: '#667085',
                    border: '#E4E7EC',
                },
                loan: {
                    navy: '#081B33',
                    'navy-mid': '#12345A',
                    'footer-bg': '#061423',
                    blue: '#1E63D8',
                    gold: '#C9A96E',
                    surface: '#F8FAFC',
                    text: '#101828',
                    muted: '#667085',
                    border: '#E4E7EC',
                },
                advisory: {
                    navy: '#061428',
                    blue: '#0c4a8c',
                    sky: '#1e6bb8',
                    ice: '#e8f2fc',
                    accent: '#3b9eff',
                    slate: '#64748b',
                },
            },
            backgroundImage: {
                'main-gradient': 'linear-gradient(135deg, #0B1220 0%, #1E3A5F 50%, #0D9488 100%)',
                'tax-gradient': 'linear-gradient(180deg, #F7F9FC 0%, #FFFFFF 100%)',
                'loan-gradient': 'linear-gradient(135deg, #081B33 0%, #12345A 100%)',
                'advisory-gradient': 'linear-gradient(135deg, #061428 0%, #0c4a8c 45%, #1a5f9e 100%)',
                'advisory-mesh': 'radial-gradient(ellipse 80% 60% at 20% 0%, rgba(59,158,255,0.25) 0%, transparent 55%), radial-gradient(ellipse 60% 50% at 90% 20%, rgba(30,107,184,0.2) 0%, transparent 50%), linear-gradient(180deg, #061428 0%, #0a2540 100%)',
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

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './*.php',
    './includes/**/*.php',
    './services/**/*.php',
    './js/**/*.js'
  ],
  theme: {
    extend: {
      colors: {
        gold: {
          light: '#f0d171',
          DEFAULT: '#d4af37',
          dark: '#b8860b'
        },
        charcoal: {
          light: '#475569',
          DEFAULT: '#334155',
          dark: '#1e293b'
        },
        success: '#22c55e',
        error: '#ef4444',
        info: '#14b8a6',
        warning: '#f59e0b',
        black: '#0a0a0a',
        'dark-gray': '#1a1a1a',
        'medium-gray': '#64748b',
        'light-gray': '#cbd5e1',
        'off-white': '#f8fafc',
        border: 'rgb(212 175 55 / 0.2)'
      },
      borderRadius: {
        DEFAULT: '0.625rem',
        sm: 'calc(0.625rem - 4px)',
        md: 'calc(0.625rem - 2px)',
        lg: '0.625rem',
        xl: 'calc(0.625rem + 4px)'
      },
      backdropBlur: {
        xs: '2px',
        sm: '4px',
        DEFAULT: '10px',
        md: '15px',
        lg: '20px',
        xl: '25px'
      },
      animation: {
        'float-rotate': 'float-rotate 12s ease-in-out infinite',
        'float-pulse': 'float-pulse 12s ease-in-out infinite',
        'float-spin': 'float-spin 12s linear infinite',
        'float-morph': 'float-morph 12s ease-in-out infinite'
      },
      keyframes: {
        'float-rotate': {
          '0%': { transform: 'translateY(0px) rotateX(0deg) rotateY(0deg)' },
          '33%': { transform: 'translateY(-20px) rotateX(15deg) rotateY(120deg)' },
          '66%': { transform: 'translateY(-10px) rotateX(-10deg) rotateY(240deg)' },
          '100%': { transform: 'translateY(0px) rotateX(0deg) rotateY(360deg)' }
        },
        'float-pulse': {
          '0%, 100%': { transform: 'translateY(0px) scale(1)', opacity: '0.6' },
          '50%': { transform: 'translateY(-30px) scale(1.1)', opacity: '0.8' }
        },
        'float-spin': {
          '0%': { transform: 'rotate(0deg) translateY(0px)' },
          '50%': { transform: 'rotate(180deg) translateY(-20px)' },
          '100%': { transform: 'rotate(360deg) translateY(0px)' }
        },
        'float-morph': {
          '0%, 100%': { borderRadius: '30% 70% 70% 30% / 30% 30% 70% 70%', transform: 'translateY(0px) rotate(0deg)' },
          '25%': { borderRadius: '58% 42% 75% 25% / 76% 46% 54% 24%', transform: 'translateY(-15px) rotate(90deg)' },
          '50%': { borderRadius: '50% 50% 33% 67% / 55% 27% 73% 45%', transform: 'translateY(-25px) rotate(180deg)' },
          '75%': { borderRadius: '33% 67% 58% 42% / 63% 68% 32% 37%', transform: 'translateY(-15px) rotate(270deg)' }
        }
      }
    }
  },
  plugins: []
}

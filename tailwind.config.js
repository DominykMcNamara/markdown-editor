const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto', 'Roboto Slab', 'Roboto mono', 'Inter var', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'hm': ['15px'],
                'hs': ['14px', {
                    tracking: 'widest'

                }],
                'bs': ['13px'],
                'h1': ['32px', {
                    weight: 'bold',
                }],

                'h2': ['28px'],
                'h3': ['24px', {
                    weight: 'bold',
                }],
                'h4': ['20px', {
                    weight: 'bold',
                }],
                'h5': ['16px', {
                    weight: 'bold',
                }],
                'h6': ['14px'],
                'p': ['14px', {
                    leading: 'normal'
                }],
            },
            screens: {
                'desktop': '1440px',
                'tablet': '768px',
                'mobile': '344px'
            },
        },
        colors: {
            'neutral-900': '#151619',
            'neutral-700': '#35393F',
            'neutral-300': '#C1C4CB',
            'neutral-200': '#E4E4E4',
            'neutral-100': '#F5F5F5',
            'white': '#FFFFFF',
            'red-500': '#E46643',
            'orange-300': '#F39765',
            'zinc-900': '#1D1F22',
            'zinc-800': '#2B2D31',
            'zinc-500': '#7C8187',
            'gray-600': '#5A6069',


        }
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}

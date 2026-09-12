<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    ink: '#1F2A24',
                    paper: '#F3F1E9',
                    ledger: '#2F5D50',
                    ledgerdark: '#20423A',
                    brass: '#B08628',
                    slate: '#5B6B63',
                },
                fontFamily: {
                    serif: ['"Source Serif 4"', 'serif'],
                    sans: ['Inter', 'sans-serif'],
                    display: ['"Epilogue"', 'sans-serif'],
                },
                keyframes: {
                    'scroll-left': {
                        from: {
                            transform: 'translateX(0)'
                        },
                        to: {
                            transform: 'translateX(-50%)'
                        }
                    },
                    'scroll-right': {
                        from: {
                            transform: 'translateX(-50%)'
                        },
                        to: {
                            transform: 'translateX(0)'
                        }
                    },
                    'pulse-badge': {
                        '0%, 100%': {
                            transform: 'scale(1)'
                        },
                        '50%': {
                            transform: 'scale(1.15)'
                        },
                    },
                    'dot-ping': {
                        '0%': {
                            boxShadow: '0 0 0 0 rgba(47,93,80,0.5)'
                        },
                        '70%': {
                            boxShadow: '0 0 0 8px rgba(47,93,80,0)'
                        },
                        '100%': {
                            boxShadow: '0 0 0 0 rgba(47,93,80,0)'
                        },
                    },
                    'pin-bounce': {
                        '0%, 100%': {
                            transform: 'translateY(0) rotate(-45deg)'
                        },
                        '50%': {
                            transform: 'translateY(-8px) rotate(-45deg)'
                        },
                    },
                },
                animation: {
                    'scroll-left': 'scroll-left 32s linear infinite',
                    'scroll-right': 'scroll-right 32s linear infinite',
                    'pulse-badge': 'pulse-badge 2.2s ease-in-out infinite',
                    'dot-ping': 'dot-ping 1.8s ease-out infinite',
                    'pin-bounce': 'pin-bounce 2.4s ease-in-out infinite',
                },
            }
        }
    }
</script>

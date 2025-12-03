<script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: '#4f46e5',
                        secondary: '#7c3aed',
                        accent: '#ec4899',
                        dark: '#1e293b',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-out',
                        'fade-up': 'fadeUp 0.5s ease-out',
                        'scale-in': 'scaleIn 0.3s ease-out',
                        'slide-up': 'slideUp 0.4s ease-out',
                        'bounce-slow': 'bounce 2s infinite',
                        'pulse-slow': 'pulse 3s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': {
                                opacity: '0'
                            },
                            '100%': {
                                opacity: '1'
                            },
                        },
                        fadeUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(20px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        },
                        scaleIn: {
                            '0%': {
                                transform: 'scale(0.9)',
                                opacity: '0'
                            },
                            '100%': {
                                transform: 'scale(1)',
                                opacity: '1'
                            },
                        },
                        slideUp: {
                            '0%': {
                                transform: 'translateY(30px)',
                                opacity: '0'
                            },
                            '100%': {
                                transform: 'translateY(0)',
                                opacity: '1'
                            },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        .gradient-text {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 30px -5px rgba(0, 0, 0, 0.15), 0 15px 15px -5px rgba(0, 0, 0, 0.08);
        }

        .icon-container {
            transition: all 0.3s ease;
        }

        .card:hover .icon-container {
            transform: scale(1.15) rotate(8deg);
        }

        .copy-btn {
            transition: all 0.2s ease;
        }

        .copy-btn:active {
            transform: scale(0.95);
        }

        .toast {
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .toast.show {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }

        .btn-primary {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            transition: all 0.2s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #4338ca 0%, #6d28d9 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(79, 70, 229, 0.4);
        }

        .bg-pattern {
            background-color: #f8fafc;
            background-image:
                radial-gradient(circle at 20% 50%, rgba(79, 70, 229, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(124, 58, 237, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(236, 72, 153, 0.05) 0%, transparent 50%);
        }

        /* Bank card styles */
        .bank-card {
            position: relative;
            overflow: hidden;
        }

        .bank-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.15) 0%, transparent 70%);
            transform: rotate(45deg);
            transition: all 0.5s ease;
        }

        .bank-card:hover::before {
            top: -30%;
            right: -30%;
        }

        .contact-chip {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .contact-chip::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .contact-chip:hover::before {
            left: 100%;
        }

        .contact-chip:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .tab-active {
            border-bottom: 3px solid #4f46e5;
            color: #4f46e5;
        }

        .tab-indicator {
            position: absolute;
            bottom: 0;
            height: 3px;
            background: linear-gradient(90deg, #4f46e5, #7c3aed);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Gradient definitions for default icons */
        .gradient-blue {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        }

        .gradient-purple {
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
        }

        .gradient-pink {
            background: linear-gradient(135deg, #ec4899, #db2777);
        }

        .gradient-green {
            background: linear-gradient(135deg, #10b981, #059669);
        }

        .gradient-orange {
            background: linear-gradient(135deg, #f59e0b, #d97706);
        }

        .gradient-red {
            background: linear-gradient(135deg, #ef4444, #dc2626);
        }

        .gradient-teal {
            background: linear-gradient(135deg, #14b8a6, #0d9488);
        }

        .gradient-indigo {
            background: linear-gradient(135deg, #6366f1, #4f46e5);
        }

        /* Floating animation */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        /* Glow effect */
        .glow {
            box-shadow: 0 0 20px rgba(79, 70, 229, 0.5);
        }

        /* Shimmer effect */
        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: -200% center;
            }

            100% {
                background-position: 200% center;
            }
        }
    </style>

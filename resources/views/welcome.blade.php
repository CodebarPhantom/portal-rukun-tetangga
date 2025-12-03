<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iuran RT 037 - Villa Permata Hijau</title>
    <meta name="description" content="Sistem pembayaran iuran RT.037/RW.014 Villa Permata Hijau">

    <link rel="icon" type="image/jpeg" href="{{ asset('storage/logo.jpeg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

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
</head>

<body class="font-inter bg-pattern min-h-screen">
    <!-- Animated Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute -top-40 -right-40 w-80 h-80 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse-slow">
        </div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-indigo-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse-slow"
            style="animation-delay: 1s"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse-slow"
            style="animation-delay: 2s"></div>
    </div>

    <!-- Main Container -->
    <div class="relative z-10 max-w-md mx-auto px-4 py-8">
        <!-- Header -->
        <header class="text-center mb-10">
            <div class="inline-block p-5 bg-white rounded-2xl shadow-md mb-6 relative">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-2xl opacity-20 blur-sm">
                </div>
                <img src="{{ asset('storage/logo.jpeg') }}" alt="Logo RT"
                    class="w-20 h-20 object-contain relative z-10">
            </div>
            <h1 class="text-4xl font-bold text-gray-900 mb-1">Iuran RT 037</h1>
            <p class="text-gray-600 mb-4">Villa Permata Hijau</p>
            <div
                class="inline-flex items-center gap-2 px-4 py-2 bg-indigo-50 text-indigo-700 rounded-full text-sm font-medium">
                <i class="bi bi-lightning-charge"></i>
                <span>Pembayaran Digital</span>
            </div>
        </header>
        <!-- Categories Section -->
        @if ($categories->count() > 0)
            <div class="mb-8 animate-fade-up" style="animation-delay: 0.1s">
                <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <span class="w-1 h-6 bg-gradient-to-b from-indigo-500 to-purple-500 rounded-full"></span>
                    Pilih Blok Anda
                </h2>

                <div class="grid grid-cols-2 gap-4">
                    @foreach ($categories as $index => $category)
                        <a href="#"
                            class="card bg-white rounded-xl p-5 shadow-lg cursor-pointer group relative overflow-hidden"
                            onclick="selectCategory({{ $category->id }}, '{{ $category->name }}'); return false;"
                            style="animation-delay: {{ $index * 0.1 + 0.2 }}s">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-purple-50 opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                            <div class="relative z-10 flex flex-col items-center">
                                <div class="icon-container w-16 h-16 rounded-2xl flex items-center justify-center mb-3 shadow-lg"
                                    @if ($category->color_class) style="background: {{ $category->color_class }}"
                                     @else
                                     style="background: linear-gradient(135deg, #8b5cf6, #7c3aed)" @endif>
                                    @if ($category->url_icon)
                                        <img src="{{ asset($category->url_icon) }}" alt="{{ $category->name }}"
                                            class="w-10 h-10 object-contain">
                                    @else
                                        <i class="bi {{ $category->icon_class ?? 'bi-house' }} text-2xl text-white"></i>
                                    @endif
                                </div>
                                <h3 class="font-semibold text-gray-900">{{ $category->name }}</h3>
                                @if ($category->description)
                                    <p class="text-sm text-gray-500 mt-1 text-center">{{ $category->description }}</p>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @else
            <div class="bg-white rounded-xl p-6 text-center shadow-lg mb-8 animate-fade-up">
                <i class="bi bi-exclamation-circle text-5xl text-gray-400 mb-3"></i>
                <p class="text-gray-600 font-medium">Kategori belum tersedia</p>
            </div>
        @endif

        <!-- Payment Options Section -->
        <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                <span class="w-1 h-6 bg-gradient-to-b from-indigo-500 to-purple-500 rounded-full"></span>
                Informasi Pembayaran
            </h2>

            <!-- Tabs -->
            <div class="relative mb-4">
                <div class="flex gap-2 border-b border-gray-200">
                    <button onclick="switchTab('bendahara')" id="tab-bendahara"
                        class="tab-active px-4 py-2 font-medium text-sm transition-colors">
                        Bendahara RT
                    </button>
                    <button onclick="switchTab('masjid')" id="tab-masjid"
                        class="px-4 py-2 font-medium text-sm text-gray-500 hover:text-gray-700 transition-colors">
                        Rekening Masjid
                    </button>
                </div>
                <div id="tab-indicator" class="tab-indicator"></div>
            </div>

            <!-- Bendahara RT Content -->
            <div id="content-bendahara" class="space-y-4">
                <!-- Bendahara 1 -->
                <div class="bank-card bg-gradient-to-r from-blue-600 to-blue-700 rounded-xl p-5 text-white shadow-xl">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-12 h-12 bg-white/20 backdrop-blur rounded-xl flex items-center justify-center">
                                <i class="bi bi-bank2 text-2xl"></i>
                            </div>
                            <div>
                                <div class="text-sm opacity-90">Bendahara 1</div>
                                <div class="font-semibold text-lg">Sea Bank</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90">A/n</div>
                            <div class="font-semibold">Anggia Yulita</div>
                        </div>
                    </div>
                    <div class="bg-white/20 backdrop-blur rounded-lg p-3">
                        <div class="flex items-center justify-between gap-3">
                            <div class="font-mono text-xl">901048170909</div>
                            <button onclick="copyToClipboard('901048170909', 'Sea Bank')"
                                class="copy-btn bg-white text-blue-600 px-3 py-1 rounded-lg text-sm font-medium shadow">
                                <i class="bi bi-clipboard"></i> Salin
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Bendahara 2 -->
                <div
                    class="bank-card bg-gradient-to-r from-orange-600 to-orange-700 rounded-xl p-5 text-white shadow-xl">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-12 h-12 bg-white/20 backdrop-blur rounded-xl flex items-center justify-center">
                                <i class="bi bi-bank2 text-2xl"></i>
                            </div>
                            <div>
                                <div class="text-sm opacity-90">Bendahara 2</div>
                                <div class="font-semibold text-lg">BNI</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90">A/n</div>
                            <div class="font-semibold">Virna Melinda Rahmawati</div>
                        </div>
                    </div>
                    <div class="bg-white/20 backdrop-blur rounded-lg p-3">
                        <div class="flex items-center justify-between gap-3">
                            <div class="font-mono text-xl">0573247605</div>
                            <button onclick="copyToClipboard('0573247605', 'BNI')"
                                class="copy-btn bg-white text-orange-600 px-3 py-1 rounded-lg text-sm font-medium shadow">
                                <i class="bi bi-clipboard"></i> Salin
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Masjid Content -->
            <div id="content-masjid" class="hidden space-y-4">
                <!-- Rekening Masjid -->
                <div
                    class="bank-card bg-gradient-to-r from-green-600 to-green-700 rounded-xl p-5 text-white shadow-xl">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-12 h-12 bg-white/20 backdrop-blur rounded-xl flex items-center justify-center">
                                <i class="bi bi-mosque text-2xl"></i>
                            </div>
                            <div>
                                <div class="text-sm opacity-90">Rekening Masjid</div>
                                <div class="font-semibold text-lg">Bank Muamalat</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90">A/n</div>
                            <div class="font-semibold">MASJID AN-NAHL</div>
                        </div>
                    </div>
                    <div class="bg-white/20 backdrop-blur rounded-lg p-3">
                        <div class="flex items-center justify-between gap-3">
                            <div class="font-mono text-xl">3410023333</div>
                            <button onclick="copyToClipboard('3410023333', 'Bank Muamalat')"
                                class="copy-btn bg-white text-green-600 px-3 py-1 rounded-lg text-sm font-medium shadow">
                                <i class="bi bi-clipboard"></i> Salin
                            </button>
                        </div>
                    </div>
                    <div class="mt-3 text-xs opacity-90 flex items-center gap-1">
                        <i class="bi bi-info-circle"></i> Kode Bank: 147
                    </div>
                </div>

                <!-- Konfirmasi Pembayaran -->
                <div class="bg-white rounded-xl p-5 shadow-lg">
                    <h3 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                        <i class="bi bi-check-circle-fill text-green-500"></i>
                        Konfirmasi Pembayaran
                    </h3>
                    <div class="space-y-3">
                        <a href="https://wa.me/6282213660543" target="_blank"
                            class="contact-chip flex items-center justify-between bg-green-50 border border-green-200 rounded-lg p-3">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                    <i class="bi bi-whatsapp text-white text-lg"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Ust Gunawan</div>
                                    <div class="text-sm text-gray-600">0822-1366-0543</div>
                                </div>
                            </div>
                            <i class="bi bi-arrow-right-circle text-green-500 text-xl"></i>
                        </a>

                        <a href="https://wa.me/6287879066640" target="_blank"
                            class="contact-chip flex items-center justify-between bg-green-50 border border-green-200 rounded-lg p-3">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                    <i class="bi bi-whatsapp text-white text-lg"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Ust Amir Mahmud</div>
                                    <div class="text-sm text-gray-600">0878-7906-6640</div>
                                </div>
                            </div>
                            <i class="bi bi-arrow-right-circle text-green-500 text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Admin RT Section -->
        <div class="mb-8 animate-slide-up" style="animation-delay: 0.4s">
            <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                <span class="w-1 h-6 bg-gradient-to-b from-indigo-500 to-purple-500 rounded-full"></span>
                Admin RT
            </h2>

            <div class="bg-white rounded-xl p-5 shadow-lg">
                <div class="space-y-3">
                    <a href="https://wa.me/{{ $admin_whatsapp ?? '6281313144088' }}?text=Halo%20saya%20ingin%20membayar%20iuran%20RT%20037"
                        target="_blank"
                        class="contact-chip flex items-center justify-between bg-indigo-50 border border-indigo-200 rounded-lg p-3">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-indigo-500 rounded-full flex items-center justify-center">
                                <i class="bi bi-whatsapp text-white text-lg"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">WhatsApp Admin</div>
                                <div class="text-sm text-gray-600">{{ $admin_whatsapp ?? '6281313144088' }}</div>
                            </div>
                        </div>
                        <i class="bi bi-arrow-right-circle text-indigo-500 text-xl"></i>
                    </a>

                    <a href="mailto:{{ $admin_email ?? 'rukuntetanggavph.037@mail.com' }}"
                        class="contact-chip flex items-center justify-between bg-purple-50 border border-purple-200 rounded-lg p-3">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center">
                                <i class="bi bi-envelope-fill text-white text-lg"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Email Admin</div>
                                <div class="text-sm text-gray-600">
                                    {{ $admin_email ?? 'rukuntetanggavph.037@mail.com' }}</div>
                            </div>
                        </div>
                        <i class="bi bi-arrow-right-circle text-purple-500 text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-6 text-gray-600 text-sm relative z-10">
        <p>&copy; 2025 RT.037/RW.014 Villa Permata Hijau</p>
        <p class="text-xs mt-1 text-gray-500">Perumahan Karawang</p>
    </footer>

    <!-- Toast Notification -->
    <div id="toast"
        class="toast fixed bottom-6 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white px-6 py-3 rounded-full shadow-2xl z-50 flex items-center gap-3">
        <i class="bi bi-check-circle-fill text-green-400 text-xl"></i>
        <span id="toast-message" class="font-medium"></span>
    </div>

    <script>
        function selectCategory(id, name) {
            localStorage.setItem('selectedCategory', JSON.stringify({
                id: id,
                name: name
            }));
            showToast(`✓ Blok ${name} dipilih`);
        }

        function copyToClipboard(accountNumber, bankName) {
            // Get the button element more reliably
            const button = event.currentTarget;
            const originalHTML = button.innerHTML;

            // Show loading state
            button.innerHTML = '<i class="bi bi-arrow-clockwise"></i> <span>Menyalin...</span>';
            button.disabled = true;

            navigator.clipboard.writeText(accountNumber).then(() => {
                // Success feedback
                button.innerHTML = '<i class="bi bi-check-lg"></i> <span>Tersalin</span>';
                button.classList.add('bg-green-600');
                button.classList.remove('bg-white', 'text-blue-600', 'text-orange-600', 'text-green-600');

                showToast(`✓ No. Rekening ${bankName} disalin!`);

                // Reset button after delay
                setTimeout(() => {
                    button.innerHTML = originalHTML;
                    button.disabled = false;
                    button.classList.remove('bg-green-600');

                    // Restore original button classes based on bank
                    if (bankName === 'Sea Bank') {
                        button.classList.add('bg-white', 'text-blue-600');
                    } else if (bankName === 'BNI') {
                        button.classList.add('bg-white', 'text-orange-600');
                    } else if (bankName === 'Bank Muamalat') {
                        button.classList.add('bg-white', 'text-green-600');
                    }
                }, 2000);
            }).catch((err) => {
                console.error('Clipboard error:', err);

                // Fallback: try using document.execCommand
                const textArea = document.createElement('textarea');
                textArea.value = accountNumber;
                textArea.style.position = 'fixed';
                textArea.style.left = '-999999px';
                textArea.style.top = '-999999px';
                document.body.appendChild(textArea);
                textArea.focus();
                textArea.select();

                try {
                    const successful = document.execCommand('copy');
                    document.body.removeChild(textArea);

                    if (successful) {
                        button.innerHTML = '<i class="bi bi-check-lg"></i> <span>Tersalin</span>';
                        button.classList.add('bg-green-600');
                        button.classList.remove('bg-white', 'text-blue-600', 'text-orange-600', 'text-green-600');

                        showToast(`✓ No. Rekening ${bankName} disalin!`);

                        setTimeout(() => {
                            button.innerHTML = originalHTML;
                            button.disabled = false;
                            button.classList.remove('bg-green-600');

                            // Restore original button classes
                            if (bankName === 'Sea Bank') {
                                button.classList.add('bg-white', 'text-blue-600');
                            } else if (bankName === 'BNI') {
                                button.classList.add('bg-white', 'text-orange-600');
                            } else if (bankName === 'Bank Muamalat') {
                                button.classList.add('bg-white', 'text-green-600');
                            }
                        }, 2000);
                    } else {
                        throw new Error('execCommand failed');
                    }
                } catch (fallbackErr) {
                    // Reset button on error
                    button.innerHTML = originalHTML;
                    button.disabled = false;
                    showToast('✗ Gagal menyalin. Silakan salin manual.');
                }
            });
        }

        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toast-message');

            toastMessage.textContent = message;
            toast.classList.add('show');

            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        function switchTab(tab) {
            // Hide all content
            document.getElementById('content-bendahara').classList.add('hidden');
            document.getElementById('content-masjid').classList.add('hidden');

            // Remove active class from all tabs
            document.getElementById('tab-bendahara').classList.remove('tab-active');
            document.getElementById('tab-masjid').classList.remove('tab-active');
            document.getElementById('tab-bendahara').classList.add('text-gray-500');
            document.getElementById('tab-masjid').classList.add('text-gray-500');

            // Move tab indicator
            const indicator = document.getElementById('tab-indicator');
            if (tab === 'bendahara') {
                document.getElementById('content-bendahara').classList.remove('hidden');
                document.getElementById('tab-bendahara').classList.add('tab-active');
                document.getElementById('tab-bendahara').classList.remove('text-gray-500');
                indicator.style.left = '0px';
            } else {
                document.getElementById('content-masjid').classList.remove('hidden');
                document.getElementById('tab-masjid').classList.add('tab-active');
                document.getElementById('tab-masjid').classList.remove('text-gray-500');
                indicator.style.left = '108px';
            }
        }
    </script>
</body>

</html>

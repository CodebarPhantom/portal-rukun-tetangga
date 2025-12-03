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
<!-- Footer -->
<footer class="text-center py-6 text-gray-600 text-sm relative z-10">
    <p>&copy; 2025 RT.037/RW.014 Villa Permata Hijau</p>
    <p class="text-xs mt-1 text-gray-500">Perumahan Karawang</p>
</footer>

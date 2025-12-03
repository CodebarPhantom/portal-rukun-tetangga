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

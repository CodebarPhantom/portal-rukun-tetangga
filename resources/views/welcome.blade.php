<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Coming Soon - Iuran RT.037/RW.014 Villa Permata Hijau</title>
    <meta name="description"
        content="Segera hadir sistem pembayaran iuran RT.037/RW.014 Villa Permata Hijau — bayar iuran sampah, keamanan, dan lainnya semudah belanja online!">

    <!-- ✅ Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('storage/logo.jpeg') }}">

    <!-- ✅ Open Graph (biar pas share ke WA/FB keren) -->
    <meta property="og:title" content="Coming Soon - Iuran RT.037/RW.014 Villa Permata Hijau" />
    <meta property="og:description"
        content="Bayar iuran RT semudah belanja online! Segera hadir sistem iuran digital untuk warga Villa Permata Hijau." />
    <meta property="og:image" content="{{ asset('storage/logo.jpeg') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />

    <!-- ✅ Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Coming Soon - Iuran RT.037/RW.014 Villa Permata Hijau">
    <meta name="twitter:description"
        content="Bayar iuran RT semudah belanja online! Segera hadir sistem iuran digital untuk warga Villa Permata Hijau.">
    <meta name="twitter:image" content="{{ asset('storage/logo.jpeg') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(145deg, #e8f5e9, #a5d6a7);
            font-family: "Poppins", sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            background: #fff;
            padding: 1.8rem;
            max-width: 420px;
            width: 100%;
            text-align: center;
            animation: fadeIn 1.2s ease;
        }

        .logo {
            width: 120px;
            height: auto;
            margin-bottom: 1rem;
        }

        .coming-soon {
            font-size: 1.9rem;
            font-weight: 700;
            color: #2e7d32;
            margin-bottom: 1rem;
            animation: pulse 2s infinite;
        }

        .desc {
            color: #33691e;
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .btn {
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            padding: 0.7rem 1.2rem;
            width: 100%;
            margin-bottom: 0.5rem;
        }

        footer {
            font-size: 0.85rem;
            color: #555;
            margin-top: 1.5rem;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        @media (max-width: 576px) {
            .coming-soon {
                font-size: 1.6rem;
            }

            .desc {
                font-size: 0.95rem;
            }

            .logo {
                width: 100px;
            }
        }
    </style>
</head>

<body>
    <div class="card">
        <img src="{{ asset('storage/logo.jpeg') }}" alt="Logo RT" class="logo mx-auto d-block">
        <h1 class="coming-soon">Coming Soon!</h1>

        <p class="desc">
            Halo warga <b>RT 037/RW 014 Villa Permata Hijau</b>! 👋<br>
            Nantikan sistem pembayaran iuran baru buat <b>sampah, keamanan, dan kegiatan lingkungan</b>.<br>
            <b>Gampang banget, bisa langsung dari HP!</b>
        </p>


        <img src="{{ asset('storage/iuran.jpeg') }}" alt="Banner" class="img-fluid rounded mb-3">

        <p>Hubungi kami untuk info lebih lanjut:</p>
        <a href="https://wa.me/6281313144088" class="btn btn-success">💬 Chat via WhatsApp</a>
        <a href="mailto:rukuntetanggavph.037@mail.com" class="btn btn-outline-success">📧 Kirim Email</a>

        <footer>
            &copy; 2025 RT.037/RW.014 Villa Permata Hijau<br>
            <small>Perumahan Karawang</small>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesantren Nurul Huda Utsmaniyyah | @yield('title')</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        /* --- 1. SETTING FONT GLOBAL --- */
        body {
            font-family: 'Poppins', sans-serif; /* Menggunakan font modern */
        }

        /* --- 2. LOGO NAVBAR --- */
        .navbar-brand {
            font-weight: 700; /* Lebih tebal */
            font-size: 1.5rem; /* Lebih besar */
            letter-spacing: 1px; /* Jarak antar huruf logo */
        }

        /* --- 3. MENU NAVIGASI (LINK) --- */
        .navbar-nav .nav-link {
            color: white !important; /* Warna teks putih */
            text-transform: uppercase; /* HURUF BESAR SEMUA */
            font-weight: 600; /* Agak tebal */
            font-size: 0.9rem;
            padding: 8px 15px; /* Ruang di dalam kotak */
            margin: 0 5px; /* Jarak antar menu */
            border: 2px solid transparent; /* Garis transparan (agar tidak loncat saat di-hover) */
            transition: all 0.3s ease; /* Efek transisi halus */
        }

        /* --- 4. EFEK HOVER (SAAT KURSOR MENGARAH) --- */
        /* Saat mouse di atas link, atau link sedang aktif */
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            border-color: #f4a236; /* Warna KUNING/ORANGE seperti referensi */
            color: #f4a236 !important; /* Teks ikut berubah warna */
            background-color: transparent; /* Background tetap transparan */
        }

        /* --- CSS SLIDER HERO (YANG SEBELUMNYA) --- */
        .hero-wrapper {
            height: 60vh;
            min-height: 400px;
            background-color: #0f4c3a;
            overflow: hidden;
        }

        .hero-slider-img {
            width: 100%;
            height: 60vh;
            min-height: 400px;
            object-fit: cover;
            filter: brightness(50%);
        }

        .carousel-caption {
            top: 50%;
            transform: translateY(-50%);
            bottom: auto;
            left: 10%;
            right: 10%;
        }
        /* --- CSS UNTUK DROPDOWN MENU (Gaya Grad School) --- */
    
    /* 1. Kotak Dropdown-nya */
    .dropdown-menu {
        background-color: #172238; /* Warna Biru Gelap (Navy) */
        border: none;
        border-radius: 0; /* Membuat sudut kotak tajam, tidak tumpul */
        padding: 0; /* Hilangkan jarak default */
        margin-top: 10px; /* Jarak sedikit dari navbar atas */
        box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Efek bayangan */
    }

    /* 2. Item/Tulisan di dalamnya */
    .dropdown-item {
        color: white !important; /* Tulisan Putih */
        font-family: 'Poppins', sans-serif;
        font-size: 0.85rem;
        font-weight: 500;
        text-transform: uppercase; /* Huruf Kapital Semua */
        padding: 12px 20px; /* Jarak spasi enak dilihat */
        border-bottom: 1px solid rgba(255,255,255,0.1); /* Garis tipis pemisah antar menu */
        transition: all 0.3s ease;
    }

    /* 3. Efek saat Kursor diarahkan ke Item (Hover) */
    .dropdown-item:hover {
        background-color: transparent; /* Background tetap transparan/gelap */
        color: #f4a236 !important; /* Tulisan jadi ORANYE/KUNING */
        padding-left: 25px; /* Efek geser sedikit ke kanan */
    }
    /* Efek saat kursor diarahkan ke kotak menu bawah */
    .hover-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-card:hover {
        transform: translateY(-10px); /* Naik ke atas sedikit */
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; /* Bayangan makin tebal */
        background-color: #f8f9fa; /* Warna background sedikit berubah */
        cursor: pointer;
    }
    
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
    <img src="{{ asset('img/logo.png') }}" alt="Logo Pesantren" height="70">
</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item">
    <a class="nav-link" href="/fasilitas">FASILITAS</a>
</li>
                    <li class="nav-item dropdown">
                        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        UNIT PENDIDIKAN
    </a>
    <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/unit/tk">TK NURUL HUDA UTSMANIYYAH</a></li>
        <li><a class="dropdown-item" href="/unit/smp">SMP IT NURUL HUDA UTSMANIYYAH</a></li>
        <li><a class="dropdown-item" href="/unit/smk">SMK MA'ARIF NURUL HUDA UTSMANIYYAH</a></li>
    </ul>
</li>
                    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        TENTANG KAMI
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/visi-misi">VISI & MISI</a></li>
        <li><a class="dropdown-item" href="/sejarah">SEJARAH SINGKAT</a></li>
        <li><a class="dropdown-item" href="/struktur">STRUKTUR ORGANISASI</a></li>
        <li><a class="dropdown-item" href="/peraturan">KEWAJIBAN & LARANGAN</a></li>
    </ul>
</li>
                                    <li class="nav-item ms-lg-1">
    <a class="nav-link btn btn-warning text-dark fw-bold px-4 shadow-sm" href="/psb" style="border-radius: 20px;">
        <i class="bi bi-person-plus-fill me-1"></i> PSB ONLINE
    </a>
</li>
                </ul>
                
            </div>
        </div>
    </nav>

    <div class="main-content">
        @yield('container')
    </div>
    <footer class="bg-dark text-white pt-5 mt-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-md-4">
                    <h5 class="fw-bold text-warning mb-4 text-uppercase">
                        <i class="bi bi-geo-alt-fill me-2"></i>Lokasi Kami
                    </h5>
                    <p class="small text-white-50">
                        Dsn Pasirlaja, RT/RW 30/10, Desa Lumbungsari, <br>
                        Kecamatan Lumbung, Kabupaten Ciamis <br>
                        Jawa Barat 46258
                    </p>
                    
                    <a href="https://maps.app.goo.gl/qbRVetV71CgiANeP8" target="_blank" class="btn btn-outline-light btn-sm w-100 mb-3">
                        <i class="bi bi-map-fill me-2"></i> Buka Google Maps
                    </a>

                    <h6 class="fw-bold text-warning mt-3">Kontak Telepon:</h6>
                    <p class="small text-white-50">
                        0813-7025-1606 (Kantor Putra)<br>
                        0821-2175-4329 (Kantor Putri)
                    </p>
                </div>

                <div class="col-md-4">
                    <h5 class="fw-bold text-warning mb-4 text-uppercase">
                        <i class="bi bi-share-fill me-2"></i>Ikuti Kami
                    </h5>
                    <p class="small text-white-50 mb-3">Dapatkan informasi terbaru melalui sosial media resmi kami:</p>
                    
                    <div class="d-grid gap-2">
                        <a href="https://wa.me/6281370251606" target="_blank" class="btn btn-success text-start btn-sm">
                            <i class="bi bi-whatsapp me-3"></i> WhatsApp Admin
                        </a>
                        
                        <a href="https://youtube.com/@nhutsmaniyyah?si=LQZRw-NCWYMsHckr" target="_blank" class="btn btn-danger text-start btn-sm">
                            <i class="bi bi-youtube me-3"></i> Youtube Channel
                        </a>

                        <a href="https://www.facebook.com/share/14N2wUcoara/?mibextid=wwXIfr" target="_blank" class="btn btn-primary text-start btn-sm">
                            <i class="bi bi-facebook me-3"></i> Facebook Fanpage
                        </a>

                        <a href="https://www.instagram.com/nhutsmaniyyah?igsh=cjlmdzZ3aGU2eTdp&utm_source=qr" target="_blank" class="btn btn-light text-dark text-start btn-sm">
                            <i class="bi bi-instagram me-3 text-danger"></i> Instagram Resmi
                        </a>

                        <a href="https://www.tiktok.com/@nhutsmaniyyah?_r=1&_t=ZS-929HIbj9dpg" target="_blank" class="btn btn-dark border-secondary text-start btn-sm">
                            <i class="bi bi-tiktok me-3"></i> TikTok Pesantren
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
    <h5 class="fw-bold text-warning mb-4 text-uppercase">
        <i class="bi bi-envelope-fill me-2"></i>Tanya Kami
    </h5>
    <p class="small text-white-50">Punya pertanyaan? Kirim pesan kepada kami.</p>
    
    <form onsubmit="kirimPesanWA(event)">
        
        <div class="mb-2">
            <input type="text" id="namaPengirim" class="form-control form-control-sm" placeholder="Nama Lengkap Anda" required>
        </div>
        
        <div class="mb-2">
            <input type="text" id="kontakPengirim" class="form-control form-control-sm" placeholder="Email / No. WA" required>
        </div>
        
        <div class="mb-2">
            <textarea id="isiPesan" class="form-control form-control-sm" rows="3" placeholder="Tulis pertanyaan Anda di sini..." required></textarea>
        </div>
        
        <button type="submit" class="btn btn-warning w-100 btn-sm fw-bold">
            <i class="bi bi-send-fill me-2"></i> KIRIM PESAN KE WA
        </button>
        
    </form>
</div>

            </div>

            <hr class="my-4 border-secondary">
            <div class="row pb-4 text-center text-md-start">
                <div class="col-md-6 text-white-50 small">
                    &copy; 2025 Nurul Huda Utsmaniyyah Islamic Boarding School.
                </div>
                <div class="col-md-6 text-md-end text-white-50 small">
    Designed and developed by <a href="https://www.instagram.com/p_gordic?igsh=MWh4dXhhZTF0YW5oYg==" target="_blank" class="text-white text-decoration-none fw-bold">Gobanke</a>.
</div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function kirimPesanWA(event) {
        event.preventDefault(); // Mencegah halaman reload

        // 1. Ambil isian dari formulir
        var nama = document.getElementById('namaPengirim').value;
        var kontak = document.getElementById('kontakPengirim').value;
        var pesan = document.getElementById('isiPesan').value;

        // 2. Tentukan Nomor Admin Pesantren (GANTI DENGAN NOMOR ASLI)
        // Format: 628... (tanpa + atau 0 di depan)
        var nomorAdmin = '6281370251606'; 

        // 3. Susun Format Pesan
        // %0A artinya Enter (Garis baru)
        // %20 artinya Spasi (biasanya otomatis, tapi untuk aman)
        var teksTerkirim = "Assalamualaikum Admin, saya ingin bertanya via Website.%0A%0A" +
                           "*Nama:* " + nama + "%0A" +
                           "*Kontak:* " + kontak + "%0A" +
                           "*Pertanyaan:* " + pesan + "%0A%0A" +
                           "Mohon informasinya, Terima kasih.";

        // 4. Buka WhatsApp
        // encodeURIComponent memastikan simbol aneh di pesan tetap terbaca aman
        var linkWA = 'https://wa.me/' + nomorAdmin + '?text=' + teksTerkirim;
        
        window.open(linkWA, '_blank');
    }
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init({
    duration: 1000, // Durasi animasi 1 detik
    once: false,    // PENTING: Ubah true jadi false agar animasi berulang terus
    mirror: true,   // PENTING: Agar saat scroll ke atas, elemen juga beranimasi
    offset: 120,    // Jarak pemicu animasi (opsional, agar lebih pas)
  });
</script>
</body>
</html>
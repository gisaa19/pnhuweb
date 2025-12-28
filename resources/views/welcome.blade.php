@extends('layouts.main')

@section('title', 'Beranda')

@section('container')

    <div class="hero-wrapper">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
            
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/slider01.jpg') }}" class="d-block hero-slider-img" alt="Foto Pesantren">
                    <div class="carousel-caption text-start">
                        <h1 class="display-4 fw-bold" data-aos="fade-down" data-aos-delay="500">Pondok Pesantren Nurul Huda Utsmaniyyah</h1>
                        <p class="lead" data-aos="fade-up" data-aos-delay="800">Selamat datang di Pondok Pesantren Nurul Huda Utsmaniyyah, tempat di mana ilmu dipelajari dengan kesungguhan, dan akhlak dijunjung tinggi sebagai cahaya dalam setiap langkah.</p>
                        <a href="/psb" class="btn btn-warning text-dark fw-bold mt-3 px-4 py-2 rounded-pill" data-aos="fade-up" data-aos-delay="1000">Daftar Sekarang</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/slider02.jpg') }}" class="d-block hero-slider-img" alt="Foto TK">
                    <div class="carousel-caption">
                        <h1 class="display-4 fw-bold" data-aos="fade-down">TK Nurul Huda Utsmaniyyah</h1>
                        <p class="lead" data-aos="fade-up">Membentuk karakter islami, cerdas, dan berakhlak mulia.</p>
                        <a href="/psb" class="btn btn-warning text-dark fw-bold mt-3 px-4 py-2 rounded-pill" data-aos="fade-up">Daftar Sekarang</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/slider03.jpg') }}" class="d-block hero-slider-img" alt="Foto SMP">
                    <div class="carousel-caption text-end">
                        <h1 class="display-4 fw-bold" data-aos="fade-down">SMP IT Nurul Huda Utsmaniyyah</h1>
                        <p class="lead" data-aos="fade-up">Sekolah Islam terpadu untuk generasi unggul.</p>
                        <a href="/psb" class="btn btn-primary fw-bold mt-3 px-4 py-2 rounded-pill" data-aos="fade-up">Daftar Sekarang</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/slider04.jpg') }}" class="d-block hero-slider-img" alt="Foto SMK">
                    <div class="carousel-caption text-end">
                        <h1 class="display-4 fw-bold" data-aos="fade-down">SMK Ma'arif Nurul Huda Utsmaniyyah</h1>
                        <p class="lead" data-aos="fade-up">Membentuk lulusan terampil, berkarakter, dan siap bersaing.</p>
                        <a href="/psb" class="btn btn-success text-white fw-bold mt-3 px-4 py-2 rounded-pill" data-aos="fade-up">Daftar Sekarang</a>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> 
    </div>

    <section class="py-5 bg-white position-relative overflow-hidden">
    
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: radial-gradient(#e5e7eb 1px, transparent 1px); background-size: 24px 24px; opacity: 0.6; z-index: 0;"></div>

    <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center">
            
            <div class="col-lg-5 text-center mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                <div class="position-relative d-inline-block p-3">
                    <div class="position-absolute top-0 start-0 w-100 h-100 border border-2 border-warning rounded-4" style="transform: rotate(-3deg); z-index: 0;"></div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-success opacity-10 rounded-4" style="transform: rotate(3deg); z-index: 0;"></div>
                    
                    <img src="{{ asset('img/pim.jpg') }}" 
                         onerror="this.src='https://via.placeholder.com/400x500?text=Foto+Pimpinan'" 
                         alt="Pimpinan Pesantren" 
                         class="img-fluid rounded-4 shadow-lg position-relative bg-white" 
                         style="max-height: 450px; object-fit: cover; z-index: 1;">
                </div>
            </div>

            <div class="col-lg-7 ps-lg-5" data-aos="fade-left" data-aos-duration="1000">
                <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill fw-bold mb-3 letter-spacing-1">
                    <i class="bi bi-person-badge-fill me-2"></i>Pimpinan Pondok Pesantren
                </span>

                <h2 class="fw-bold display-5 text-dark mb-4">KH. OYO SUNARYO</h2>
                
                <div class="border-start border-4 border-warning ps-4 mb-4">
                    <p class="lead fst-italic text-dark mb-0 fw-medium">"Assalamu’alaikum Warahmatullahi Wabarakatuh."</p>
                </div>
                
                <div class="text-secondary lh-lg text-justify mb-4">
                    <p>
                        Segala puji syukur kehadirat Allah SWT. Pondok Pesantren Nurul Huda Utsmaniyyah didirikan atas keyakinan untuk melahirkan generasi unggul yang <strong>berakhlakul karimah</strong>, <strong>berilmu pengetahuan</strong>, dan <strong>berdaya saing</strong>.
                    </p>
                    <p>
                        Kami sangat berharap website ini dapat menjadi jembatan komunikasi yang efektif antara pesantren, orang tua santri, alumni, dan masyarakat luas. Terima Kasih atas kepercayaan dan dukungan yang telah diberikan.
                    </p>
                    <p class="fw-bold text-dark">
                        Wassalamu’alaikum Warahmatullahi Wabarakatuh
                    </p>
                </div>

                <div class="card border-0 bg-light rounded-3 mb-4 position-relative overflow-hidden">
                    <div class="card-body p-4 position-relative">
                        <i class="bi bi-quote position-absolute top-0 start-0 text-secondary opacity-25 display-1" style="transform: translate(-10px, -20px);"></i>
                        <blockquote class="blockquote mb-0 position-relative z-1 ps-4">
                            <p class="fs-6 fst-italic mb-2 text-dark">"Santri hari ini adalah pemimpin masa depan."</p>
                            <footer class="blockquote-footer mt-1 text-success fw-bold">Pimpinan Pondok</footer>
                        </blockquote>
                    </div>
                </div>

                <a href="/sejarah" class="btn btn-dark rounded-pill px-5 py-3 shadow-sm hover-scale">
                    Baca Profil Lengkap <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<style>
    .letter-spacing-1 { letter-spacing: 1px; }
    .hover-scale { transition: transform 0.3s ease; }
    .hover-scale:hover { transform: translateY(-3px); }
    .text-justify { text-align: justify; }
    
    /* Responsive adjustment */
    @media (max-width: 768px) {
        .text-justify { text-align: left; }
    }
</style>

    <section class="py-5 bg-light">
    <div class="container py-4">
        
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold text-dark">Jelajahi Pesantren</h2>
            <p class="text-muted">Informasi akademik, fasilitas, dan keunggulan kami.</p>
            <div class="mx-auto bg-success rounded" style="height: 4px; width: 60px;"></div>
        </div>

        <div class="row g-4">
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <a href="/kelas" class="text-decoration-none text-dark">
                    <div class="card border-0 shadow-sm h-100 hover-lift text-center py-5 px-3">
                        <div class="card-body">
                            <div class="icon-box bg-success bg-opacity-10 text-success rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 80px; height: 80px;">
                                <i class="bi bi-easel-fill fs-1"></i>
                            </div>
                            <h4 class="fw-bold">Kelas Belajar</h4>
                            <p class="text-muted small mb-0">Informasi pembagian kelas, jenjang pendidikan, dan ruang belajar yang kondusif.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <a href="/guru" class="text-decoration-none text-dark">
                    <div class="card border-0 shadow-sm h-100 hover-lift text-center py-5 px-3">
                        <div class="card-body">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 80px; height: 80px;">
                                <i class="bi bi-people-fill fs-1"></i>
                            </div>
                            <h4 class="fw-bold">Pimpinan & Dewan Pengasuh</h4>
                            <p class="text-muted small mb-0">Profil pimpinan dan dewan pengasuh yang berperan strategis dalam pengelolaan pesantren serta berdedikasi tinggi dalam membimbing dan mendidik santri.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <a href="/unggulan" class="text-decoration-none text-dark">
                    <div class="card border-0 shadow-sm h-100 hover-lift text-center py-5 px-3">
                        <div class="card-body">
                            <div class="icon-box bg-warning bg-opacity-10 text-warning rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 80px; height: 80px;">
                                <i class="bi bi-trophy-fill fs-1"></i>
                            </div>
                            <h4 class="fw-bold">Program Unggulan</h4>
                            <p class="text-muted small mb-0">Program prioritas seperti Tahfidz, Kitab Kuning, dan prestasi santri di kancah nasional.</p>
                        </div>
                    </div>
                </a>
            </div>

        </div> 
    </div>
</section>

<style>
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-lift:hover {
        transform: translateY(-10px); /* Efek naik ke atas */
        box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important; /* Bayangan lebih lembut */
    }
</style>
<section class="py-5 bg-white position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: radial-gradient(#dee2e6 1px, transparent 1px); background-size: 20px 20px; opacity: 0.5; z-index: 0;"></div>

        <div class="container position-relative" style="z-index: 1;">
            
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-uppercase text-dark position-relative d-inline-block pb-2">
                    Galeri Video
                    <span class="position-absolute bottom-0 start-50 translate-middle-x bg-danger rounded" style="height: 4px; width: 60px;"></span>
                </h2>
                <p class="text-muted mt-3">Dokumentasi kegiatan dan kajian di Pondok Pesantren Nurul Huda Utsmaniyyah.</p>
            </div>

            <div class="row g-4 justify-content-center">
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden video-card hover-lift">
                        <div class="ratio ratio-16x9 position-relative video-thumbnail">
                            <iframe src="https://www.youtube.com/embed/koHB1poEXyk?rel=0" title="Video 1" allowfullscreen class="rounded-top-4"></iframe>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-danger bg-opacity-10 text-danger p-2 rounded-circle me-3">
                                    <i class="bi bi-youtube fs-5"></i>
                                </span>
                                <h5 class="card-title fw-bold text-dark mb-0">Undangan Resmi Alumni</h5>
                            </div>
                            <p class="card-text text-muted small">Sambutan Pimpinan Umum untuk acara reuni akbar alumni yang akan datang.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden video-card hover-lift">
                        <div class="ratio ratio-16x9 position-relative video-thumbnail">
                            
                            <iframe src="https://www.youtube.com/embed/zyzbMPshDu8" title="Video 2" allowfullscreen class="rounded-top-4"></iframe>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-warning bg-opacity-10 text-warning p-2 rounded-circle me-3">
                                    <i class="bi bi-calendar-event fs-5"></i>
                                </span>
                                <h5 class="card-title fw-bold text-dark mb-0">Agenda Bulanan PNHU</h5>
                            </div>
                            <p class="card-text text-muted small">Dokumentasi kegiatan Maulidan Bersama seluruh santri dan asatidz.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden video-card hover-lift">
                        <div class="ratio ratio-16x9 position-relative video-thumbnail">
                            
                            <iframe src="https://www.youtube.com/embed/7HaKHzUoL7I" title="Video 3" allowfullscreen class="rounded-top-4"></iframe>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-success bg-opacity-10 text-success p-2 rounded-circle me-3">
                                    <i class="bi bi-stars fs-5"></i>
                                </span>
                                <h5 class="card-title fw-bold text-dark mb-0">Kreasi Santri Putri</h5>
                            </div>
                            <p class="card-text text-muted small">Penampilan pentas seni dalam rangka memeriahkan Lailatul Muwadda'ah.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
                <a href="https://youtube.com/@nhutsmaniyyah" target="_blank" class="btn btn-danger btn-lg rounded-pill px-5 shadow-sm hover-scale">
                    <i class="bi bi-youtube me-2"></i> Tonton Lebih Banyak di YouTube
                </a>
            </div>

        </div>
    </section>

    <style>
        /* Efek Hover Lift */
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important;
        }

        /* Video Thumbnail & Play Icon */
        .video-thumbnail iframe {
            transition: filter 0.3s ease;
        }
        .video-card:hover .video-thumbnail iframe {
            filter: brightness(0.7); /* Gelapkan video saat di-hover */
        }
        
        .play-icon-overlay {
            opacity: 0;
            transition: opacity 0.3s ease, transform 0.3s ease;
            pointer-events: none; /* Klik tembus ke iframe */
        }
        .video-card:hover .play-icon-overlay {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.1);
            z-index: 10;
        }

        /* Hover Scale Tombol */
        .hover-scale {
            transition: transform 0.2s;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
    </style>
@endsection
@extends('layouts.main')

@section('title', 'TK Nurul Huda Utsmaniyyah')

@section('container')
<div class="container py-5">
    
    <div class="row mb-5 text-center">
        <div class="col-md-12">
            <span class="badge bg-warning text-dark px-4 py-2 rounded-pill mb-3 fs-6 shadow-sm">
                <i class="bi bi-stars me-1"></i> Pendidikan Anak Usia Dini
            </span>
            <h1 class="fw-bold display-4" style="color: #FF6B6B;">TK NURUL HUDA UTSMANIYYAH</h1>
            <p class="lead text-muted">Mencetak Generasi <span class="fw-bold text-info">Cerdas</span>, <span class="fw-bold text-warning">Ceria</span>, dan <span class="fw-bold text-success">Berakhlak Mulia</span>.</p>
        </div>
    </div>

    <div class="row g-5">
        
        <div class="col-lg-8">
            
            <div class="card border-0 shadow-lg mb-4 overflow-hidden rounded-4">
                <div id="carouselTk" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"> 
                    <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                            <div class="cursor-pointer position-relative" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <img src="{{ asset('img/slider02.jpg') }}" class="d-block w-100" alt="Halaman TK" style="object-fit: cover; height: 400px;">
                                <div class="overlay-icon-center"><i class="bi bi-zoom-in text-white display-4"></i></div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="cursor-pointer position-relative" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <img src="{{ asset('img/tk.jpg') }}" onerror="this.src='https://via.placeholder.com/800x400?text=FOTO+KEGIATAN+2'" class="d-block w-100" alt="Kelas TK" style="object-fit: cover; height: 400px;">
                                <div class="overlay-icon-center"><i class="bi bi-zoom-in text-white display-4"></i></div>
                            </div>
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTk" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTk" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>

            <div class="mb-5">
                <h3 class="fw-bold mb-3" style="color: #4ECDC4;"><i class="bi bi-emoji-smile-fill me-2 text-warning"></i>Tentang TK Kami</h3>
                <p class="text-secondary" style="font-size: 1.1rem;">
                    Selamat datang di <strong>TK Nurul Huda Utsmaniyyah</strong>. Kami hadir sebagai taman bermain dan belajar yang mengedepankan pendidikan karakter islami dengan metode <em class="text-warning fw-bold">belajar sambil bermain</em>.
                </p>
                <p class="text-secondary">
                    Di sini, putra-putri Anda akan dibimbing dengan penuh kasih sayang untuk mengenal huruf, angka, dan yang terpenting: <strong>Mengenal Allah dan Rasul-Nya</strong> sejak dini dalam suasana yang sangat menyenangkan.
                </p>
            </div>

            <div class="card border-0 shadow-sm p-4 mb-5 rounded-4" style="background-color: #FFF9C4;"> 
                <h4 class="fw-bold mb-3" style="color: #FF8F00;"><i class="bi bi-bullseye me-2"></i>Visi & Misi</h4>
                
                <h6 class="fw-bold text-dark">Visi:</h6>
                <p class="fst-italic text-muted">"Terwujudnya anak didik yang cerdas, ceria, berakhlak mulia, dan cinta Al-Qur'an."</p>
                
                <h6 class="fw-bold text-dark mt-3">Misi:</h6>
                <ul class="text-muted small mb-0 ps-3">
                    <li>Menanamkan nilai-nilai keimanan sejak dini.</li>
                    <li>Mengembangkan potensi kecerdasan anak melalui permainan edukatif.</li>
                    <li>Menciptakan lingkungan yang aman, bersih, dan penuh kasih sayang.</li>
                </ul>
            </div>

            <div class="mb-5">
                <h3 class="fw-bold mb-4" style="color: #FF6B6B;">Fasilitas Penunjang</h3>
                <div class="row g-3">
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush border-0 rounded bg-white shadow-sm h-100">
                            <li class="list-group-item border-0"><i class="bi bi-house-door-fill text-warning me-2 fs-5"></i> Gedung Milik Sendiri</li>
                            <li class="list-group-item border-0"><i class="bi bi-balloon-fill text-danger me-2 fs-5"></i> Area Bermain Luas</li>
                            <li class="list-group-item border-0"><i class="bi bi-book-fill text-success me-2 fs-5"></i> Pojok Baca Cerita</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush border-0 rounded bg-white shadow-sm h-100">
                            <li class="list-group-item border-0"><i class="bi bi-puzzle-fill text-info me-2 fs-5"></i> Mainan Edukatif Lengkap</li>
                            <li class="list-group-item border-0"><i class="bi bi-droplet-fill text-primary me-2 fs-5"></i> Toilet Ramah Anak</li>
                            <li class="list-group-item border-0"><i class="bi bi-shield-lock-fill text-dark me-2 fs-5"></i> Keamanan Terjaga</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <h3 class="fw-bold mb-4" style="color: #AB47BC;">Kelompok Belajar</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm" style="background-color: #E8F5E9;">
                            <div class="card-body">
                                <h5 class="fw-bold text-success"><i class="bi bi-flower1 me-2"></i>Kelompok A (4-5 Tahun)</h5>
                                <p class="small text-muted mb-0">Bermain, bersosialisasi, menyanyi, dan pengenalan doa-doa harian sederhana.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm" style="background-color: #E3F2FD;">
                            <div class="card-body">
                                <h5 class="fw-bold text-primary"><i class="bi bi-rocket-takeoff-fill me-2"></i>Kelompok B (5-6 Tahun)</h5>
                                <p class="small text-muted mb-0">Persiapan masuk SD, belajar membaca dasar, menulis huruf, dan berhitung ceria.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h3 class="fw-bold text-dark mb-4">Daftar Guru</h3>
                <div class="row g-4 text-center">
                    <div class="col-md-4 col-6">
                        <img src="https://via.placeholder.com/150" 
                             class="rounded-circle mb-3 shadow border border-3 border-warning cursor-pointer hover-scale" 
                             alt="Guru 1" 
                             style="width: 100px; height: 100px; object-fit: cover;"
                             data-bs-toggle="modal" 
                             data-bs-target="#modalFoto" 
                             onclick="showImage(this)">
                        <h6 class="fw-bold mb-0">Ibu A</h6>
                        <small class="text-muted">Kepala TK</small>
                    </div>
                    <div class="col-md-4 col-6">
                        <img src="https://via.placeholder.com/150" 
                             class="rounded-circle mb-3 shadow border border-3 border-danger cursor-pointer hover-scale" 
                             alt="Guru 2" 
                             style="width: 100px; height: 100px; object-fit: cover;"
                             data-bs-toggle="modal" 
                             data-bs-target="#modalFoto" 
                             onclick="showImage(this)">
                        <h6 class="fw-bold mb-0">Ibu B</h6>
                        <small class="text-muted">Wali Kelas A</small>
                    </div>
                    <div class="col-md-4 col-6">
                        <img src="https://via.placeholder.com/150" 
                             class="rounded-circle mb-3 shadow border border-3 border-info cursor-pointer hover-scale" 
                             alt="Guru 3" 
                             style="width: 100px; height: 100px; object-fit: cover;"
                             data-bs-toggle="modal" 
                             data-bs-target="#modalFoto" 
                             onclick="showImage(this)">
                        <h6 class="fw-bold mb-0">Ibu C</h6>
                        <small class="text-muted">Wali Kelas B</small>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            
            <div class="card border-0 shadow mb-4 rounded-4 overflow-hidden">
                <div class="card-header fw-bold text-center py-3 border-0" style="background-color: #FFCA28; color: #333;">
                    <i class="bi bi-pencil-fill me-2"></i>PENDAFTARAN TK
                </div>
                <div class="card-body p-4" style="background-color: #FFF8E1;">
                    <p class="small text-muted text-center mb-4">Ayo daftarkan putra-putri Ayah/Bunda sekarang juga!</p>
                    
                    <ul class="list-unstyled small mb-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Usia 4-6 Tahun</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Sehat & Ceria</li>
                    </ul>

                    <div class="d-grid gap-2">
                        <a href="https://wa.me/6281370251606" class="btn fw-bold text-white shadow-sm" style="background-color: #25D366;">
                            <i class="bi bi-whatsapp me-2"></i> Chat Bu Guru
                        </a>
                        <a href="/psb" class="btn btn-outline-dark fw-bold rounded-pill">
                            Lihat Syarat Lain
                        </a>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4 rounded-4">
                <div class="card-header text-white fw-bold py-3 border-0" style="background-color: #29B6F6;">
                    <i class="bi bi-alarm-fill me-2"></i> Jam Bermain & Belajar
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Senin - Kamis
                        <span class="badge bg-info text-white rounded-pill">07.30 - 11.00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Jumat
                        <span class="badge bg-success text-white rounded-pill">07.30 - 10.30</span>
                    </li>
                </ul>
            </div>

            <div class="card border-0 shadow-sm rounded-4">
                 <div class="card-header text-white fw-bold py-3 border-0" style="background-color: #EF5350;">
                    <i class="bi bi-star-fill me-2"></i> Kegiatan Seru
                </div>
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item"><i class="bi bi-music-note-beamed text-warning me-2"></i>Menyanyi & Menari</li>
                    <li class="list-group-item"><i class="bi bi-book-half text-info me-2"></i>Mendengar Dongeng</li>
                    <li class="list-group-item"><i class="bi bi-egg-fried text-warning me-2"></i>Cooking Class (Memasak)</li>
                    <li class="list-group-item"><i class="bi bi-tree-fill text-success me-2"></i>Berkebun & Outbound</li>
                </ul>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="modalFotoLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-0 p-0">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 text-center position-relative">
                <img id="imgPreview" src="" class="img-fluid rounded shadow-lg" alt="Preview Foto" style="max-height: 85vh;">
                <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-75 text-white p-3">
                    <h5 class="modal-title m-0" id="modalFotoLabel"></h5>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .cursor-pointer { cursor: pointer; }
    
    .hover-scale { transition: transform 0.3s ease; }
    .hover-scale:hover { transform: scale(1.1); }

    .overlay-icon-center {
        position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
        opacity: 0; transition: opacity 0.3s ease; z-index: 2; pointer-events: none;
    }
    .cursor-pointer:hover .overlay-icon-center { opacity: 1; }
</style>

<script>
    function showImage(element) {
        var imgSrc = element.querySelector ? element.querySelector('img').src : element.src; // Handle jika yg diklik img langsung
        var imgAlt = element.querySelector ? element.querySelector('img').alt : element.alt;

        document.getElementById('imgPreview').src = imgSrc;
        document.getElementById('modalFotoLabel').innerText = imgAlt;
    }
</script>
@endsection
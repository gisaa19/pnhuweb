@extends('layouts.main')

@section('title', "SMK Ma'arif Nurul Huda Utsmaniyyah")

@section('container')
<div class="container py-5">
    
    <div class="row mb-5 text-center">
        <div class="col-md-12">
            <span class="badge px-3 py-2 rounded-pill mb-2 fs-6 shadow-sm" style="background-color: #0D47A1; color: white;">
                Sekolah Menengah Kejuruan Berbasis Pesantren
            </span>
            <h1 class="fw-bold text-dark display-5">SMK MA'ARIF NURUL HUDA UTSMANIYYAH</h1>
            <p class="lead text-muted">"Mencetak Santri Kompeten, <span class="fw-bold" style="color: #FF6F00;">Siap Kerja</span>, Cerdas Teknologi, dan Berakhlak Mulia."</p>
        </div>
    </div>

    <div class="row g-5">
        
        <div class="col-lg-8">
            
            <div class="card border-0 shadow-lg mb-4 overflow-hidden rounded-3">
                <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showSingleImage(this)">
                    <img src="{{ asset('img/smk.jpg') }}" onerror="this.src='https://via.placeholder.com/800x400?text=GEDUNG+SMK+MAARIF'" class="img-fluid w-100 zoom-effect" alt="Gedung SMK" style="object-fit: cover; height: 400px;">
                    <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                </div>
            </div>

            <div class="mb-5">
                <h3 class="fw-bold mb-3" style="color: #0D47A1;">Tentang SMK Kami</h3>
                <p class="text-secondary" style="text-align: justify; font-size: 1.05rem;">
                    <strong>SMK Ma'arif Nurul Huda Utsmaniyyah</strong> hadir sebagai jawaban atas kebutuhan dunia industri akan tenaga kerja yang terampil namun tetap memegang teguh nilai-nilai agama. Dengan memadukan kurikulum kejuruan (vokasi) dan kurikulum pesantren, kami melahirkan lulusan yang memiliki <em class="text-dark fw-bold">Hard Skill</em> mumpuni dan <em class="text-dark fw-bold">Soft Skill</em> (karakter) yang kuat.
                </p>
                <div class="alert border-0 shadow-sm d-flex align-items-center" style="background-color: #FFF3E0; color: #E65100;">
                    <i class="bi bi-lightbulb-fill fs-4 me-3"></i>
                    <div>
                        Santri SMK tidak hanya diajarkan mengaji kitab kuning, tetapi juga dibekali keterampilan teknologi, manajemen, dan kewirausahaan (Entrepreneurship) agar siap bersaing di era global.
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <h3 class="fw-bold mb-4" style="color: #0D47A1;">Kompetensi Keahlian (Jurusan)</h3>
                <div class="row g-3">
                    
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm hover-card bg-light">
                            <div class="card-body border-top border-5" style="border-color: #0D47A1 !important;">
                                <div class="mb-3 d-flex flex-column align-items-center text-center">
                                    <div class="d-flex align-items-center justify-content-center rounded-circle text-white mb-3 shadow-sm" style="background-color: #0D47A1; width: 70px; height: 70px;">
                                        <i class="bi bi-cpu-fill fs-3"></i>
                                    </div>
                                    <h5 class="fw-bold text-dark">Multimedia</h5>
                                </div>
                                <p class="small text-muted text-center mb-0">Desain grafis, fotografi, videografi, animasi 2D/3D, dan editing video.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm hover-card bg-light">
                            <div class="card-body border-top border-5" style="border-color: #FF6F00 !important;">
                                <div class="mb-3 d-flex flex-column align-items-center text-center">
                                    <div class="d-flex align-items-center justify-content-center rounded-circle text-white mb-3 shadow-sm" style="background-color: #FF6F00; width: 70px; height: 70px;">
                                        <i class="bi bi-palette-fill fs-3"></i>
                                    </div>
                                    <h5 class="fw-bold text-dark">DKV</h5>
                                </div>
                                <p class="small text-muted text-center mb-0">Komunikasi visual, branding, ilustrasi, dan desain kemasan produk.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm hover-card bg-light">
                            <div class="card-body border-top border-5" style="border-color: #D81B60 !important;">
                                <div class="mb-3 d-flex flex-column align-items-center text-center">
                                    <div class="d-flex align-items-center justify-content-center rounded-circle text-white mb-3 shadow-sm" style="background-color: #D81B60; width: 70px; height: 70px;">
                                        <i class="bi bi-scissors fs-3"></i>
                                    </div>
                                    <h5 class="fw-bold text-dark">Tata Busana</h5>
                                </div>
                                <p class="small text-muted text-center mb-0">Pola busana, teknik menjahit, desain fashion muslim, dan butik.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card border-0 shadow-sm p-4 mb-5" style="background-color: #F5F5F5;">
                <h4 class="fw-bold mb-3" style="color: #0D47A1;"><i class="bi bi-trophy-fill me-2 text-warning"></i>Program Unggulan</h4>
                <div class="row g-3">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color: #0D47A1;"></i><strong>Teaching Factory (TEFA):</strong> Pembelajaran berbasis produksi standar industri.</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color: #0D47A1;"></i><strong>Sertifikasi Kompetensi:</strong> Lulusan dibekali sertifikat keahlian (LSP).</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                         <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color: #FF6F00;"></i><strong>PKL Terpadu:</strong> Kerjasama dengan Dunia Usaha & Industri (DU/DI) ternama.</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color: #FF6F00;"></i><strong>BKK (Bursa Kerja Khusus):</strong> Penyaluran kerja bagi alumni.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <h4 class="fw-bold text-dark border-bottom border-secondary pb-2 mb-3">Visi & Misi</h4>
                <p class="fst-italic text-secondary"><strong>Visi:</strong> "Menjadi SMK Unggulan yang menghasilkan tamatan beriman, bertakwa, profesional, dan mandiri."</p>
                
                <p class="fw-bold mb-1 text-dark">Misi:</p>
                <ol class="text-secondary small ps-3">
                    <li>Melaksanakan pembelajaran berbasis kompetensi dan produksi.</li>
                    <li>Menanamkan nilai-nilai kedisiplinan dan etos kerja islami.</li>
                    <li>Membangun kemitraan strategis dengan Dunia Usaha dan Dunia Industri.</li>
                    <li>Mendorong jiwa wirausaha (Entrepreneurship) santri.</li>
                </ol>
            </div>

            <div class="mb-5">
                <h3 class="fw-bold mb-4" style="color: #0D47A1;">Pengembangan Diri (Ekstrakurikuler)</h3>
                <div class="row g-3">
                    
                    <div class="col-md-6">
                        <div class="border-0 rounded p-3 d-flex align-items-center h-100 shadow-sm" style="background-color: #E3F2FD;">
                            <div class="me-3 text-primary"><i class="bi bi-camera-reels-fill fs-2"></i></div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Teknik Pengolahan Audio Video</h6>
                                <p class="small text-muted mb-0">Editing, Produksi Konten Kreatif.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="border-0 rounded p-3 d-flex align-items-center h-100 shadow-sm" style="background-color: #FFF3E0;">
                            <div class="me-3 text-warning"><i class="bi bi-fire fs-2"></i></div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Pramuka</h6>
                                <p class="small text-muted mb-0">Kepanduan, Kemandirian & Leadership.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="border-0 rounded p-3 d-flex align-items-center h-100 shadow-sm" style="background-color: #FFEBEE;">
                            <div class="me-3 text-danger"><i class="bi bi-flag-fill fs-2"></i></div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Paskibra</h6>
                                <p class="small text-muted mb-0">Baris-berbaris & Kedisiplinan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="border-0 rounded p-3 d-flex align-items-center h-100 shadow-sm" style="background-color: #F3E5F5;">
                            <div class="me-3" style="color: #8E24AA;"><i class="bi bi-bezier2 fs-2"></i></div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Menjahit</h6>
                                <p class="small text-muted mb-0">Keterampilan Dasar Tata Busana.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="position-sticky" style="top: 100px;">
                
                <div class="card border-0 shadow mb-4">
                    <div class="card-header fw-bold text-white text-center py-3" style="background-color: #FF6F00;">
                        <i class="bi bi-pencil-square me-2"></i>PENDAFTARAN SMK
                    </div>
                    <div class="card-body p-4 bg-white">
                        <p class="small text-muted text-center mb-4">Siapkan masa depanmu dengan keterampilan dan akhlak mulia bersama kami.</p>
                        
                        <div class="d-grid gap-2">
                            <a href="/psb" class="btn fw-bold py-2 shadow-sm text-white" style="background-color: #0D47A1;">
                                <i class="bi bi-file-earmark-text me-2"></i> DAFTAR ONLINE
                            </a>
                            <a href="https://wa.me/6281370251606" class="btn btn-outline-dark fw-bold py-2">
                                <i class="bi bi-whatsapp me-2"></i> Chat Panitia SMK
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-4 text-white" style="background-color: #0D47A1;">
                      <div class="card-body">
                        <h6 class="fw-bold border-bottom border-white pb-2 mb-3"><i class="bi bi-stars me-2 text-warning"></i>Prospek Lulusan (BMW)</h6>
                        <ul class="list-unstyled mb-0 small">
                            <li class="mb-2 d-flex align-items-center"><i class="bi bi-briefcase-fill me-2 fs-5 text-warning"></i> <strong>Bekerja:</strong> Di perusahaan nasional/lokal.</li>
                            <li class="mb-2 d-flex align-items-center"><i class="bi bi-mortarboard-fill me-2 fs-5 text-warning"></i> <strong>Melanjutkan:</strong> Kuliah di PTN/PTS.</li>
                            <li class="d-flex align-items-center"><i class="bi bi-shop-window me-2 fs-5 text-warning"></i> <strong>Wirausaha:</strong> Membuka bisnis sendiri.</li>
                        </ul>
                      </div>
                </div>

                <div class="card border-0 shadow-sm">
                    <div class="card-header text-white fw-bold py-3" style="background-color: #37474F;">
                        <i class="bi bi-building me-2"></i> Fasilitas Praktik
                    </div>
                    <div class="card-body p-2 bg-light">
                        <p class="small text-muted mb-2 text-center">Klik foto untuk memperbesar:</p>
                        <div class="row g-2">
                            
                            <div class="col-6">
                                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showSingleImage(this)">
                                        <img src="{{ asset('img/labsmk.jpg') }}" onerror="this.src='https://via.placeholder.com/400x300?text=Lab+Komputer'" class="card-img-top zoom-effect" alt="Lab Komputer" style="height: 100px; object-fit: cover;">
                                    </div>
                                    <div class="card-body p-2 text-center bg-white">
                                        <small class="fw-bold d-block text-dark"><i class="bi bi-cpu me-1 text-primary"></i> Lab Komputer</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                                    <div id="carouselKelasMini" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalKelas">
                                                    <img src="{{ asset('img/10smk.jpg') }}" onerror="this.src='https://via.placeholder.com/400x300?text=Kelas+10'" class="d-block w-100 zoom-effect" alt="Ruang Kelas" style="height: 100px; object-fit: cover;">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalKelas">
                                                    <img src="{{ asset('img/11smk.jpg') }}" onerror="this.src='https://via.placeholder.com/400x300?text=Kelas+11'" class="d-block w-100 zoom-effect" alt="Ruang Kelas" style="height: 100px; object-fit: cover;">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalKelas">
                                                    <img src="{{ asset('img/12smk.jpg') }}" onerror="this.src='https://via.placeholder.com/400x300?text=Kelas+12'" class="d-block w-100 zoom-effect" alt="Ruang Kelas" style="height: 100px; object-fit: cover;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-2 text-center bg-white">
                                        <small class="fw-bold d-block text-dark"><i class="bi bi-easel me-1 text-primary"></i> R. Kelas (10-12)</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showSingleImage(this)">
                                        <img src="{{ asset('img/lapvoli.jpg') }}" onerror="this.src='https://via.placeholder.com/400x300?text=Lapangan+Voli'" class="card-img-top zoom-effect" alt="Lapangan Voli" style="height: 100px; object-fit: cover;">
                                    </div>
                                    <div class="card-body p-2 text-center bg-white">
                                        <small class="fw-bold d-block text-dark"><i class="bi bi-dribbble me-1 text-primary"></i> Lap. Voli</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showSingleImage(this)">
                                        <img src="{{ asset('img/lapbad.jpg') }}" onerror="this.src='https://via.placeholder.com/400x300?text=Badminton'" class="card-img-top zoom-effect" alt="Lapangan Badminton" style="height: 100px; object-fit: cover;">
                                    </div>
                                    <div class="card-body p-2 text-center bg-white">
                                        <small class="fw-bold d-block text-dark"><i class="bi bi-circle me-1 text-primary"></i> Badminton</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

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

<div class="modal fade" id="modalKelas" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-0 p-0">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div id="carouselModalKelas" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded shadow-lg">
                        
                        <div class="carousel-item active">
                            <img src="{{ asset('img/10smk.jpg') }}" onerror="this.src='https://via.placeholder.com/800x600?text=Kelas+10'" class="d-block w-100" alt="Kelas 10" style="max-height: 85vh; object-fit: contain;">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                                <h5>Ruang Kelas 10</h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('img/11smk.jpg') }}" onerror="this.src='https://via.placeholder.com/800x600?text=Kelas+11'" class="d-block w-100" alt="Kelas 11" style="max-height: 85vh; object-fit: contain;">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                                <h5>Ruang Kelas 11</h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('img/12smk.jpg') }}" onerror="this.src='https://via.placeholder.com/800x600?text=Kelas+12'" class="d-block w-100" alt="Kelas 12" style="max-height: 85vh; object-fit: contain;">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                                <h5>Ruang Kelas 12</h5>
                            </div>
                        </div>

                    </div>
                    
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselModalKelas" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselModalKelas" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .hover-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
    
    .cursor-pointer { cursor: pointer; }
    .hover-zoom-container { overflow: hidden; }
    
    .zoom-effect { transition: transform 0.5s ease; }
    .hover-zoom-container:hover .zoom-effect { transform: scale(1.1); filter: brightness(0.9); }

    .overlay-icon {
        position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
        opacity: 0; transition: opacity 0.3s ease; z-index: 2; pointer-events: none;
    }
    .hover-zoom-container:hover .overlay-icon { opacity: 1; }
</style>

<script>
    function showSingleImage(element) {
        var imgSrc = element.querySelector('img').src;
        var imgAlt = element.querySelector('img').alt;

        document.getElementById('imgPreview').src = imgSrc;
        document.getElementById('modalFotoLabel').innerText = imgAlt;
    }
</script>
@endsection
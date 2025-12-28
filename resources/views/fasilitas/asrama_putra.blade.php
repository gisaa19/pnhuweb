@extends('layouts.main')
@section('title', 'Detail Asrama Putra')

@section('container')
    <div class="container py-5">
        <a href="/fasilitas" class="btn btn-outline-dark mb-4 rounded-pill"><i class="bi bi-arrow-left me-2"></i>Kembali ke Fasilitas</a>
        
        <div class="text-center mb-5">
            <h2 class="fw-bold text-uppercase display-6">ASRAMA PUTRA</h2>
            <p class="text-muted lead">Hunian nyaman dan kondusif yang terbagi dalam 4 gedung utama.</p>
        </div>

        <div class="mb-5">
            <div class="border-start border-5 border-info ps-3 mb-4">
                <h3 class="fw-bold text-info"><i class="bi bi-building me-2"></i>Gedung An-Nawawi</h3>
                <p class="text-muted small">Gedung khusus santri baru dan tahfidz.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card shadow-sm h-100 border-0 hover-card">
                        <div class="position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                            <img src="https://via.placeholder.com/600x300?text=KAMAR+AN-NAWAWI+01" class="card-img-top zoom-effect" alt="Kamar 01 - An-Nawawi" style="height: 220px; object-fit: cover;">
                            <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                            <span class="badge bg-info position-absolute top-0 end-0 m-3 shadow">Lantai 1</span>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Kamar 01</h5>
                            <p class="small text-muted mb-2"><i class="bi bi-people-fill me-1 text-info"></i> Kapasitas: 10 Santri</p>
                            <p class="card-text small text-secondary">Kamar luas, berada di lantai 2 gedung sebelah kanan masjid jami'.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm h-100 border-0 hover-card">
                        <div class="position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                            <img src="{{ asset('img/nawawi2.jpg') }}" onerror="this.src='https://via.placeholder.com/600x300?text=KAMAR+AN-NAWAWI+02'" class="card-img-top zoom-effect" alt="Kamar 02 - An-Nawawi" style="height: 220px; object-fit: cover;">
                            <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                            <span class="badge bg-info position-absolute top-0 end-0 m-3 shadow">Lantai 1</span>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Kamar 02</h5>
                            <p class="small text-muted mb-2"><i class="bi bi-people-fill me-1 text-info"></i> Kapasitas: 10 Santri</p>
                            <p class="card-text small text-secondary">Berada di sebelah kamar 01.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <div class="mb-5">
            <div class="border-start border-5 border-primary ps-3 mb-4">
                <h3 class="fw-bold text-primary"><i class="bi bi-journal-bookmark-fill me-2"></i>Gedung Ibnu Hajar</h3>
                <p class="text-muted small">Berada di sebelah kiri masjid jami'</p>
            </div>

            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="card shadow-sm h-100 border-0 hover-card" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <div class="card-header bg-primary text-white text-center fw-bold small">Kamar 05</div>
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('img/kobong5.jpg') }}" onerror="this.src='https://via.placeholder.com/400x300?text=Kamar+05'" class="card-img-top zoom-effect" alt="Kamar 05 - Ibnu Hajar" style="height: 140px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center p-2">
                            <small class="text-muted fw-bold">10 Santri</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card shadow-sm h-100 border-0 hover-card" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <div class="card-header bg-primary text-white text-center fw-bold small">Kamar 06</div>
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('img/kobong6.jpg') }}" onerror="this.src='https://via.placeholder.com/400x300?text=Kamar+06'" class="card-img-top zoom-effect" alt="Kamar 06 - Ibnu Hajar" style="height: 140px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center p-2">
                            <small class="text-muted fw-bold">8 Santri</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card shadow-sm h-100 border-0 hover-card" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <div class="card-header bg-primary text-white text-center fw-bold small">Kamar 07</div>
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('img/kobong7.jpg') }}" onerror="this.src='https://via.placeholder.com/400x300?text=Kamar+07'" class="card-img-top zoom-effect" alt="Kamar 07 - Ibnu Hajar" style="height: 140px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center p-2">
                            <small class="text-muted fw-bold">8 Santri</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card shadow-sm h-100 border-0 hover-card" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <div class="card-header bg-primary text-white text-center fw-bold small">Kamar 08</div>
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('img/ibnu8.jpg') }}" onerror="this.src='https://via.placeholder.com/400x300?text=Kamar+08'" class="card-img-top zoom-effect" alt="Kamar 08 - Ibnu Hajar" style="height: 140px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center p-2">
                            <small class="text-muted fw-bold">8 Santri</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <div class="mb-5">
            <div class="border-start border-5 border-success ps-3 mb-4">
                <h3 class="fw-bold text-success"><i class="bi bi-flag-fill me-2"></i>Gedung Nahdlatul Ulama</h3>
                <p class="text-muted small">Asrama santri senior (Ulya) dan pengurus.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card shadow-sm h-100 border-0 hover-card" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <div class="row g-0 h-100 align-items-center">
                            <div class="col-4 h-100 position-relative overflow-hidden">
                                <img src="https://via.placeholder.com/300x400?text=NU+01" class="img-fluid rounded-start h-100 zoom-effect" alt="Kamar NU 01" style="object-fit: cover; min-height: 120px;">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="fw-bold text-success">Kamar NU 09</h5>
                                    <p class="small text-muted mb-0">Lantai 2 Sebelah Kanan • Kapasitas 20 orang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow-sm h-100 border-0 hover-card" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <div class="row g-0 h-100 align-items-center">
                            <div class="col-4 h-100 position-relative overflow-hidden">
                                <img src="https://via.placeholder.com/300x400?text=NU+02" class="img-fluid rounded-start h-100 zoom-effect" alt="Kamar NU 02" style="object-fit: cover; min-height: 120px;">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="fw-bold text-success">Kamar NU 10</h5>
                                    <p class="small text-muted mb-0">Lantai 2 Sebelah Kiri • kapasitas 7 orang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow-sm h-100 border-0 hover-card" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <div class="row g-0 h-100 align-items-center">
                            <div class="col-4 h-100 position-relative overflow-hidden">
                                <img src="https://via.placeholder.com/300x400?text=NU+03" class="img-fluid rounded-start h-100 zoom-effect" alt="Kamar NU 03" style="object-fit: cover; min-height: 120px;">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="fw-bold text-success">Kamar NU 11</h5>
                                    <p class="small text-muted mb-0">Lantai 3 Sebelah kanan • Kapasitas 7 orang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-6">
                    <div class="card shadow-sm h-100 border-0 hover-card" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <div class="row g-0 h-100 align-items-center">
                            <div class="col-4 h-100 position-relative overflow-hidden">
                                <img src="https://via.placeholder.com/300x400?text=NU+04" class="img-fluid rounded-start h-100 zoom-effect" alt="Kamar NU 04" style="object-fit: cover; min-height: 120px;">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="fw-bold text-success">Kamar NU 12</h5>
                                    <p class="small text-muted mb-0">Lantai 3 Sebelah kiri • Kapasitas 7 orang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <div class="mb-5">
            <div class="border-start border-5 border-warning ps-3 mb-4">
                <h3 class="fw-bold text-dark"><i class="bi bi-star-fill text-warning me-2"></i>Gedung VIP</h3>
                <p class="text-muted small">Fasilitas eksklusif dengan kenyamanan ekstra.</p>
            </div>
            
            <div class="alert alert-warning border-0 shadow-sm d-flex align-items-center mb-4">
                <i class="bi bi-info-circle-fill fs-4 me-3"></i>
                <div>
                    Fasilitas Kamar: <strong class="mx-1">Springbed</strong> • <strong class="mx-1">Kamar Mandi Dalam</strong> • <strong class="mx-1">Lemari Pribadi</strong>
                </div>
            </div>

            <div class="row g-4 text-center">
                <div class="col-md-3 col-6">
                    <div class="card h-100 border-warning shadow-sm hover-card" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <div class="card-header bg-warning text-dark fw-bold small">VIP 01 (AC)</div>
                        <div class="position-relative overflow-hidden">
                            <img src= {{ asset ('img/vip1.jpg') }} class="card-img-top zoom-effect" alt="VIP 01" style="height: 150px; object-fit: cover;">
                        </div>
                        <div class="card-body p-2 d-flex align-items-center justify-content-center">
                            <span class="badge bg-secondary"><i class="bi bi-wind me-1"></i>Kipas Angin</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card h-100 border-warning shadow-sm hover-card" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <div class="card-header bg-warning text-dark fw-bold small">VIP 02 (AC)</div>
                        <div class="position-relative overflow-hidden">
                            <img src={{ asset ('img/vip2.jpg') }} class="card-img-top zoom-effect" alt="VIP 02" style="height: 150px; object-fit: cover;">
                        </div>
                        <div class="card-body p-2 d-flex align-items-center justify-content-center">
                            <span class="badge bg-secondary"><i class="bi bi-wind me-1"></i>Kipas Angin</span>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3 col-6">
                    <div class="card h-100 border-warning shadow-sm hover-card" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <div class="card-header bg-warning text-dark fw-bold small">VIP 03</div>
                        <div class="position-relative overflow-hidden">
                            <img src="https://via.placeholder.com/400x300?text=VIP+03" class="card-img-top zoom-effect" alt="VIP 03" style="height: 150px; object-fit: cover;">
                        </div>
                        <div class="card-body p-2 d-flex align-items-center justify-content-center">
                            <span class="badge bg-secondary"><i class="bi bi-wind me-1"></i>Kipas Angin</span>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3 col-6">
                    <div class="card h-100 border-warning shadow-sm hover-card" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <div class="card-header bg-warning text-dark fw-bold small">VIP 04</div>
                        <div class="position-relative overflow-hidden">
                            <img src={{ asset ('img/vip4.jpg') }} class="card-img-top zoom-effect" alt="VIP 04" style="height: 150px; object-fit: cover;">
                        </div>
                        <div class="card-body p-2 d-flex align-items-center justify-content-center">
                            <span class="badge bg-secondary"><i class="bi bi-wind me-1"></i>Kipas Angin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="modalFotoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-header border-0 p-0">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 text-center position-relative">
                    <img id="imgPreview" src="" class="img-fluid rounded shadow-lg" alt="Preview Foto">
                    <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-75 text-white p-3">
                        <h5 class="modal-title m-0" id="modalFotoLabel"></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .hover-card { 
            transition: transform 0.3s, box-shadow 0.3s; 
            cursor: pointer;
        }
        .hover-card:hover { 
            transform: translateY(-5px); 
            box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
        }
        
        .zoom-effect {
            transition: transform 0.5s ease;
        }
        .hover-card:hover .zoom-effect {
            transform: scale(1.1); /* Efek zoom saat hover */
        }

        .cursor-pointer { cursor: pointer; }

        .overlay-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 2;
            pointer-events: none;
        }
        .hover-card:hover .overlay-icon {
            opacity: 1; /* Munculkan ikon kaca pembesar saat hover */
        }
    </style>

    <script>
        function showImage(element) {
            // Ambil URL gambar dari tag <img> di dalam elemen yang diklik
            var imgSrc = element.querySelector('img').src;
            // Ambil teks alt sebagai judul (caption)
            var imgAlt = element.querySelector('img').alt;

            // Set ke dalam modal
            document.getElementById('imgPreview').src = imgSrc;
            document.getElementById('modalFotoLabel').innerText = imgAlt;
        }
    </script>
@endsection
@extends('layouts.main')

@section('title', 'Fasilitas Pesantren')

@section('container')
    <div class="container-fluid py-5 mb-5 text-white" style="background: linear-gradient(135deg, #0f5132 0%, #198754 100%);">
        <div class="container">
            <h2 class="fw-bold mb-1 text-uppercase display-6">FASILITAS PESANTREN</h2>
            <p class="mb-0 opacity-75">Sarana dan prasarana penunjang kenyamanan dan keberhasilan santri.</p>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src={{ asset ('img/masjid1.jpg') }} class="card-img-top zoom-effect" alt="Masjid Jami' Pesantren" style="height: 220px; object-fit: cover;">
                        <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                    </div>
                    
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success bg-opacity-10 p-2 rounded me-3">
                                <i class="fa-solid fa-mosque text-success fs-4"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-0 text-dark">Masjid Jami'</h5>
                        </div>
                        <p class="card-text text-secondary small">Pusat kegiatan ibadah berjamaah, pengajian kitab kuning, dan kegiatan keagamaan santri sehari-hari.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src={{ asset('img/mad.jpg') }} class="card-img-top zoom-effect" alt="Gedung Madrasah" style="height: 220px; object-fit: cover;">
                        <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                    </div>

                    <a href="/fasilitas/madrasah" class="text-decoration-none text-dark d-block h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                                    <i class="bi bi-easel-fill text-primary fs-4"></i>
                                </div>
                                <h5 class="card-title fw-bold mb-0 text-dark">Gedung Madrasah</h5>
                            </div>
                            <p class="card-text text-secondary small mb-auto">Gedung madrasah yang dirancang sebagai tempat belajar yang tenang, dan nyaman. Menjadi ruang tumbuhnya ilmu pengetahuan, nilai - nilai ke islaman, dan pengembangan karakter.</p>
                            <div class="mt-3 text-end">
                                <span class="badge bg-light text-primary border border-primary btn-hover-effect px-3 py-2">Lihat Detail <i class="bi bi-arrow-right ms-1"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src="{{ asset ('img/NU.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=ASRAMA+PUTRA'" class="card-img-top zoom-effect" alt="Asrama Putra" style="height: 220px; object-fit: cover;">
                        <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                    </div>

                    <a href="/fasilitas/asrama-putra" class="text-decoration-none text-dark d-block h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-info bg-opacity-10 p-2 rounded me-3">
                                    <i class="bi bi-house-door-fill text-info fs-4"></i>
                                </div>
                                <h5 class="card-title fw-bold mb-0 text-dark">Asrama Putra</h5>
                            </div>
                            <p class="card-text text-secondary small mb-auto">Gedung asrama khusus santri putra yang terdiri dari beberapa kamar tidur yang nyaman.</p>
                            <div class="mt-3 text-end">
                                <span class="badge bg-light text-info border border-info btn-hover-effect px-3 py-2">Lihat Kamar <i class="bi bi-arrow-right ms-1"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src="{{ asset ('img/robiah.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=ASRAMA+PUTRI'" class="card-img-top zoom-effect" alt="Asrama Putri" style="height: 220px; object-fit: cover;">
                        <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                    </div>

                    <a href="/fasilitas/asrama-putri" class="text-decoration-none text-dark d-block h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-danger bg-opacity-10 p-2 rounded me-3">
                                    <i class="bi bi-house-heart-fill text-danger fs-4"></i>
                                </div>
                                <h5 class="card-title fw-bold mb-0 text-dark">Asrama Putri</h5>
                            </div>
                            <p class="card-text text-secondary small mb-auto">Komplek asrama khusus santri putri yang terpisah dengan keamanan dan privasi terjaga.</p>
                            <div class="mt-3 text-end">
                                <span class="badge bg-light text-danger border border-danger btn-hover-effect px-3 py-2">Lihat Kamar <i class="bi bi-arrow-right ms-1"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src="{{ asset ('img/lapvoli.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=LAPANGAN'" class="card-img-top zoom-effect" alt="Lapangan Olahraga" style="height: 220px; object-fit: cover;">
                        <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                    </div>

                    <div class="card-body d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-warning bg-opacity-10 p-2 rounded me-3">
                                <i class="bi bi-dribbble text-warning fs-4"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-0 text-dark">Sarana Olahraga</h5>
                        </div>
                        <p class="card-text text-secondary small mb-4 mb-auto">Lapangan Voli, Badminton, dan Tenis Meja untuk menjaga kebugaran jasmani santri.</p>
                        
                        <div class="d-flex gap-2 mt-3">
                            <a href="/fasilitas/voli" class="btn btn-sm btn-outline-warning flex-fill fw-bold btn-hover-effect">Voli</a>
                            <a href="/fasilitas/badminton" class="btn btn-sm btn-outline-warning flex-fill fw-bold btn-hover-effect">Badminton</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src="https://via.placeholder.com/600x400?text=KANTIN+PESANTREN" class="card-img-top zoom-effect" alt="Kantin Pesantren" style="height: 220px; object-fit: cover;">
                        <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                    </div>

                    <a href="/fasilitas/kantin" class="text-decoration-none text-dark d-block h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-success bg-opacity-25 p-2 rounded me-3">
                                    <i class="bi bi-basket2-fill text-success fs-4"></i>
                                </div>
                                <h5 class="card-title fw-bold mb-0 text-dark">Kantin & Koperasi</h5>
                            </div>
                            <p class="card-text text-secondary small mb-auto">Menyediakan makanan sehat, sarapan, jajanan, dan kebutuhan harian santri.</p>
                            <div class="mt-3 text-end">
                                <span class="badge bg-light text-success border border-success btn-hover-effect px-3 py-2">Lihat Menu <i class="bi bi-arrow-right ms-1"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src="{{ asset ('img/wcput.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=MCK+BERSIH'" class="card-img-top zoom-effect" alt="Fasilitas MCK" style="height: 220px; object-fit: cover;">
                        <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                    </div>

                    <a href="/fasilitas/mck" class="text-decoration-none text-dark d-block h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-info bg-opacity-25 p-2 rounded me-3">
                                    <i class="fa-solid fa-faucet-drip text-dark fs-4"></i>
                                </div>
                                <h5 class="card-title fw-bold mb-0 text-dark">Toilet & Sanitasi</h5>
                            </div>
                            <p class="card-text text-secondary small mb-auto">Fasilitas MCK dan tempat wudhu yang bersih, terpisah untuk santri putra dan putri.</p>
                            <div class="mt-3 text-end">
                                <span class="badge bg-light text-dark border border-dark btn-hover-effect px-3 py-2">Lihat Foto <i class="bi bi-arrow-right ms-1"></i></span>
                            </div>
                        </div>
                    </a>
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
        .hover-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .hover-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
        
        .cursor-pointer { cursor: pointer; }
        
        .hover-zoom-container {
            overflow: hidden;
            border-top-left-radius: var(--bs-card-inner-border-radius);
            border-top-right-radius: var(--bs-card-inner-border-radius);
        }

        .zoom-effect {
            transition: transform 0.5s ease, filter 0.3s ease;
        }
        .hover-zoom-container:hover .zoom-effect {
            transform: scale(1.05);
            filter: brightness(0.8);
        }

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
        .hover-zoom-container:hover .overlay-icon {
            opacity: 1;
        }

        /* EFEK HOVER PADA TOMBOL (BARU) */
        .btn-hover-effect {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            display: inline-block; /* Pastikan badge bisa di-transform */
        }
        
        /* Efek saat card di-hover (opsional, jika ingin tombol gerak saat card di-hover) */
        /* .hover-card:hover .btn-hover-effect { ... } */

        /* Efek saat tombol itu sendiri di-hover */
        .btn-hover-effect:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
            cursor: pointer;
        }
    </style>

    <script>
        function showImage(element) {
            var imgSrc = element.querySelector('img').src;
            var imgAlt = element.querySelector('img').alt;

            document.getElementById('imgPreview').src = imgSrc;
            document.getElementById('modalFotoLabel').innerText = imgAlt;
        }
    </script>
@endsection
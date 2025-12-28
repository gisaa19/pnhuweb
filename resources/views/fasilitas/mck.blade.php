@extends('layouts.main')
@section('title', 'Detail MCK & Sanitasi')

@section('container')
    <div class="container py-5">
        <a href="/fasilitas" class="btn btn-outline-dark mb-4 rounded-pill"><i class="bi bi-arrow-left me-2"></i>Kembali ke Fasilitas</a>
        
        <div class="text-center mb-5">
            <h2 class="fw-bold text-uppercase display-6 text-info">FASILITAS SANITASI</h2>
            <p class="text-muted lead">Kebersihan adalah sebagian dari iman. Standar kebersihan tinggi untuk kenyamanan ibadah.</p>
        </div>

        <div class="row g-5">
            
            <div class="col-12">
                <div class="card shadow border-0 h-100 overflow-hidden">
                    <div class="card-header text-white text-center py-3" style="background-color: #0288D1;">
                        <h4 class="fw-bold mb-0"><i class="fa-solid fa-person fs-3 me-2"></i>AREA PUTRA</h4>
                    </div>
                    
                    <div class="card-body p-4 bg-light">
                        <div class="mb-4">
                            <h5 class="fw-bold mb-3" style="color: #0288D1;">Fasilitas Tersedia:</h5>
                            <div class="row">
                                <div class="col-md-6">
                                     <ul class="list-group list-group-flush bg-transparent">
                                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> 15 Kamar Mandi & WC</li>
                                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Area Wudhu Luas (30 Keran)</li>
                                     </ul>
                                </div>
                                <div class="col-md-6">
                                     <ul class="list-group list-group-flush bg-transparent">
                                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Tempat Cuci Pakaian Luas</li>
                                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Air Bersih 24 Jam (Sumur Bor)</li>
                                     </ul>
                                </div>
                            </div>
                            <div class="alert mt-3 mb-0 text-white border-0" style="background-color: #0288D1;">
                                <small><i class="bi bi-info-circle-fill me-1"></i> Lokasi strategis dekat dengan Masjid Jami' dan Gedung Asrama Ibnu Hajar.</small>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                    <img src="{{ asset('img/wcput.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=TOILET+PUTRA'" class="img-fluid rounded w-100 shadow-sm zoom-effect" alt="Toilet Putra" style="height: 250px; object-fit: cover;">
                                    <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                                    <span class="badge position-absolute top-0 start-0 m-2 px-3 py-2 shadow z-2" style="background-color: #01579B;">Toilet / WC</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                    <img src="{{ asset ('img/wudhuput.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=WUDHU+PUTRA'" class="img-fluid rounded w-100 shadow-sm zoom-effect" alt="Tempat Wudhu Putra" style="height: 250px; object-fit: cover;">
                                    <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                                    <span class="badge position-absolute top-0 start-0 m-2 px-3 py-2 shadow z-2" style="background-color: #0288D1;">Tempat Wudhu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card shadow border-0 h-100 overflow-hidden">
                    <div class="card-header text-white text-center py-3" style="background-color: #D81B60;">
                        <h4 class="fw-bold mb-0"><i class="fa-solid fa-person-dress fs-3 me-2"></i>AREA PUTRI</h4>
                    </div>
                    
                    <div class="card-body p-4 bg-light">
                        <div class="mb-4">
                            <h5 class="fw-bold mb-3" style="color: #D81B60;">Fasilitas Tersedia:</h5>
                            <div class="row">
                                <div class="col-md-6">
                                     <ul class="list-group list-group-flush bg-transparent">
                                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> 10 Kamar Mandi & WC (Tertutup)</li>
                                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Area Wudhu Privat</li>
                                     </ul>
                                </div>
                                <div class="col-md-6">
                                     <ul class="list-group list-group-flush bg-transparent">
                                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Area Jemuran Khusus Putri</li>
                                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Kebersihan Dijaga Petugas</li>
                                     </ul>
                                </div>
                            </div>
                            <div class="alert mt-3 mb-0 text-white border-0" style="background-color: #D81B60;">
                                <small><i class="bi bi-shield-lock-fill me-1"></i> Area tertutup tembok tinggi untuk menjaga privasi santriwati secara total.</small>
                            </div>
                        </div>

                         <div class="row g-3">
                            <div class="col-md-6">
                                <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                    <img src="https://via.placeholder.com/600x400?text=TOILET+PUTRI" class="img-fluid rounded w-100 shadow-sm zoom-effect" alt="Toilet Putri" style="height: 250px; object-fit: cover;">
                                    <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                                    <span class="badge position-absolute top-0 start-0 m-2 px-3 py-2 shadow z-2" style="background-color: #880E4F;">Toilet / WC</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                    <img src="https://via.placeholder.com/600x400?text=TEMPAT+WUDHU+PUTRI" class="img-fluid rounded w-100 shadow-sm zoom-effect" alt="Tempat Wudhu Putri" style="height: 250px; object-fit: cover;">
                                    <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                                    <span class="badge position-absolute top-0 start-0 m-2 px-3 py-2 shadow z-2" style="background-color: #D81B60;">Tempat Wudhu</span>
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

    <style>
        .cursor-pointer { cursor: pointer; }
        
        .hover-zoom-container {
            overflow: hidden;
            border-radius: 0.375rem; /* Sesuai class rounded bootstrap */
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
            z-index: 1;
            pointer-events: none;
        }
        .hover-zoom-container:hover .overlay-icon {
            opacity: 1;
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
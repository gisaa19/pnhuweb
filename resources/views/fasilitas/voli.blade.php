@extends('layouts.main')
@section('title', 'Lapangan Bola Voli')

@section('container')
    <div class="container py-5">
        <a href="/fasilitas" class="btn btn-outline-dark mb-4 rounded-pill"><i class="bi bi-arrow-left me-2"></i>Kembali ke Fasilitas</a>
        
        <div class="card border-0 shadow-lg overflow-hidden">
            <div class="row g-0">
                <div class="col-lg-6 position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                    
                    <img src="{{ asset ('img/lapvoli2.jpg') }}" onerror="this.src='https://via.placeholder.com/800x600?text=LAPANGAN+VOLI'" class="img-fluid h-100 w-100 zoom-effect" style="object-fit: cover; min-height: 400px;" alt="Lapangan Voli Standar Nasional">
                    
                    <div class="overlay-icon">
                        <i class="bi bi-zoom-in text-white display-1"></i>
                    </div>

                    <div class="position-absolute top-0 start-0 m-3 z-2">
                        <span class="badge bg-warning text-dark fw-bold px-3 py-2 shadow">
                            <i class="fa-solid fa-volleyball me-2"></i>Olahraga
                        </span>
                    </div>
                </div>
                
                <div class="col-lg-6 p-5 d-flex flex-column justify-content-center bg-white">
                    <h2 class="fw-bold text-uppercase text-warning mb-2">
                        <i class="fa-solid fa-volleyball me-2"></i>Lapangan Bola Voli
                    </h2>
                    <p class="text-muted small mb-4">Area Belakang Asrama Putra</p>

                    <p class="lead text-dark mb-4">
                        Lapangan voli standar nasional dengan lantai semen halus yang aman, menjadi pusat aktivitas fisik dan kebugaran santri.
                    </p>
                    
                    <div class="mb-4">
                        <h6 class="fw-bold text-dark border-bottom pb-2 border-warning d-inline-block">Jadwal Penggunaan:</h6>
                        <ul class="list-unstyled mt-2 text-secondary">
                            <li class="mb-2"><i class="bi bi-clock-history text-warning me-2"></i><strong>Jam Olahraga Sekolah:</strong> (Sesuai Jadwal PJOK)</li>
                            <li class="mb-2"><i class="bi bi-calendar-week text-warning me-2"></i><strong>Jumat Pagi:</strong> Senam & Olahraga Santri</li>
                            <li><i class="bi bi-calendar-event text-warning me-2"></i><strong>Sore Hari:</strong> Latihan Tim Inti / Ekstrakurikuler</li>
                        </ul>
                    </div>

                    <div class="alert alert-warning border-0 bg-warning bg-opacity-10 text-dark small">
                        <i class="bi bi-trophy-fill me-2 text-warning"></i>
                        Sering digunakan untuk turnamen antar kelas <strong>(Class Meeting)</strong> dan persahabatan antar pesantren.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="modalFotoLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered"> <div class="modal-content bg-transparent border-0">
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
        
        /* Container hover */
        .hover-zoom-container {
            overflow: hidden; /* Mencegah gambar keluar batas saat di-zoom */
        }

        /* Efek Zoom Gambar */
        .zoom-effect {
            transition: transform 0.5s ease, filter 0.3s ease;
        }
        .hover-zoom-container:hover .zoom-effect {
            transform: scale(1.05); /* Zoom sedikit saat hover */
            filter: brightness(0.8); /* Agak gelap sedikit */
        }

        /* Ikon Overlay */
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
            opacity: 1; /* Muncul saat hover */
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
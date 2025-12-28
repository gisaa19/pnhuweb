@extends('layouts.main')
@section('title', 'Detail Gedung Madrasah')

@section('container')
    <div class="container py-5">
        <a href="/fasilitas" class="btn btn-outline-dark mb-4 rounded-pill"><i class="bi bi-arrow-left me-2"></i>Kembali ke Fasilitas</a>
        
        <div class="text-center mb-5">
            <h2 class="fw-bold text-uppercase display-6 text-primary">GEDUNG MADRASAH</h2>
            <p class="text-muted lead">Tempat kegiatan belajar mengajar (KBM).</p>
        </div>

        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src={{ asset ('img/pusaka.jpg') }} class="card-img-top zoom-effect" alt="Madrasah Pusaka" style="height: 250px; object-fit: cover;">
                        <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-dark">Madrasah Pusaka</h5>
                        <p class="text-secondary small">Gedung bersejarah yang menjadi saksi awal perjuangan pesantren.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src={{ asset ('img/10smk.jpg') }} class="card-img-top zoom-effect" alt="Gedung Madrasah 1" style="height: 250px; object-fit: cover;">
                        <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-dark">Madrasah 1</h5>
                        <p class="text-secondary small">Madrasah 1 yang difungsikan sebagai ruang kelas untuk kegiatan belajar peserta didik kelas X SMK, serta dapat digunakan sebagai ruang kegiatan pembelajaran mengaji.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src={{ asset ('img/11smk.jpg') }} class="card-img-top zoom-effect" alt="Gedung Madrasah 2" style="height: 250px; object-fit: cover;">
                        <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-dark">Madrasah 2</h5>
                        <p class="text-secondary small">Madrasah 2 yang difungsikan sebagai ruang kelas untuk kegiatan belajar peserta didik kelas XI SMK, serta dapat digunakan sebagai ruang kegiatan pembelajaran mengaji.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src={{ asset ('img/12smk.jpg') }} class="card-img-top zoom-effect" alt="Gedung Madrasah 3" style="height: 250px; object-fit: cover;">
                        <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-dark">Madrasah 3</h5>
                        <p class="text-secondary small">Madrasah 3 yang difungsikan sebagai ruang kelas untuk kegiatan belajar peserta didik kelas XII SMK, serta dapat digunakan sebagai ruang kegiatan pembelajaran mengaji.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src="https://via.placeholder.com/600x400?text=GEDUNG+MES" class="card-img-top zoom-effect" alt="Gedung Mes" style="height: 250px; object-fit: cover;">
                        <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-dark">Mess</h5>
<p class="text-secondary small">
Digunakan sebagai tempat menginap tamu pondok, ruang perawatan sementara bagi santri yang sakit, serta dapat difungsikan sebagai ruang kegiatan mengaji.
</p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src="https://via.placeholder.com/600x400?text=MADRASAH+ROBIAH" class="card-img-top zoom-effect" alt="Madrasah Robiah" style="height: 250px; object-fit: cover;">
                        <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-dark">Madrasah Robiah</h5>
                        <p class="text-secondary small">Gedung khusus di area putri untuk kegiatan mengaji</p>
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
        .hover-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .hover-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
        
        .cursor-pointer { cursor: pointer; }
        .hover-zoom-container { overflow: hidden; border-top-left-radius: var(--bs-card-inner-border-radius); border-top-right-radius: var(--bs-card-inner-border-radius); }
        
        .zoom-effect { transition: transform 0.5s ease, filter 0.3s ease; }
        .hover-zoom-container:hover .zoom-effect { transform: scale(1.05); filter: brightness(0.9); }

        .overlay-icon {
            position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
            opacity: 0; transition: opacity 0.3s ease; z-index: 2; pointer-events: none;
        }
        .hover-zoom-container:hover .overlay-icon { opacity: 1; }
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
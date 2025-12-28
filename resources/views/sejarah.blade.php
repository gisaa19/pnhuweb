@extends('layouts.main')

@section('title', 'Sejarah Singkat')

@section('container')
    <div class="container-fluid py-5 mb-5 text-white" style="background: linear-gradient(to right, #3e2723, #5d4037);">
        <div class="container">
            <h2 class="fw-bold mb-1 text-uppercase display-6"><i class="bi bi-hourglass-split me-2"></i>SEJARAH PESANTREN</h2>
            <p class="mb-0 opacity-75">Napak tilas perjuangan dan perkembangan dari masa ke masa.</p>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row">
            
            <div class="col-lg-8 mb-5">
                
                <div class="card border-0 shadow-sm mb-5">
                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src="{{ asset('img/sejarah.jpg') }}" class="card-img-top zoom-effect" alt="Sejarah Pesantren" style="filter: sepia(30%); object-fit: cover; height: 400px;">
                        
                        <div class="overlay-icon">
                            <i class="bi bi-zoom-in text-white display-4"></i>
                        </div>
                    </div>

                    <div class="card-footer bg-white text-center text-muted fst-italic py-3">
                        Dokumentasi bangunan awal pesantren di masa perintisan.
                    </div>
                </div>
                <div class="mb-5 position-relative ps-4 border-start border-4" style="border-color: #5d4037 !important;">
                    <span class="position-absolute top-0 start-0 translate-middle bg-white border border-4 rounded-circle p-2" style="border-color: #5d4037 !important;"></span>
                    <h3 class="fw-bold mb-3" style="color: #3e2723;">Masa Perintisan (1993)</h3>
                    <p class="text-secondary lh-lg" style="text-align: justify;">
                        Pondok Pesantren Nurul Huda Utsmaniyyah berdiri pada tahun 1993 atas prakarsa <strong>KH. Oyo Sunaryo</strong>. Pada masa awal perintisan, kegiatan pendidikan dilaksanakan dengan sarana yang sangat sederhana, berupa sebuah langgar kayu dan tiga bilik kamar santri. Dalam keterbatasan tersebut, beliau menanamkan nilai keilmuan dan keikhlasan dengan mengajarkan Al-Qur’an serta kitab-kitab dasar kepada masyarakat sekitar, yang menjadi fondasi utama perjalanan pesantren hingga saat ini.
                    </p>
                </div>

                <div class="mb-5 position-relative ps-4 border-start border-4" style="border-color: #f57f17 !important;">
                    <span class="position-absolute top-0 start-0 translate-middle bg-white border border-4 rounded-circle p-2" style="border-color: #f57f17 !important;"></span>
                    <h3 class="fw-bold mb-3" style="color: #e65100;">Transformasi Pendidikan Formal</h3>
                    <p class="text-secondary lh-lg mb-5" style="text-align: justify;">
                        Memasuki era perkembangan pada awal tahun 2009-an, kepemimpinan pesantren dilanjutkan untuk menjawab tuntutan zaman. Transformasi dilakukan melalui pendirian lembaga pendidikan formal sebagai wujud komitmen pesantren dalam mengintegrasikan pendidikan keislaman dan pendidikan umum. Tonggak penting pada fase ini antara lain berdirinya Madrasah Diniyah Takmiliyah pada tahun 2002, pendirian SMP IT Nurul Huda Utsmaniyyah pada tahun 2009, serta SMK Ma’arif dengan program keahlian Multimedia dan DKV (Desain Komunikasi Visual) pada tahun 2016.
                    </p>
                </div>

                <div class="mb-5 position-relative ps-4 border-start border-4" style="border-color: #1b5e20 !important;">
                    <span class="position-absolute top-0 start-0 translate-middle bg-white border border-4 rounded-circle p-2" style="border-color: #1b5e20 !important;"></span>
                    <h3 class="fw-bold mb-3" style="color: #1b5e20;">Era Modernisasi & Digitalisasi</h3>
                    <p class="text-secondary lh-lg" style="text-align: justify;">
                        Pada masa kini, Pondok Pesantren Nurul Huda Utsmaniyyah terus berbenah menjadi lembaga pendidikan Islam yang modern dan adaptif terhadap perkembangan teknologi. Berbagai fasilitas penunjang pembelajaran telah dilengkapi, meliputi laboratorium komputer, asrama bertingkat, serta masjid jami’ yang representatif. Seluruh perkembangan tersebut tetap berpijak pada nilai-nilai tradisi salafiyah yang menjadi identitas dan pondasi utama pesantren dalam membentuk generasi berilmu, berakhlak, dan berdaya saing.
                    </p>
                </div>

            </div>
            
            <div class="col-lg-4">
                
                <div class="card border-0 shadow-sm mb-4 text-center">
                    <div class="card-header text-white fw-bold py-2" style="background-color: #5d4037;">
                        PENDIRI & PENGASUH
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('img/pimpinan.jpg') }}" onerror="this.src='https://via.placeholder.com/300x350?text=KH.+OYO+SUNARYO'" class="img-fluid rounded mb-3 shadow-sm border p-1" alt="KH. Oyo Sunaryo" style="max-height: 350px; object-fit: cover;">
                        <h5 class="fw-bold mb-1" style="color: #3e2723;">KH. Oyo Sunaryo</h5>
                        <p class="text-muted small mb-0">Pimpinan PP. Nurul Huda Utsmaniyyah</p>
                    </div>
                </div>

                <div class="card border-0 shadow-sm sticky-top" style="top: 100px;"> 
                    <div class="card-header text-white fw-bold py-3" style="background-color: #3e2723;">
                        MENU TENTANG KAMI
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="/visi-misi" class="list-group-item list-group-item-action text-secondary">
                            <i class="bi bi-chevron-right me-2"></i> Visi & Misi
                        </a>
                        
                        <a href="/sejarah" class="list-group-item list-group-item-action active fw-bold border-0" style="background-color: #5d4037;">
                            <i class="bi bi-caret-right-fill me-2"></i> Sejarah Singkat
                        </a>

                        <a href="/struktur" class="list-group-item list-group-item-action text-secondary">
                            <i class="bi bi-chevron-right me-2"></i> Struktur Organisasi
                        </a>
                        
                        <a href="/peraturan" class="list-group-item list-group-item-action text-secondary">
                            <i class="bi bi-chevron-right me-2"></i> Kewajiban & Larangan
                        </a>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mt-4 bg-light">
                    <div class="card-body fst-italic text-center text-muted border-start border-4 border-warning">
                        "Teruslah belajar dan berjuang, karena masa depan adalah milik mereka yang mempersiapkannya hari ini."
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
        .hover-zoom-container { overflow: hidden; border-top-left-radius: var(--bs-card-inner-border-radius); border-top-right-radius: var(--bs-card-inner-border-radius); }
        
        .zoom-effect { transition: transform 0.5s ease; }
        .hover-zoom-container:hover .zoom-effect { transform: scale(1.05); }

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
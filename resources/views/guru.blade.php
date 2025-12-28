@extends('layouts.main')

@section('title', 'Daftar Pengajar')

@section('container')
    <div class="container-fluid py-5 bg-dark text-white mb-5">
        <div class="container">
            <h2 class="fw-bold mb-0 text-uppercase">Pimpinan & Dewan Pengasuh</h2>
            <p class="text-muted mb-0">Tenaga pengajar profesional Pondok Pesantren Nurul Huda Utsmaniyyah.</p>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row g-4"> 
            
            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center hover-card">
                    <div class="card-body p-4">
                        <img src="{{ asset('img/pim.jpg') }}" 
                             onerror="this.src='https://via.placeholder.com/150?text=FOTO'" 
                             class="rounded-circle mb-3 border border-3 border-success p-1 cursor-pointer hover-zoom" 
                             alt="Foto Guru"
                             style="width: 150px; height: 150px; object-fit: cover;"
                             data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        
                        <h5 class="fw-bold mb-1">Kh. Oyo Sunaryo</h5>
                        <p class="text-muted small mb-3">(Pimp. Ponpes)</p>
                        
                        <a href="https://wa.me/6281323558688" target="_blank" class="btn btn-success rounded-circle btn-lg shadow-sm">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center hover-card">
                    <div class="card-body p-4">
                        <img src="{{ asset('img/teak.png') }}" 
                             onerror="this.src='https://via.placeholder.com/150?text=Sofyan'" 
                             class="rounded-circle mb-3 border border-3 border-success p-1 cursor-pointer hover-zoom" 
                             alt="Foto Guru"
                             style="width: 150px; height: 150px; object-fit: cover;"
                             data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        
                        <h5 class="fw-bold mb-3">Hj. Elis Lisnawati </h5>
                        <p class="text-muted small mb-3">(Istri Pimp. Ponpes)</p>
                        
                        <a href="https://wa.me/6281323558688" target="_blank" class="btn btn-success rounded-circle btn-lg shadow-sm">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center hover-card">
                    <div class="card-body p-4">
                        <img src="{{ asset('img/tehis.png') }}" 
                             onerror="this.src='https://via.placeholder.com/150?text=FOTO'" 
                             class="rounded-circle mb-3 border border-3 border-success p-1 cursor-pointer hover-zoom" 
                             alt="Foto Guru"
                             style="width: 150px; height: 150px; object-fit: cover;"
                             data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        
                        <h5 class="fw-bold mb-3">Ustzh. Iis Aisyah</h5>
                        
                        <a href="https://wa.me/6282214928205" target="_blank" class="btn btn-success rounded-circle btn-lg shadow-sm">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center hover-card">
                    <div class="card-body p-4">
                        <img src="{{ asset('img/paron.png') }}" 
                             onerror="this.src='https://via.placeholder.com/150?text=FOTO'" 
                             class="rounded-circle mb-3 border border-3 border-success p-1 cursor-pointer hover-zoom" 
                             alt="Foto Guru"
                             style="width: 150px; height: 150px; object-fit: cover;"
                             data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        
                        <h5 class="fw-bold mb-3">Ust. Roni, S.H.I</h5>
                        
                        <a href="https://wa.me/6285223293234" target="_blank" class="btn btn-success rounded-circle btn-lg shadow-sm">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center hover-card">
                    <div class="card-body p-4">
                        <img src="{{ asset('img/made.png') }}" 
                             onerror="this.src='https://via.placeholder.com/150?text=FOTO'" 
                             class="rounded-circle mb-3 border border-3 border-success p-1 cursor-pointer hover-zoom" 
                             alt="Foto Guru"
                             style="width: 150px; height: 150px; object-fit: cover;"
                             data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        
                        <h5 class="fw-bold mb-3">Ust. M. Ridwan</h5>
                        
                        <a href="https://wa.me/6281312957680" target="_blank" class="btn btn-success rounded-circle btn-lg shadow-sm">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center hover-card">
                    <div class="card-body p-4">
                        <img src="{{ asset('img/tez.png') }}" 
                             onerror="this.src='https://via.placeholder.com/150?text=Zainab'" 
                             class="rounded-circle mb-3 border border-3 border-success p-1 cursor-pointer hover-zoom" 
                             alt="Foto Guru"
                             style="width: 150px; height: 150px; object-fit: cover;"
                             data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        
                        <h5 class="fw-bold mb-3">Ustzh. Siti Zainab</h5>
                        
                        <a href="https://wa.me/6285846874741" target="_blank" class="btn btn-success rounded-circle btn-lg shadow-sm">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center hover-card">
                    <div class="card-body p-4">
                        <img src="{{ asset('img/ai_siti.jpg') }}" 
                             onerror="this.src='https://via.placeholder.com/150?text=Ai+Siti'" 
                             class="rounded-circle mb-3 border border-3 border-success p-1 cursor-pointer hover-zoom" 
                             alt="Foto Guru"
                             style="width: 150px; height: 150px; object-fit: cover;"
                             data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        
                        <h5 class="fw-bold mb-3">Ustzh. Ai Siti Fatimah</h5>
                        
                        <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success rounded-circle btn-lg shadow-sm">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center hover-card">
                    <div class="card-body p-4">
                        <img src="{{ asset('img/andri.jpg') }}" 
                             onerror="this.src='https://via.placeholder.com/150?text=Andri'" 
                             class="rounded-circle mb-3 border border-3 border-success p-1 cursor-pointer hover-zoom" 
                             alt="Foto Guru"
                             style="width: 150px; height: 150px; object-fit: cover;"
                             data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        
                        <h5 class="fw-bold mb-3">Ust. Andri</h5>
                        
                        <a href="https://wa.me/6281221012236" target="_blank" class="btn btn-success rounded-circle btn-lg shadow-sm">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center hover-card">
                    <div class="card-body p-4">
                        <img src="{{ asset('img/paa.png') }}" 
                             onerror="this.src='https://via.placeholder.com/150?text=Sofyan'" 
                             class="rounded-circle mb-3 border border-3 border-success p-1 cursor-pointer hover-zoom" 
                             alt="Foto Guru"
                             style="width: 150px; height: 150px; object-fit: cover;"
                             data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        
                        <h5 class="fw-bold mb-3">Ust. Sofyan Tsauri</h5>
                        
                        <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success rounded-circle btn-lg shadow-sm">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
<div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center hover-card">
                    <div class="card-body p-4">
                        <img src="{{ asset('img/teher.png') }}" 
                             onerror="this.src='https://via.placeholder.com/150?text=Sofyan'" 
                             class="rounded-circle mb-3 border border-3 border-success p-1 cursor-pointer hover-zoom" 
                             alt="Foto Guru"
                             style="width: 150px; height: 150px; object-fit: cover;"
                             data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        
                        <h5 class="fw-bold mb-3">Ustzh. Erna</h5>
                        
                        <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success rounded-circle btn-lg shadow-sm">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
<div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center hover-card">
                    <div class="card-body p-4">
                        <img src="{{ asset('img/-') }}" 
                             onerror="this.src='https://via.placeholder.com/150?text=Sofyan'" 
                             class="rounded-circle mb-3 border border-3 border-success p-1 cursor-pointer hover-zoom" 
                             alt="Foto Guru"
                             style="width: 150px; height: 150px; object-fit: cover;"
                             data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        
                        <h5 class="fw-bold mb-3">Ust. Didi Heryadi</h5>
                        
                        <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success rounded-circle btn-lg shadow-sm">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
<div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center hover-card">
                    <div class="card-body p-4">
                        <img src="{{ asset('img/-') }}" 
                             onerror="this.src='https://via.placeholder.com/150?text=Sofyan'" 
                             class="rounded-circle mb-3 border border-3 border-success p-1 cursor-pointer hover-zoom" 
                             alt="Foto Guru"
                             style="width: 150px; height: 150px; object-fit: cover;"
                             data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        
                        <h5 class="fw-bold mb-3">Ustzh. Elih Solihah </h5>
                        
                        <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success rounded-circle btn-lg shadow-sm">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="modalFotoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-header border-0 p-0">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 text-center">
                    <img id="imgPreview" src="" class="img-fluid rounded shadow-lg" alt="Preview Foto" style="max-height: 80vh;">
                    <div class="mt-2">
                        <span class="badge bg-dark fs-5" id="modalFotoLabel"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .cursor-pointer { cursor: pointer; }
        
        .hover-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .hover-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }

        .hover-zoom { transition: transform 0.3s ease; }
        .hover-zoom:hover { transform: scale(1.1); filter: brightness(0.9); }
    </style>

    <script>
        function showImage(element) {
            var imgSrc = element.src;
            var imgAlt = element.parentElement.querySelector('h5').innerText; 

            document.getElementById('imgPreview').src = imgSrc;
            document.getElementById('modalFotoLabel').innerText = imgAlt;
        }
    </script>
@endsection
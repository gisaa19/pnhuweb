@extends('layouts.main')
@section('title', 'Detail Asrama Putri')

@section('container')
    <div class="container py-5">
        <a href="/fasilitas" class="btn btn-outline-dark mb-4 rounded-pill"><i class="bi bi-arrow-left me-2"></i>Kembali ke Fasilitas</a>
        
        <div class="text-center mb-5">
            <h2 class="fw-bold text-uppercase display-6" style="color: #D81B60;">ASRAMA PUTRI</h2>
            <p class="text-muted lead">Komplek asrama putri yang aman, nyaman, dan terjaga privasinya.</p>
        </div>

        <div class="mb-5">
            <div class="border-start border-5 ps-3 mb-4" style="border-color: #D81B60 !important;">
                <h3 class="fw-bold" style="color: #D81B60;"><i class="bi bi-house-heart-fill me-2"></i>Asrama Robiah</h3>
                <p class="text-muted small">Asrama dengan kapasitas hunian terbanyak (7 Kamar).</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm h-100 border-0 hover-card">
                        <div class="position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                            <img src="{{ asset ('img/kobong1rob.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=Robiah+01'" class="card-img-top zoom-effect" alt="Robiah 01" style="height: 200px; object-fit: cover;">
                            <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Robiah 01</h5>
                            <p class="small text-muted mb-2"><i class="bi bi-people-fill me-1 text-danger"></i> Kapasitas: 11 Santri</p>
                                                    </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100 border-0 hover-card">
                        <div class="position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                            <img src="{{ asset('img/kobong2rob.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=Robiah+02'" class="card-img-top zoom-effect" alt="Robiah 02" style="height: 200px; object-fit: cover;">
                            <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Robiah 02</h5>
                            <p class="small text-muted mb-2"><i class="bi bi-people-fill me-1 text-danger"></i> Kapasitas: 8 Santri</p>
                           
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100 border-0 hover-card">
                        <div class="position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                            <img src="{{ asset ('img/kobong3rob.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=Robiah+03'" class="card-img-top zoom-effect" alt="Robiah 03" style="height: 200px; object-fit: cover;">
                            <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Robiah 03</h5>
                            <p class="small text-muted mb-2"><i class="bi bi-people-fill me-1 text-danger"></i> Kapasitas: 7 Santri</p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100 border-0 hover-card">
                        <div class="position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                            <img src="{{ asset ('img/kobong4rob.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=Robiah+04'" class="card-img-top zoom-effect" alt="Robiah 04" style="height: 200px; object-fit: cover;">
                            <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Robiah 04</h5>
                            <p class="small text-muted mb-2"><i class="bi bi-people-fill me-1 text-danger"></i> Kapasitas: 6 Santri</p>
                           
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100 border-0 hover-card">
                        <div class="position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                            <img src="{{ asset ('img/kobong5rob.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=Robiah+05'" class="card-img-top zoom-effect" alt="Robiah 05" style="height: 200px; object-fit: cover;">
                            <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Robiah 05</h5>
                            <p class="small text-muted mb-2"><i class="bi bi-people-fill me-1 text-danger"></i> Kapasitas: 6 Santri</p>
                                                    </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100 border-0 hover-card">
                        <div class="position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                            <img src="{{ asset ('img/kobong6rob.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=Robiah+06'" class="card-img-top zoom-effect" alt="Robiah 06" style="height: 200px; object-fit: cover;">
                            <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Robiah 06</h5>
                            <p class="small text-muted mb-2"><i class="bi bi-people-fill me-1 text-danger"></i> Kapasitas: 8 Santri</p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100 border-0 hover-card">
                        <div class="position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                            <img src="{{ asset ('img/kobong7rob.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=Robiah+07'" class="card-img-top zoom-effect" alt="Robiah 07" style="height: 200px; object-fit: cover;">
                            <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Robiah 07</h5>
                            <p class="small text-muted mb-2"><i class="bi bi-people-fill me-1 text-danger"></i> Kapasitas: 10 Santri</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <div class="mb-5">
            <div class="border-start border-5 ps-3 mb-4" style="border-color: #8E24AA !important;">
                <h3 class="fw-bold" style="color: #8E24AA;"><i class="bi bi-flower1 me-2"></i>Asrama Fatimah</h3>
                <p class="text-muted small">Gedung khusus santri tingkat menengah (3 Kamar).</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm h-100 border-0 hover-card">
                        <div class="position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                            <img src="{{ asset ('img/kobong8fat.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=Fatimah+08'" class="card-img-top zoom-effect" alt="Fatimah 08" style="height: 200px; object-fit: cover;">
                            <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Fatimah 08</h5>
                            <p class="small text-muted mb-2"><i class="bi bi-people-fill me-1" style="color: #8E24AA;"></i> Kapasitas: 7 Santri</p>
                                                    </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100 border-0 hover-card">
                        <div class="position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                            <img src="{{ asset ('img/kobong9fat.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=Fatimah+09'" class="card-img-top zoom-effect" alt="Fatimah 09" style="height: 200px; object-fit: cover;">
                            <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Fatimah 09</h5>
                            <p class="small text-muted mb-2"><i class="bi bi-people-fill me-1" style="color: #8E24AA;"></i> Kapasitas: 9 Santri</p>
                                                    </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100 border-0 hover-card">
                        <div class="position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                            <img src="{{ asset ('img/kobong10fat.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=Fatimah+10'" class="card-img-top zoom-effect" alt="Fatimah 10" style="height: 200px; object-fit: cover;">
                            <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Fatimah 10</h5>
                            <p class="small text-muted mb-2"><i class="bi bi-people-fill me-1" style="color: #8E24AA;"></i> Kapasitas: 6 Santri</p>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <div class="mb-5">
            <div class="border-start border-5 ps-3 mb-4" style="border-color: #FF8F00 !important;">
                <h3 class="fw-bold" style="color: #FF8F00;"><i class="bi bi-sun-fill me-2"></i>Asrama Khodijah</h3>
                <p class="text-muted small">Asrama khusus untuk santri putri.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-sm h-100 border-0 hover-card">
                        <div class="position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                            <img src="{{ asset ('img/kobong11put.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=Putri+11'" class="card-img-top zoom-effect" alt="Putri 11" style="height: 250px; object-fit: cover;">
                            <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Khodijah 11</h5>
                            <p class="small text-muted mb-2"><i class="bi bi-people-fill me-1" style="color: #FF8F00;"></i> Kapasitas: 15 Santri</p>
                            <p class="card-text small text-secondary">Ruangan besar kapasitas 15 orang</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm h-100 border-0 hover-card">
                        <div class="position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                            <img src="{{ asset ('img/kobong12put.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=Putri+12'" class="card-img-top zoom-effect" alt="Putri 12" style="height: 250px; object-fit: cover;">
                            <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-dark">Khodijah 12</h5>
                            <p class="small text-muted mb-2"><i class="bi bi-people-fill me-1" style="color: #FF8F00;"></i> Kapasitas: 15 Santri</p>
                            <p class="card-text small text-secondary">kapasitas 6 orang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <div class="mb-5">
            <div class="border-start border-5 border-warning ps-3 mb-4">
                <h3 class="fw-bold text-warning"><i class="bi bi-star-fill me-2"></i>Asrama VIP Putri</h3>
                <p class="text-muted small">Fasilitas khusus dengan kenyamanan ekstra dan privasi tinggi.</p>
            </div>

            <div class="card shadow border-warning h-100 overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-5 position-relative overflow-hidden cursor-pointer" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                        <img src="{{ asset ('img/vipputri.jpg') }}" onerror="this.src='https://via.placeholder.com/600x400?text=ASRAMA+VIP+PUTRI'" class="img-fluid h-100 w-100 rounded-start zoom-effect" alt="VIP" style="object-fit: cover; min-height: 300px;">
                        <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body p-4">
                            <h4 class="fw-bold text-warning"><i class="bi bi-gem me-2"></i>Kamar Khusus VIP</h4>
                            <p class="text-secondary">Dirancang untuk kenyamanan maksimal dengan fasilitas privat.</p>
                            
                            <h6 class="fw-bold mt-4 text-dark">Fasilitas Unggulan:</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled text-secondary small">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-warning me-2"></i>Kamar Mandi Dalam</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-warning me-2"></i>Kasur Springbed</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-warning me-2"></i>Lemari Pribadi</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled text-secondary small">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-warning me-2"></i>Kipas Angin Eksklusif</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-warning me-2"></i>Maksimal 6 Orang</li>
                                    </ul>
                                </div>
                            </div>
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
        .position-relative:hover .overlay-icon { /* Memicu overlay saat wrapper gambar di-hover */
            opacity: 1; 
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
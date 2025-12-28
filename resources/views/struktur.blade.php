@extends('layouts.main')

@section('title', 'Struktur Organisasi')

@section('container')
    <div class="container-fluid py-5 mb-5 text-white" style="background: linear-gradient(to right, #0d47a1, #1565c0);">
        <div class="container">
            <h2 class="fw-bold mb-1 text-uppercase display-6"><i class="bi bi-diagram-3-fill me-2"></i>STRUKTUR ORGANISASI</h2>
            <p class="mb-0 opacity-75">Bagan kepengurusan dan tata kelola Pesantren Nurul Huda Utsmaniyyah.</p>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row">
            
            <div class="col-lg-8 mb-5">
                
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-header text-white fw-bold py-3 text-center" style="background-color: #1565c0;">
                        <i class="bi bi-person-standing me-2 fs-5"></i>STRUKTUR PENGURUS PUTRA
                    </div>
                    <div class="card-body text-center p-4">
                        
                        <div class="row justify-content-center mb-4">
                            <div class="col-12 mb-4">
                                <img src="{{ asset('img/mal.jpg') }}" onerror="this.src='https://via.placeholder.com/150?text=ROIS'" class="rounded-circle mb-2 border border-3 border-primary p-1 cursor-pointer hover-scale" width="140" height="140" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="fw-bold mb-0 text-primary">Ust. M. Jamal Ihsan Kamil</h6>
                                <span class="badge bg-primary">ROIS (Ketua)</span>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="https://via.placeholder.com/150?text=SEKRETARIS" class="rounded-circle mb-2 cursor-pointer hover-scale" width="110" height="110" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="fw-bold mb-0 small">Ust. Indra M. Ditya</h6>
                                <small class="text-muted d-block">Sekretaris</small>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="{{ asset('img/fik.jpg') }}" onerror="this.src='https://via.placeholder.com/150?text=BENDAHARA'" class="rounded-circle mb-2 cursor-pointer hover-scale" width="110" height="110" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="fw-bold mb-0 small">Ust. Muhammad Fikri</h6>
                                <small class="text-muted d-block">Bendahara</small>
                            </div>
                        </div>

                        <hr>

                        <h6 class="fw-bold text-dark text-uppercase mt-4 mb-3 border-bottom pb-2">Bidang Pendidikan</h6>
                        <div class="row justify-content-center g-3">
                            <div class="col-6 col-md-4">
                                <img src="https://via.placeholder.com/150?text=Valda" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ust. Valda Putra</h6>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="https://via.placeholder.com/150?text=Agun" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ust. Agun Gunawan</h6>
                            </div>
                        </div>

                        <h6 class="fw-bold text-danger text-uppercase mt-5 mb-3 border-bottom pb-2">Bidang Keamanan</h6>
                        <div class="row justify-content-center g-3">
                            <div class="col-6 col-md-4 col-lg-3">
                                <img src="{{ asset('img/riz.jpg') }}" onerror="this.src='https://via.placeholder.com/150?text=Agis'" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ust. Agis M. Rizia</h6>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3">
                                <img src="https://via.placeholder.com/150?text=Dacep" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ust. Dacep Maulana</h6>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3">
                                <img src="https://via.placeholder.com/150?text=Yusuf" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ust. M. Yusuf Zaelani</h6>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3">
                                <img src="{{ asset('img/zak.jpg') }}" onerror="this.src='https://via.placeholder.com/150?text=Zaki'" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ust. Zaki Habullah</h6>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3">
                                <img src="https://via.placeholder.com/150?text=Raihan" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ust. Muhammad Raihan</h6>
                            </div>
                        </div>

                        <h6 class="fw-bold text-success text-uppercase mt-5 mb-3 border-bottom pb-2">Bidang Kesehatan</h6>
                        <div class="row justify-content-center g-3">
                            <div class="col-6 col-md-4">
                                <img src="{{ asset('img/ren.jpg') }}" onerror="this.src='https://via.placeholder.com/150?text=Rendi'" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ust. Rendi Ramdani</h6>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="https://via.placeholder.com/150?text=Mulki" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ust. Abdul Mulki S.</h6>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="https://via.placeholder.com/150?text=Ambari" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ust. M. Ambari</h6>
                            </div>
                        </div>

                        <h6 class="fw-bold text-warning text-uppercase mt-5 mb-3 border-bottom pb-2">BUMP (Badan Usaha Milik Pesantren)</h6>
                        <div class="row justify-content-center g-3">
                            <div class="col-6 col-md-4 col-lg-3">
                                <img src="{{ asset('img/rez.jpg') }}" onerror="this.src='https://via.placeholder.com/150?text=Reza'" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ust. M. Reza Saparullah</h6>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3">
                                <img src="https://via.placeholder.com/150?text=Agis" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ust. Agis Firman</h6>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3">
                                <img src="{{ asset('img/rad.jpg') }}" onerror="this.src='https://via.placeholder.com/150?text=Raditya'" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ust. M. Raditya Barkah</h6>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3">
                                <img src="https://via.placeholder.com/150?text=Aditya" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ust. M. Aditya R.</h6>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-6">
                                <h6 class="fw-bold text-info text-uppercase mb-3 border-bottom pb-2">Media & Informasi</h6>
                                <div class="row justify-content-center g-3">
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/150?text=Anggara" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                        <h6 class="small fw-bold mb-0">Ust. M. Anggara</h6>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('img/san.jpg') }}" onerror="this.src='https://via.placeholder.com/150?text=Tsani'" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                        <h6 class="small fw-bold mb-0">Ust. Tsani Sopiyulloh</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4 mt-md-0">
                                <h6 class="fw-bold text-secondary text-uppercase mb-3 border-bottom pb-2">Kebersihan</h6>
                                <div class="row justify-content-center g-3">
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/150?text=Irsal" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                        <h6 class="small fw-bold mb-0">Ust. Irsal</h6>
                                    </div>
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/150?text=Azi" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                        <h6 class="small fw-bold mb-0">Ust. Azi</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-header text-white fw-bold py-3 text-center" style="background-color: #d81b60;">
                        <i class="bi bi-person-standing-dress me-2 fs-5"></i>STRUKTUR PENGURUS PUTRI
                    </div>
                    <div class="card-body text-center p-4">
                        
                        <div class="row justify-content-center mb-4">
                            <div class="col-12 mb-4">
                                <img src="https://via.placeholder.com/150?text=ROISAH" class="rounded-circle mb-2 border border-3 border-danger p-1 cursor-pointer hover-scale" width="140" height="140" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="fw-bold mb-0 text-danger">Ustzh. Hilda Hani</h6>
                                <span class="badge bg-danger">ROISAH (Ketua)</span>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="https://via.placeholder.com/150?text=SEKRETARIS" class="rounded-circle mb-2 cursor-pointer hover-scale" width="110" height="110" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="fw-bold mb-0 small">Ustzh. Ina Siti Nurlatifah</h6>
                                <small class="text-muted d-block">Sekretaris</small>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="https://via.placeholder.com/150?text=BENDAHARA" class="rounded-circle mb-2 cursor-pointer hover-scale" width="110" height="110" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="fw-bold mb-0 small">Ustzh. Siti Marwiyah</h6>
                                <small class="text-muted d-block">Bendahara</small>
                            </div>
                        </div>

                        <hr>

                        <h6 class="fw-bold text-danger text-uppercase mt-4 mb-3 border-bottom pb-2">Bidang Keamanan</h6>
                        <div class="row justify-content-center g-3">
                            <div class="col-6 col-md-4">
                                <img src="https://via.placeholder.com/150?text=Tasya" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ustzh. Tasya Widia</h6>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="https://via.placeholder.com/150?text=Yayu" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ustzh. Yayu Nur Azizah</h6>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="https://via.placeholder.com/150?text=Gina" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ustzh. Gina Auliya</h6>
                            </div>
                        </div>

                        <h6 class="fw-bold text-primary text-uppercase mt-5 mb-3 border-bottom pb-2">Bidang Pendidikan</h6>
                        <div class="row justify-content-center g-3">
                            <div class="col-6 col-md-4">
                                <img src="https://via.placeholder.com/150?text=Noneng" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ustzh. Noneng Suci Z.</h6>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="https://via.placeholder.com/150?text=Qisti" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ustzh. Qisti Amelia Hirzi</h6>
                            </div>
                        </div>

                        <h6 class="fw-bold text-success text-uppercase mt-5 mb-3 border-bottom pb-2">Bidang Kebersihan</h6>
                        <div class="row justify-content-center g-3">
                            <div class="col-6 col-md-4">
                                <img src="https://via.placeholder.com/150?text=Lina" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ustzh. Lina Naysila</h6>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="https://via.placeholder.com/150?text=Ami" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                <h6 class="small fw-bold mb-0">Ustzh. Ani Fadilah</h6>
                            </div>
                        </div>
                                                  <div class="row mt-5">
                            <div class="col-md-6">
                                <h6 class="fw-bold text-info text-uppercase mb-3 border-bottom pb-2">Media & Informasi</h6>
                                <div class="row justify-content-center g-3">
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/150?text=Yayang" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                        <h6 class="small fw-bold mb-0">Ustzh. Yayang Bunga</h6>
                                    </div>
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/150?text=Nayla" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                        <h6 class="small fw-bold mb-0">Ustzh. Nayla Aprilia</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4 mt-md-0">
                                <h6 class="fw-bold text-warning text-uppercase mb-3 border-bottom pb-2">BUMP (Badan Usaha Milik Pesantren)</h6>
                                <div class="row justify-content-center g-3">
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/150?text=Sifa" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                        <h6 class="small fw-bold mb-0">Ustzh. Sifa Nur Azizah</h6>
                                    </div>
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/150?text=Naza" class="rounded-circle mb-2 cursor-pointer hover-scale" width="90" height="90" style="object-fit: cover;" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                        <h6 class="small fw-bold mb-0">Ustzh. Naja Siti Hajar</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm sticky-top" style="top: 100px;"> 
                    <div class="card-header text-white fw-bold py-3" style="background-color: #0d47a1;">
                        MENU TENTANG KAMI
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="/visi-misi" class="list-group-item list-group-item-action text-secondary">
                            <i class="bi bi-chevron-right me-2"></i> Visi & Misi
                        </a>
                        <a href="/sejarah" class="list-group-item list-group-item-action text-secondary">
                            <i class="bi bi-chevron-right me-2"></i> Sejarah Singkat
                        </a>
                        <a href="/struktur" class="list-group-item list-group-item-action active fw-bold border-0" style="background-color: #1565c0;">
                            <i class="bi bi-caret-right-fill me-2"></i> Struktur Organisasi
                        </a>
                        <a href="/peraturan" class="list-group-item list-group-item-action text-secondary">
                            <i class="bi bi-chevron-right me-2"></i> Kewajiban & Larangan
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
        
        .hover-scale { transition: transform 0.2s ease; }
        .hover-scale:hover { transform: scale(1.1); }

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
            var imgSrc = element.src;
            var imgAlt = element.nextElementSibling ? element.nextElementSibling.innerText : element.alt;

            document.getElementById('imgPreview').src = imgSrc;
            document.getElementById('modalFotoLabel').innerText = imgAlt;
        }
    </script>
@endsection
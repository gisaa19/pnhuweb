@extends('layouts.main')

@section('title', 'Visi & Misi')

@section('container')
    <div class="container-fluid py-5 mb-5 text-white" style="background: linear-gradient(to right, #0f5132, #198754);">
        <div class="container">
            <h2 class="fw-bold mb-1 text-uppercase display-6">Visi & Misi</h2>
            <p class="mb-0 opacity-75">Landasan dan tujuan mulia Pesantren Nurul Huda Utsmaniyyah.</p>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row">
            
            <div class="col-lg-8 mb-5">
                
                <div class="mb-5">
                    <h3 class="fw-bold d-inline-block border-bottom border-4 pb-2 mb-4" style="color: #0f5132; border-color: #0f5132 !important;">
                        <i class="bi bi-compass-fill me-2"></i>VISI
                    </h3>
                    <div class="card border-0 shadow-sm" style="background-color: #f8fff9;"> <div class="card-body p-5 text-center">
                            <i class="bi bi-quote fs-1 text-success opacity-25"></i>
                            <p class="lead fw-bold fst-italic mb-3" style="color: #0f5132;">
                                "Lahirnya generasi yang berkepribadian Ahlussunnah Waljama'ah, berilmu, bertaqwa, dan berakhlaqul karimah"
                            </p>
                            <i class="bi bi-quote fs-1 text-success opacity-25" style="transform: rotate(180deg);"></i>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="fw-bold d-inline-block border-bottom border-4 pb-2 mb-4" style="color: #e0a800; border-color: #e0a800 !important;">
                        <i class="bi bi-list-task me-2"></i>MISI
                    </h3>
                    
                    <div class="card border-0 shadow-sm">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item py-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-warning me-3 mt-1"></i>
                                <span>Melatih pembiasaan berbuat sifat-sifat terpuji dalam kehidupan sehari-hari.</span>
                            </li>
                            <li class="list-group-item py-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-warning me-3 mt-1"></i>
                                <span>Melatih pembiasaan melaksanakan 'ibadah baik yang wajib maupun sunnah, terutama dalam shalat berjama'ah.</span>
                            </li>
                            <li class="list-group-item py-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-warning me-3 mt-1"></i>
                                <span>Melatih santri agar terbiasa berdo'a (berwirid).</span>
                            </li>
                            <li class="list-group-item py-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-warning me-3 mt-1"></i>
                                <span>Menyelenggarakan bimbingan belajar yang disesuaikan dengan kemampuan santri.</span>
                            </li>
                            <li class="list-group-item py-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-warning me-3 mt-1"></i>
                                <span>Melaksanakan bimbingan terpadu antara kegiatan pesantren dan kegiatan sekolah.</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm sticky-top" style="top: 100px;"> 
                    <div class="card-header text-white fw-bold py-3" style="background-color: #0f5132;">
                        MENU TENTANG KAMI
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="/visi-misi" class="list-group-item list-group-item-action active fw-bold" style="background-color: #198754; border-color: #198754;">
                            <i class="bi bi-caret-right-fill me-2"></i> Visi & Misi
                        </a>
                        
                        <a href="/sejarah" class="list-group-item list-group-item-action text-secondary">
                            <i class="bi bi-chevron-right me-2"></i> Sejarah Singkat
                        </a>
                        <a href="/struktur" class="list-group-item list-group-item-action text-secondary">
                            <i class="bi bi-chevron-right me-2"></i> Struktur Organisasi
                        </a>
                        
                        <a href="/peraturan" class="list-group-item list-group-item-action text-secondary">
                            <i class="bi bi-chevron-right me-2"></i> Kewajiban & Larangan
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
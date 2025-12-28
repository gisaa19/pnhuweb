@extends('layouts.main')

@section('title', 'Peraturan & Kewajiban')

@section('container')
    <div class="container-fluid py-5 mb-5 text-white" style="background: linear-gradient(to right, #b71c1c, #d32f2f);">
        <div class="container">
            <h2 class="fw-bold mb-1 text-uppercase display-6"><i class="bi bi-shield-exclamation me-2"></i>TATA TERTIB SANTRI</h2>
            <p class="mb-0 opacity-75">Pedoman kedisiplinan demi terciptanya lingkungan belajar yang kondusif.</p>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row">
            
            <div class="col-lg-8 mb-5">
                
                <div class="alert border-0 shadow-sm mb-5 d-flex align-items-center" role="alert" style="background-color: #ffebee; color: #b71c1c;">
                    <i class="bi bi-megaphone-fill fs-4 me-3"></i>
                    <div>
                        <strong>PENTING:</strong> Setiap santri wajib membaca, memahami, dan mematuhi seluruh poin tata tertib di bawah ini.
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="fw-bold text-success border-start border-5 border-success ps-3 mb-4">
                        A. KEWAJIBAN SANTRI
                    </h4>
                    
                    <ul class="list-group list-group-flush shadow-sm rounded">
                        <li class="list-group-item py-3 d-flex align-items-center">
                            <i class="bi bi-check-square-fill text-success me-3"></i> Disiplin Shalat Berjama'ah 5 Waktu.
                        </li>
                        <li class="list-group-item py-3 d-flex align-items-center">
                            <i class="bi bi-check-square-fill text-success me-3"></i> Disiplin Mengaji.
                        </li>
                        <li class="list-group-item py-3 d-flex align-items-center">
                            <i class="bi bi-check-square-fill text-success me-3"></i> Disiplin Sekolah (Masuk tepat waktu).
                        </li>
                        <li class="list-group-item py-3 d-flex align-items-center">
                            <i class="bi bi-check-square-fill text-success me-3"></i> Disiplin Jam Tidur Malam.
                        </li>
                        <li class="list-group-item py-3 d-flex align-items-center">
                            <i class="bi bi-check-square-fill text-success me-3"></i> Disiplin Bangun Tidur (Sebelum Subuh).
                        </li>
                        <li class="list-group-item py-3 d-flex align-items-center">
                            <i class="bi bi-check-square-fill text-success me-3"></i> Wajib Berakhlakul Karimah kepada Guru & Teman.
                        </li>
                        <li class="list-group-item py-3 d-flex align-items-center">
                            <i class="bi bi-check-square-fill text-success me-3"></i> Mengenakan Pakaian Rapi & Menutup Aurat sesuai ketentuan.
                        </li>
                    </ul>
                </div>

                <div class="mb-5">
                    <h4 class="fw-bold text-danger border-start border-5 border-danger ps-3 mb-4">
                        B. LARANGAN KERAS
                    </h4>
                    
                    <ul class="list-group list-group-flush shadow-sm rounded">
                        <li class="list-group-item py-3 d-flex align-items-center">
                            <i class="bi bi-x-octagon-fill text-danger me-3"></i> <strong>DILARANG</strong> Merokok.
                        </li>
                        <li class="list-group-item py-3 d-flex align-items-center">
                            <i class="bi bi-x-octagon-fill text-danger me-3"></i> <strong>DILARANG</strong> Membawa kendaraan.
                        </li>
                        <li class="list-group-item py-3 d-flex align-items-center">
                            <i class="bi bi-x-octagon-fill text-danger me-3"></i> <strong>DILARANG</strong> Membawa HP / Alat Elektronik lainnya.
                        </li>
                        <li class="list-group-item py-3 d-flex align-items-center">
                            <i class="bi bi-x-octagon-fill text-danger me-3"></i> <strong>DILARANG</strong> Berambut Gondrong / Semir.
                        </li>
                        <li class="list-group-item py-3 d-flex align-items-center">
                            <i class="bi bi-x-octagon-fill text-danger me-3"></i> <strong>DILARANG</strong> Keluar komplek tanpa surat izin.
                        </li>
                        <li class="list-group-item py-3 d-flex align-items-center">
                            <i class="bi bi-x-octagon-fill text-danger me-3"></i> <strong>DILARANG</strong> Pulang ke rumah tanpa izin.
                        </li>
                        <li class="list-group-item py-3 d-flex align-items-center">
                            <i class="bi bi-x-octagon-fill text-danger me-3"></i> <strong>DILARANG</strong>  Bergaul bebas dengan yang bukan santri.
                        </li>
                    </ul>
                </div>

                <div class="card border-0 shadow-sm text-white" style="background-color: #424242;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold border-bottom border-secondary pb-2 mb-3"><i class="bi bi-gavel me-2"></i>TAHAPAN SANKSI</h5>
                        <p class="mb-0 small opacity-75">
                            Pelanggaran terhadap tata tertib akan dikenakan sanksi pendidikan secara bertahap:
                        </p>
                        <div class="d-flex flex-wrap gap-2 mt-3 fw-bold text-warning small">
                            <span>1. TEGURAN LISAN</span> <i class="bi bi-chevron-right text-light"></i>
                            <span>2. TEGURAN TERTULIS</span> <i class="bi bi-chevron-right text-light"></i>
                            <span>3. HUKUMAN FISIK (Ringan)</span> <i class="bi bi-chevron-right text-light"></i>
                            <span>4. PEMANGGILAN WALI</span> <i class="bi bi-chevron-right text-light"></i>
                            <span class="text-danger">5. DIKEMBALIKAN KEPADA ORANG TUA</span>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm sticky-top" style="top: 100px;"> 
                    <div class="card-header text-white fw-bold py-3" style="background-color: #b71c1c;">
                        MENU TENTANG KAMI
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="/visi-misi" class="list-group-item list-group-item-action text-secondary">
                            <i class="bi bi-chevron-right me-2"></i> Visi & Misi
                        </a>
                        <a href="/sejarah" class="list-group-item list-group-item-action text-secondary">
                            <i class="bi bi-chevron-right me-2"></i> Sejarah Singkat
                        </a>
                        <a href="/struktur" class="list-group-item list-group-item-action text-secondary">
                            <i class="bi bi-chevron-right me-2"></i> Struktur Organisasi
                        </a>
                        <a href="/peraturan" class="list-group-item list-group-item-action active fw-bold border-0" style="background-color: #d32f2f;">
                            <i class="bi bi-shield-check me-2"></i> Kewajiban & Larangan
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
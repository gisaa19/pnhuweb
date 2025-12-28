@extends('layouts.main')
@section('title', 'Detail Kantin & Koperasi')

@section('container')
    <div class="container py-5">
        <a href="/fasilitas" class="btn btn-outline-dark mb-4 rounded-pill"><i class="bi bi-arrow-left me-2"></i>Kembali ke Fasilitas</a>
        
        <div class="text-center mb-5">
            <h2 class="fw-bold text-uppercase display-6 text-success">KANTIN & KOPERASI</h2>
            <p class="text-muted lead">Menyediakan asupan gizi yang halal dan higienis serta kebutuhan harian santri.</p>
        </div>

        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 hover-card">
                    <div class="card-header text-white text-center py-3 fw-bold" style="background-color: #2E7D32;">
                        <i class="fa-solid fa-utensils me-2"></i>Kantin Putra 01
                    </div>
                    <div class="overflow-hidden position-relative">
                        <img src="https://via.placeholder.com/600x400?text=KANTIN+PUTRA+01" class="card-img-top" alt="Kantin Putra 1" style="height: 220px; object-fit: cover;">
                        <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-50 text-white p-2 text-center small">
                            Buka: 06.00 - 21.00 WIB
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold text-success border-bottom pb-2">Penyedia Makanan Pokok</h6>
                        <p class="text-muted small mb-3"><i class="bi bi-geo-alt-fill me-1 text-success"></i> Dekat Asrama Ibnu Hajar</p>
                        
                        <ul class="list-unstyled mb-0 small text-secondary">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i><strong>Sarapan:</strong> Nasi Uduk/Kuning, Lontong.</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i><strong>Prasmanan:</strong> Lauk pauk lengkap (Siang/Malam).</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Aneka Minuman Dingin & Hangat.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 hover-card">
                    <div class="card-header text-dark text-center py-3 fw-bold" style="background-color: #FFC107;">
                        <i class="fa-solid fa-store me-2"></i>Koperasi Putra 02
                    </div>
                    <div class="overflow-hidden position-relative">
                        <img src="https://via.placeholder.com/600x400?text=KOPERASI+PUTRA+02" class="card-img-top" alt="Kantin Putra 2" style="height: 220px; object-fit: cover;">
                         <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-50 text-white p-2 text-center small">
                            Buka: 07.00 - 22.00 WIB
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold text-warning border-bottom pb-2">Snack & Alat Tulis</h6>
                        <p class="text-muted small mb-3"><i class="bi bi-geo-alt-fill me-1 text-warning"></i> Dekat Gedung Madrasah</p>
                        
                        <ul class="list-unstyled mb-0 small text-secondary">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-warning me-2"></i><strong>Jajanan:</strong> Roti, Kerupuk, Gorengan.</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-warning me-2"></i><strong>ATK & Kitab:</strong> Pulpen, Buku Tulis, Kitab Kuning.</li>
                            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Perlengkapan Mandi (Sabun/Odol).</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 hover-card">
                    <div class="card-header text-white text-center py-3 fw-bold" style="background-color: #D81B60;">
                        <i class="fa-solid fa-mug-hot me-2"></i>Kantin Pusat Putri
                    </div>
                    <div class="overflow-hidden position-relative">
                        <img src="https://via.placeholder.com/600x400?text=KANTIN+PUTRI" class="card-img-top" alt="Kantin Putri" style="height: 220px; object-fit: cover;">
                         <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-50 text-white p-2 text-center small">
                            Khusus Santriwati
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold text-danger border-bottom pb-2">Serba Ada (One Stop)</h6>
                        <p class="text-muted small mb-3"><i class="bi bi-geo-alt-fill me-1 text-danger"></i> Dalam Komplek Putri</p>
                        
                        <ul class="list-unstyled mb-0 small text-secondary">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-danger me-2"></i>Menu Makan Besar & Sarapan Lengkap.</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-danger me-2"></i>Kebutuhan Kewanitaan (Pembalut, dll).</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i>Alat Tulis & Kebutuhan Harian.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        .hover-card { transition: transform 0.3s ease; }
        .hover-card:hover { transform: translateY(-5px); }
    </style>
@endsection
@extends('layouts.main')

@section('title', 'Daftar Kelas Pesantren')

@section('container')
    <div class="container-fluid py-5 bg-dark text-white mb-5">
        <div class="container">
            <h2 class="fw-bold mb-0 text-uppercase">DAFTAR KELAS PESANTREN</h2>
            <p class="text-muted mb-0">Kurikulum pendidikan pesantren berbasis Kitab Kuning.</p>
        </div>
    </div>

    <div class="container pb-5">
        
        <div class="row mb-4">
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header bg-success text-white fw-bold text-center py-3">
                        KELAS IBTIDA I
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="bi bi-book me-2 text-success"></i>Safinatunnaja I</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-success"></i>Jurumiyah I</li>
                            <li class="list-group-item"><i class="bi bi-journal-text me-2 text-success"></i>Tahsinul Qur'an</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header bg-success text-white fw-bold text-center py-3">
                        KELAS IBTIDA II
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="bi bi-book me-2 text-success"></i>Safinatunnaja II</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-success"></i>Jurumiyah II</li>
                            <li class="list-group-item"><i class="bi bi-mic me-2 text-success"></i>Tilawah / Murotal</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header bg-warning text-dark fw-bold text-center py-3">
                        KELAS WUSTHA I
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="bi bi-book me-2 text-warning"></i>Riyadhul Badi'ah</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-warning"></i>Tanqihul Qoul</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-warning"></i>Nahwu Sharaf</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mb-4">

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header bg-warning text-dark fw-bold text-center py-3">
                        KELAS WUSTHA II
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="bi bi-book me-2 text-warning"></i>Yaqulu</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-warning"></i>Imrithi</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-warning"></i>Durusul Fiqhiyah</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-warning"></i>Riyadhul Badi'ah</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header bg-primary text-white fw-bold text-center py-3">
                        KELAS ULYA I
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="bi bi-book me-2 text-primary"></i>Bajuri</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-primary"></i>I'anah At-Thalibin</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-primary"></i>Alfiyah</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-primary"></i>Rohbiyah</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header bg-primary text-white fw-bold text-center py-3">
                        KELAS ULYA II
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="bi bi-book me-2 text-primary"></i>Bajuri (Fathul Qarib)</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-primary"></i>I'anah (Fathul Mu'in)</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-primary"></i>Alfiyah</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-primary"></i>Tafsir Jalalain</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-primary"></i>Rohbiyah</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-primary"></i>Shahih Muslim</li>
                            <li class="list-group-item"><i class="bi bi-book me-2 text-primary"></i>Uqudul Lijain</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="alert alert-light border-start border-5 border-info shadow-sm p-4" role="alert">
                    <h5 class="fw-bold text-info"><i class="bi bi-info-circle-fill me-2"></i>Kajian Tambahan</h5>
                    <hr>
                    <p class="mb-0 text-muted">
                        Kajian tambahan ditentukan langsung oleh masing-masing Mudaris (Guru Pengampu) sesuai dengan kebutuhan dan perkembangan santri di setiap kelas.
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection
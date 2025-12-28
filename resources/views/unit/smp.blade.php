@extends('layouts.main')

@section('title', 'SMP IT Nurul Huda Utsmaniyyah')

@section('container')
<div class="container py-5">
    
    <div class="row mb-5 text-center">
        <div class="col-md-12">
            <span class="badge bg-primary px-3 py-2 rounded-pill mb-2 fs-6 shadow-sm">Sekolah Menengah Pertama Islam Terpadu</span>
            <h1 class="fw-bold text-dark display-5">SMP IT NURUL HUDA UTSMANIYYAH</h1>
            <p class="lead text-muted">Mewujudkan Generasi <span class="text-primary fw-bold">Beriman, Berilmu, dan Berprestasi</span>.</p>
        </div>
    </div>

    <div class="row g-5">
        
        <div class="col-lg-8">
            
            <div class="card border-0 shadow-lg mb-5 overflow-hidden rounded-3">
                <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                    <img src="{{ asset('img/smp3.jpg') }}" onerror="this.src='https://via.placeholder.com/800x400?text=GEDUNG+SMP+IT'" class="img-fluid w-100 zoom-effect" alt="Gedung SMP" style="object-fit: cover; height: 400px;">
                    <div class="overlay-icon"><i class="bi bi-zoom-in text-white display-4"></i></div>
                </div>
            </div>

            <div class="mb-5">
                <h3 class="fw-bold text-primary mb-3 border-bottom border-3 border-primary d-inline-block pb-2">Tentang Sekolah</h3>
                
                <p class="text-secondary lh-lg text-justify mb-3">
                    <strong>SMP IT NURUL HUDA UTSMANIYAH LUMBUNGSARI</strong> merupakan sekolah swasta yang berlokasi di Dusun Pasirlaja, Desa Lumbungsari, Kecamatan Lumbung, Kabupaten Ciamis, Jawa Barat. Sekolah ini memiliki luas tanah 9.570 meter persegi dan beroperasi dengan sistem pembelajaran pagi selama 6 hari.
                </p>
                
                <p class="text-secondary lh-lg text-justify mb-3">
                    Berdiri sejak tahun 2009 berdasarkan SK Pendirian Nomor A/16/YPP-NHU/2009 yang dikeluarkan pada tanggal 14 Mei 2009, sekolah ini mendapatkan izin operasional melalui SK Nomor 421.2/2271/-DISDIK/2009 pada tanggal 3 Agustus 2009. Dalam perjalanannya, SMP IT NURUL HUDA UTSMANIYAH LUMBUNGSARI telah mendapatkan akreditasi B berdasarkan SK Nomor 763/BAN-SM/SK/2019 yang dikeluarkan pada tanggal 9 September 2019.
                </p>

                <p class="text-secondary lh-lg text-justify mb-3">
                    Sebagai lembaga pendidikan yang berbasis Islam, kami berkomitmen untuk mencetak generasi muda yang unggul dan berakhlak mulia. Kurikulum yang diterapkan memadukan nilai-nilai Islam dengan materi pelajaran umum. Selain itu, sekolah ini juga aktif dalam kegiatan ekstrakurikuler yang bertujuan untuk mengembangkan potensi siswa secara holistik.
                </p>

                <p class="text-secondary lh-lg text-justify mb-4">
                    SMP IT NURUL HUDA UTSMANIYAH LUMBUNGSARI memiliki akses internet yang memadai untuk menunjang proses belajar mengajar serta didukung oleh sumber listrik PLN. Fasilitas yang tersedia di sekolah antara lain ruang kelas, laboratorium, perpustakaan, lapangan olahraga, dan ruang guru. Bagi calon siswa yang ingin mendapatkan pendidikan berkualitas yang berbasis Islam, SMP IT NURUL HUDA UTSMANIYAH LUMBUNGSARI bisa menjadi pilihan yang tepat.
                </p>

                <div class="alert alert-primary border-0 shadow-sm d-flex align-items-center rounded-3" role="alert">
                    <i class="bi bi-info-circle-fill fs-4 me-3"></i>
                    <div>
                        Dengan sistem <em>Boarding School</em>, kami menciptakan lingkungan belajar yang kondusif selama 24 jam untuk memaksimalkan potensi akademik dan spiritual siswa.
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-5 overflow-hidden rounded-3">
                <div class="card-header bg-primary text-white py-3">
                    <h4 class="fw-bold m-0"><i class="bi bi-compass-fill me-2"></i>VISI, MISI, DAN TUJUAN</h4>
                </div>
                <div class="card-body p-4 bg-light">
                    
                    <div class="mb-4 text-center">
                        <h5 class="fw-bold text-dark text-uppercase letter-spacing-1">Visi Sekolah</h5>
                        <h3 class="fw-bold text-primary fst-italic display-6 my-3">“Beriman, Berilmu, dan Berprestasi”</h3>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold text-dark border-start border-4 border-warning ps-2 mb-3">Indikator Visi:</h6>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="bg-white p-3 rounded shadow-sm h-100 border-top border-3 border-success">
                                    <strong class="text-success d-block mb-2"><i class="bi bi-heart-fill me-1"></i> Beriman</strong>
                                    <ul class="small text-secondary mb-0 ps-3">
                                        <li>Berakhlakul karimah</li>
                                        <li>Pembinaan sholat berjamaah</li>
                                        <li>Pembinaan baca tulis Al-Quran</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-white p-3 rounded shadow-sm h-100 border-top border-3 border-info">
                                    <strong class="text-info d-block mb-2"><i class="bi bi-lightbulb-fill me-1"></i> Berilmu</strong>
                                    <ul class="small text-secondary mb-0 ps-3">
                                        <li>Meningkatkan nilai KKM</li>
                                        <li>Meningkatkan rata-rata nilai Ulangan</li>
                                        <li>Meningkatkan rata-rata nilai Ujian</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-white p-3 rounded shadow-sm h-100 border-top border-3 border-warning">
                                    <strong class="text-warning d-block mb-2"><i class="bi bi-trophy-fill me-1"></i> Berprestasi</strong>
                                    <ul class="small text-secondary mb-0 ps-3">
                                        <li>Juara lomba keagamaan, sains, olahraga & seni</li>
                                        <li>Mampu bersaing dalam pendidikan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold text-dark border-start border-4 border-primary ps-2 mb-3">Misi Sekolah:</h6>
                        <ol class="list-group list-group-numbered list-group-flush small text-secondary">
                            <li class="list-group-item bg-transparent">Membina akhlak & budi pekerti luhur dilandasi keimanan & ketakwaan.</li>
                            <li class="list-group-item bg-transparent">Menumbuhkan sikap disiplin & tanggung jawab warga sekolah.</li>
                            <li class="list-group-item bg-transparent">Mendorong sikap terpuji, berkarakter mulia, terbuka, & religius.</li>
                            <li class="list-group-item bg-transparent">Mengembangkan sistem pembelajaran dinamis sesuai ragam kecerdasan.</li>
                            <li class="list-group-item bg-transparent">Mewujudkan peningkatan prestasi siswa/lulusan.</li>
                            <li class="list-group-item bg-transparent">Meningkatkan mutu pendidikan & bekal keterampilan IPTEK.</li>
                        </ol>
                    </div>

                    <div>
                        <h6 class="fw-bold text-dark border-start border-4 border-danger ps-2 mb-3">Tujuan Sekolah:</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="small text-secondary ps-3 mb-0" style="list-style-type: disc;">
                                    <li class="mb-2">Peserta didik mampu beribadah rutin & khusuk.</li>
                                    <li class="mb-2">Terbinanya akhlak mulia warga sekolah.</li>
                                    <li class="mb-2">Terlaksananya program Al-Quran (Tadarus/BTQ).</li>
                                    <li class="mb-2">Kelulusan 100% dengan nilai rata-rata min. 75.</li>
                                    <li class="mb-2">90% lulusan diterima di SMA/SMK/MA favorit.</li>
                                    <li class="mb-2">Juara kompetisi (OSN, O2SN, FLS2N) berbagai tingkat.</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="small text-secondary ps-3 mb-0" style="list-style-type: disc;">
                                    <li class="mb-2">Terlaksananya program 7K (Kondusifitas Sekolah).</li>
                                    <li class="mb-2">Budaya 5S (Senyum, Sapa, Salam, Sopan, Santun).</li>
                                    <li class="mb-2">Tersedianya media pembelajaran standar.</li>
                                    <li class="mb-2">Kerja sama harmonis antar warga sekolah & lingkungan.</li>
                                    <li class="mb-2">Pembelajaran PAIKEM (Aktif, Inovatif, Kreatif, Efektif, Menyenangkan).</li>
                                    <li class="mb-2">Lingkungan sekolah bersih, indah, tertib, & nyaman.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mb-5">
                <h3 class="fw-bold text-primary mb-4 border-bottom border-3 border-primary d-inline-block pb-2">Program Unggulan</h3>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-card p-3 bg-light">
                            <div class="d-flex align-items-center">
                                <div class="bg-white p-3 rounded-circle shadow-sm me-3">
                                    <i class="bi bi-book-half text-success fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-dark mb-1">Tahfidz Al-Qur'an</h6>
                                    <p class="small text-muted mb-0">Program hafalan & tahsin intensif.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-card p-3 bg-light">
                            <div class="d-flex align-items-center">
                                <div class="bg-white p-3 rounded-circle shadow-sm me-3">
                                    <i class="bi bi-laptop text-primary fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-dark mb-1">Literasi Digital</h6>
                                    <p class="small text-muted mb-0">Penguasaan IT dasar sejak dini.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-card p-3 bg-light">
                            <div class="d-flex align-items-center">
                                <div class="bg-white p-3 rounded-circle shadow-sm me-3">
                                    <i class="bi bi-translate text-danger fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-dark mb-1">Bahasa Asing</h6>
                                    <p class="small text-muted mb-0">Arab & Inggris aktif harian.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-card p-3 bg-light">
                            <div class="d-flex align-items-center">
                                <div class="bg-white p-3 rounded-circle shadow-sm me-3">
                                    <i class="bi bi-journal-text text-warning fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-dark mb-1">Kitab Kuning</h6>
                                    <p class="small text-muted mb-0">Kajian Fiqh & Aqidah dasar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="position-sticky" style="top: 100px;">
                
                <div class="card border-0 shadow mb-4">
                    <div class="card-header bg-warning text-dark fw-bold text-center py-3">
                        <i class="bi bi-pencil-square me-2"></i>PENDAFTARAN SISWA BARU
                    </div>
                    <div class="card-body p-4 bg-white">
                        <p class="small text-muted text-center mb-4">Bergabunglah bersama kami untuk masa depan yang gemilang dunia dan akhirat.</p>
                        
                        <div class="d-grid gap-2">
                            <a href="/psb" class="btn btn-primary fw-bold py-2 shadow-sm">
                                <i class="bi bi-file-earmark-text me-2"></i> DAFTAR ONLINE
                            </a>
                            <a href="https://wa.me/6281370251606" class="btn btn-outline-success fw-bold py-2">
                                <i class="bi bi-whatsapp me-2"></i> Chat Panitia
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header text-white fw-bold py-3" style="background-color: #0d47a1;">
                        <i class="bi bi-building me-2"></i> Fasilitas SMP
                    </div>
                    <div class="card-body p-2 bg-light">
                        <p class="small text-muted mb-2 text-center">Klik foto untuk memperbesar:</p>
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                        <img src="{{ asset('img/smpr.jpg') }}" onerror="this.src='https://via.placeholder.com/400x300?text=Ruang+Kelas'" class="card-img-top zoom-effect" alt="Ruang Belajar" style="height: 100px; object-fit: cover;">
                                    </div>
                                    <div class="card-body p-2 text-center bg-white">
                                        <small class="fw-bold d-block text-dark"><i class="bi bi-easel me-1 text-primary"></i> R. Belajar</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                        <img src="{{ asset('img/kantorsmp.jpg') }}" onerror="this.src='https://via.placeholder.com/400x300?text=Kantor+Guru'" class="card-img-top zoom-effect" alt="Kantor Guru" style="height: 100px; object-fit: cover;">
                                    </div>
                                    <div class="card-body p-2 text-center bg-white">
                                        <small class="fw-bold d-block text-dark"><i class="bi bi-briefcase me-1 text-primary"></i> Kantor</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                        <img src="{{ asset('img/musmp.jpg') }}" onerror="this.src='https://via.placeholder.com/400x300?text=Mushola'" class="card-img-top zoom-effect" alt="Mushola" style="height: 100px; object-fit: cover;">
                                    </div>
                                    <div class="card-body p-2 text-center bg-white">
                                        <small class="fw-bold d-block text-dark"><i class="bi bi-moon-stars me-1 text-primary"></i> Mushola</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                                    <div class="position-relative cursor-pointer hover-zoom-container" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="showImage(this)">
                                        <img src="{{ asset('img/wcsmp.jpg') }}" onerror="this.src='https://via.placeholder.com/400x300?text=WC+Siswa'" class="card-img-top zoom-effect" alt="WC Siswa" style="height: 100px; object-fit: cover;">
                                    </div>
                                    <div class="card-body p-2 text-center bg-white">
                                        <small class="fw-bold d-block text-dark"><i class="bi bi-droplet me-1 text-primary"></i> WC Siswa</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-2">
                            <small class="text-muted fst-italic">Dan fasilitas penunjang lainnya.</small>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-white fw-bold py-3 bg-success">
                        <i class="bi bi-trophy me-2"></i> Ekstrakurikuler
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-light text-dark border">Pramuka</span>
                            <span class="badge bg-light text-dark border">Paskibra</span>
                            <span class="badge bg-light text-dark border">PMR</span>
                            <span class="badge bg-light text-dark border">Hadroh</span>
                            <span class="badge bg-light text-dark border">Silat</span>
                            <span class="badge bg-light text-dark border">Futsal</span>
                            <span class="badge bg-light text-dark border">Kaligrafi</span>
                            <span class="badge bg-light text-dark border">English Club</span>
                        </div>
                    </div>
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
    
    .hover-zoom-container { overflow: hidden; }
    
    .zoom-effect { transition: transform 0.5s ease; }
    .hover-zoom-container:hover .zoom-effect { transform: scale(1.1); filter: brightness(0.9); }

    .overlay-icon {
        position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
        opacity: 0; transition: opacity 0.3s ease; z-index: 2; pointer-events: none;
    }
    .hover-zoom-container:hover .overlay-icon { opacity: 1; }
    
    .letter-spacing-1 { letter-spacing: 1px; }
    .text-justify { text-align: justify; }
    
    .hover-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .hover-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
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
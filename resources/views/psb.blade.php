@extends('layouts.main')

@section('title', 'Penerimaan Santri Baru')

@section('container')
    <div class="p-5 text-center text-white position-relative" style="background: linear-gradient(to bottom right, rgba(15, 81, 50, 0.9), rgba(25, 135, 84, 0.8)), url('https://via.placeholder.com/1200x400?text=PSB+NURUL+HUDA+2025'); background-size: cover; background-position: center;">
        <div class="py-4">
            <span class="badge bg-warning text-dark mb-3 px-3 py-2 fw-bold shadow">DIBUKA</span>
            <h1 class="display-4 fw-bold mb-2">PENERIMAAN SANTRI BARU</h1>
            <h3 class="fw-light text-warning">Tahun Ajaran 2025/2026</h3>
            <p class="lead mt-3 text-light opacity-75">Mari bergabung mencetak generasi yang "Berhati Masjidil Haram, Berotak Jerman".</p>
            <a href="#form-daftar" class="btn btn-warning fw-bold mt-4 px-5 py-3 rounded-pill text-dark shadow hover-scale">
                <i class="bi bi-pencil-square me-2"></i>Daftar Online Sekarang
            </a>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-5">
            
            <div class="col-lg-5 order-2 order-lg-1">
                
                <div class="mb-5">
                    <h4 class="fw-bold d-inline-block border-bottom border-4 border-success pb-2 mb-4 text-dark">
                        <i class="bi bi-calendar-check-fill text-success me-2"></i>Waktu Pendaftaran
                    </h4>
                    <div class="card border-success border-start border-4 shadow-sm h-100">
                        <div class="card-body">
                            <h6 class="fw-bold text-success">Waktu Pendaftaran dibuka secara fleksibel dan tidak terikat jadwal tertentu. Calon Peserta dapat melakukan pendaftaran kapan saja.</h6>
                            <p class="mb-1 small"><i class="bi bi-clock me-2"></i>0 - 0</p>
                            <hr class="my-2 dashed">
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="fw-bold d-inline-block border-bottom border-4 border-success pb-2 mb-4 text-dark">
                        <i class="bi bi-file-earmark-check-fill text-success me-2"></i>Syarat Berkas
                    </h4>
                    <div class="alert alert-warning small border-0 shadow-sm">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        <strong>CATATAN:</strong> Berkas fisik difoto/scan dan dikirimkan via WhatsApp setelah mengisi formulir di samping.
                    </div>
                    <ul class="list-group list-group-flush shadow-sm rounded">
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Pas Foto 3x4 (2 Lembar)</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Fotocopy Ijazah / SKL (2 Lembar)</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Fotocopy Akta Kelahiran (2 Lembar)</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Fotocopy KK & KTP Ortu (2 Lembar)</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Fotocopy KIS/KIP (Jika ada)</li>
                    </ul>
                </div>

                <div class="mb-5">
                    <h4 class="fw-bold d-inline-block border-bottom border-4 border-success pb-2 mb-4 text-dark">
                        <i class="bi bi-wallet2 text-success me-2"></i>Estimasi Biaya
                    </h4>
                    <div class="table-responsive shadow-sm rounded">
                        <table class="table table-striped table-hover mb-0 font-monospace small">
                            <thead class="bg-success text-white">
                                <tr>
                                    <th>Uraian</th>
                                    <th class="text-end">Putra</th>
                                    <th class="text-end">Putri</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Pendaftaran</td>
                                    <td class="text-end">belum update</td>
                                    <td class="text-end">belum update</td>
                                </tr>
                                <tr>
                                    <td>Belum ada informasi...</td>
                                    <td class="text-end">belum update</td>
                                    <td class="text-end">belum update</td>
                                </tr>
                                <tr>
                                    <td>Belum ada informasi...</td>
                                    <td class="text-end">belum update</td>
                                    <td class="text-end">belum update</td>
                                </tr>
                                <tr class="fw-bold table-success border-top border-dark">
                                    <td>Belum ada informasi...</td>
                                    <td class="text-end">belum update</td>
                                    <td class="text-end">belum update</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <small class="text-muted fst-italic mt-2 d-block">* Biaya Infaq Bangunan dapat diangsur selama 3 bulan.</small>
                </div>

                <div class="card bg-light border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h6 class="fw-bold text-dark"><i class="bi bi-credit-card-2-front me-2"></i>Rekening Pembayaran</h6>
                        <p class="small text-muted mb-2">Pembayaran formulir dapat ditransfer ke:</p>
                        <div class="d-flex align-items-center bg-white p-2 rounded border">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/68/BANK_BRI_logo.svg" alt="BRI" height="30" class="me-3">
                            <div>
                                <h6 class="mb-0 fw-bold">4046-01-010989-53-7</h6>
                                <small>a.n DEDE RONI</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-grid">
                    <a href="https://wa.me/6281370251606" class="btn btn-outline-success btn-sm"><i class="bi bi-whatsapp me-2"></i>Butuh Bantuan? Chat Panitia</a>
                </div>

            </div>

            <div class="col-lg-7 order-1 order-lg-2" id="form-daftar">
                <div class="card border-0 shadow-lg overflow-hidden">
                    <div class="card-header text-white p-4 text-center" style="background-color: #0f5132;"> 
                        <h3 class="fw-bold mb-1"><i class="bi bi-pencil-square me-2"></i>Formulir Pendaftaran</h3>
                        <p class="mb-0 text-white-50">Isi data dengan benar sesuai dokumen kependudukan.</p>
                    </div>
                    <div class="card-body p-4 bg-white">
                        
                        <form onsubmit="daftarOnlineWA(event)">
                            
                            <div class="mb-4">
                                <label class="form-label fw-bold text-success">Pilihan Jenjang Pendidikan <span class="text-danger">*</span></label>
                                <select id="jenjang" class="form-select border-success" required>
                                    <option value="" selected disabled>-- Pilih Sekolah Tujuan --</option>
                                    <option value="PESANTREN">Pesantren</option>
                                    <option value="SMP IT Nurul Huda">SMP IT Nurul Huda Utsmaniyyah</option>
                                    <option value="SMK Ma'arif Nurul Huda">SMK Ma'arif Nurul Huda</option>
                                    <option value="TK Nurul Huda">TK Nurul Huda</option>
                                </select>
                            </div>

                            <h5 class="text-dark fw-bold mb-3 border-bottom pb-2">A. Identitas Calon Santri</h5>
                            
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Nama Lengkap</label>
                                <input type="text" id="nama" class="form-control" placeholder="Sesuai Ijazah/Akte" required>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small">Jenis Kelamin</label>
                                    <select id="jk" class="form-select" required>
                                        <option value="" selected disabled>Pilih...</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small">NISN</label>
                                    <input type="number" id="nisn" class="form-control" placeholder="Nomor NISN">
                                </div>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small">Tempat Lahir</label>
                                    <input type="text" id="tmp_lahir" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small">Tanggal Lahir</label>
                                    <input type="date" id="tgl_lahir" class="form-control" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold small">Alamat Lengkap</label>
                                <textarea id="alamat_santri" class="form-control" rows="2" placeholder="Jalan, RT/RW, Desa/Kelurahan, Kecamatan, Kota/Kab" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold small">Asal Sekolah</label>
                                <input type="text" id="asal_sekolah" class="form-control" placeholder="Nama SD/MI/SMP Asal" required>
                            </div>

                             <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small">Anak ke-</label>
                                    <input type="number" id="anak_ke" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small">Cita-cita</label>
                                    <input type="text" id="cita_cita" class="form-control">
                                </div>
                            </div>

                            <h5 class="text-dark fw-bold mb-3 border-bottom pb-2 mt-4">B. Identitas Orang Tua / Wali</h5>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small">Nama Ayah Kandung</label>
                                    <input type="text" id="nama_ayah" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small">Pekerjaan Ayah</label>
                                    <input type="text" id="pekerjaan_ayah" class="form-control">
                                </div>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small">Nama Ibu Kandung</label>
                                    <input type="text" id="nama_ibu" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small">Pekerjaan Ibu</label>
                                    <input type="text" id="pekerjaan_ibu" class="form-control">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold small">Alamat Orang Tua</label>
                                <textarea id="alamat_ortu" class="form-control" rows="2" placeholder="Kosongkan jika sama dengan alamat santri"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold small">No. HP / WhatsApp Aktif</label>
                                <input type="number" id="no_hp" class="form-control" placeholder="Contoh: 0812xxxx" required>
                            </div>

                            <div class="alert alert-success bg-opacity-10 border-success mt-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkBerkas" required>
                                    <label class="form-check-label small fw-bold text-dark" for="checkBerkas">
                                        Saya menyatakan data di atas benar dan bersedia mengirimkan berkas fisik melalui WhatsApp setelah ini.
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-warning btn-lg fw-bold shadow-sm text-dark hover-scale">
                                    <i class="bi bi-whatsapp me-2"></i> KIRIM FORMULIR VIA WA
                                </button>
                                <p class="text-center small text-muted mt-2">Anda akan diarahkan otomatis ke WhatsApp Admin PSB.</p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .hover-scale { transition: transform 0.2s; }
        .hover-scale:hover { transform: scale(1.02); }
        .dashed { border-top: 1px dashed #bbb; }
    </style>

    <script>
        function daftarOnlineWA(event) {
            event.preventDefault();

            // 1. Ambil Data
            var jenjang = document.getElementById('jenjang').value; 
            var nama = document.getElementById('nama').value;
            var jk = document.getElementById('jk').value;
            var nisn = document.getElementById('nisn').value || '-';
            var tmp_lahir = document.getElementById('tmp_lahir').value;
            var tgl_lahir = document.getElementById('tgl_lahir').value;
            var alamat_santri = document.getElementById('alamat_santri').value;
            var asal_sekolah = document.getElementById('asal_sekolah').value;
            var anak_ke = document.getElementById('anak_ke').value || '-';
            var cita_cita = document.getElementById('cita_cita').value || '-';
            
            var nama_ayah = document.getElementById('nama_ayah').value;
            var pekerjaan_ayah = document.getElementById('pekerjaan_ayah').value || '-';
            var nama_ibu = document.getElementById('nama_ibu').value;
            var pekerjaan_ibu = document.getElementById('pekerjaan_ibu').value || '-';
            var alamat_ortu = document.getElementById('alamat_ortu').value || 'Sama dengan Santri';
            var no_hp = document.getElementById('no_hp').value;

            var nomorAdmin = '6281370251606'; 

            // 2. Susun Pesan
            var pesan = "*FORMULIR PENDAFTARAN SANTRI BARU (ONLINE)*%0A" +
                        "----------------------------------%0A" +
                        "*JENJANG TUJUAN: " + jenjang.toUpperCase() + "*%0A" + 
                        "----------------------------------%0A" +
                        "*A. DATA CALON SANTRI*%0A" +
                        "Nama: " + nama + "%0A" +
                        "JK: " + jk + "%0A" +
                        "NISN: " + nisn + "%0A" +
                        "TTL: " + tmp_lahir + ", " + tgl_lahir + "%0A" +
                        "Alamat: " + alamat_santri + "%0A" +
                        "Asal Sekolah: " + asal_sekolah + "%0A" +
                        "Anak ke: " + anak_ke + "%0A" +
                        "Cita-cita: " + cita_cita + "%0A%0A" +
                        
                        "*B. DATA ORANG TUA*%0A" +
                        "Ayah: " + nama_ayah + " (" + pekerjaan_ayah + ")%0A" +
                        "Ibu: " + nama_ibu + " (" + pekerjaan_ibu + ")%0A" +
                        "Alamat Ortu: " + alamat_ortu + "%0A" +
                        "No. HP: " + no_hp + "%0A%0A" +
                        
                        "*C. KELENGKAPAN BERKAS*%0A" +
                        "Saya sudah mengisi data di atas. Mohon dicek dan info pembayaran selanjutnya.%0A%0A" +
                        "Terima kasih.";

            // 3. Kirim
            window.open('https://wa.me/' + nomorAdmin + '?text=' + pesan, '_blank');
        }
    </script>
@endsection
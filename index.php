<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Forpena</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>


<body>

    <style>
        .animated-logo {
            width: 85px;
            height: 95px;
            transition: transform 0.3s ease;
        }

        .animated-logo:hover {
            transform: scale(1.2) rotate(10deg);
        }

        .title-gradient {
            font-weight: bold;
            text-decoration: underline;
            background: linear-gradient(45deg, #4CAF50, #1E88E5);
            -webkit-background-clip: text;
            color: transparent;
        }
    </style>
    </head>

    <body>

        <div class="container mt-5">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="font-weight-bold text-decoration-underline">
                    FORPENA || <span class="title-gradient">PENGADILAN NEGERI PONOROGO</span>
                </h2>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Logo di kanan -->
                <a href="#">
                    <img src="logo/logo.png" class="animated-logo" alt="Forpena Logo">
                </a>
            </div>

            <div class="alert alert-info mt-4" role="alert">
                Forpena merupakan Aplikasi yang dibuat untuk memudahkan masyarakat dalam menyusun permohonan perubahan nama untuk diri sendiri maupun untuk nama anak.
                Melalui Aplikasi ini, masyarakat akan dipandu dalam pembuatan permohonan perubahan nama di Pengadilan Negeri Ponorogo.
            </div>

            <div class="form-group">
                <label for="jenis-permohonan">Pilih Jenis Permohonan Untuk Anak Atau Untuk Diri Sendiri</label>
                <select class="form-control" id="jenis-permohonan" onchange="showSteps(this.value); disableJenisPermohonan()">
                    <option value="">-- Pilih Di Sini --</option>
                    <option value="diriSendiri">Permohonan Perubahan Nama untuk Diri Sendiri</option>
                    <option value="anak">Permohonan Perubahan Nama untuk Anak</option>
                </select>
            </div>

            <div id="diriSendiri-steps" style="display:none;">
                <!-- Slide 1: Persyaratan -->
                <div class="step-content" id="step1-diriSendiri">
                    <h4 class="mb-4">Persyaratan</h4>
                    <p class="mb-4">Pastikan semua persyaratan di bawah ini telah dipenuhi:</p>
                    <!-- Checklist Persyaratan -->
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="ktp-diriSendiri" required>
                        <label class="form-check-label" for="ktp-diriSendiri">KTP</label>
                        <small class="form-text text-muted">Silakan centang jika Anda memiliki KTP yang valid.</small>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="kk-diriSendiri" required>
                        <label class="form-check-label" for="kk-diriSendiri">KK</label>
                        <small class="form-text text-muted">Silakan centang jika Anda memiliki KK yang valid.</small>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="akta-diriSendiri" required>
                        <label class="form-check-label" for="akta-diriSendiri">Akta Kelahiran</label>
                        <small class="form-text text-muted">Silakan centang jika Anda memiliki Akta Kelahiran yang valid.</small>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="buku-nikah-diriSendiri" required>
                        <label class="form-check-label" for="buku-nikah-diriSendiri">Buku Nikah/Akta Nikah</label>
                        <small class="form-text text-muted">Silakan centang jika Anda memiliki Buku Nikah/Akta Nikah yang valid.</small>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="surat-pernyataan-diriSendiri" required>
                        <label class="form-check-label" for="surat-pernyataan-diriSendiri">Surat Pernyataan perubahan nama diketahui kepala desa</label>
                        <small class="form-text text-muted">Silakan centang jika Anda memiliki Surat Pernyataan yang sah.</small>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="surat-domisili-diriSendiri" required>
                        <label class="form-check-label" for="surat-domisili-diriSendiri">Surat keterangan domisili</label>
                        <small class="form-text text-muted">Silakan centang jika Anda memiliki Surat Keterangan Domisili yang valid.</small>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="surat-permohonan-diriSendiri" required>
                        <label class="form-check-label" for="surat-permohonan-diriSendiri">Surat Permohonan</label>
                        <small class="form-text text-muted">Silakan centang jika Anda memiliki Surat Permohonan yang lengkap.</small>
                    </div>

                    <a href="index.php" class="btn btn-secondary mt-4 ml-2">Halaman Utama</a>

                    <button class="btn btn-primary mt-4" onclick="validateAndNext('step1-diriSendiri', 'step2-diriSendiri')">Next</button>

                </div>
            </div>

            <style>
                /* Perbesar ukuran checkbox dan tambahkan efek hover */
                .form-check-input {
                    transform: scale(1.2);
                    /* Membuat checkbox lebih besar */
                    border: 2px solid #007bff;
                    /* Menambahkan border agar lebih terlihat */
                }

                .form-check-input:focus {
                    outline: none;
                    /* Menghilangkan outline default saat fokus */
                    border-color: #0056b3;
                    /* Ubah border saat fokus */
                }

                .form-check-label {
                    font-size: 1rem;
                    /* Ukuran font normal, tidak tebal */
                    color: #333;
                    /* Memberikan warna teks label */
                }

                .form-check-input:checked {
                    background-color: #007bff;
                    /* Menambahkan warna latar belakang saat centang */
                    border-color: #007bff;
                    /* Mengubah border saat centang */
                }
            </style>

            <!-- Slide 2: Identitas Pemohon -->
            <div class="step-content" id="step2-diriSendiri" style="display:none;">
                <h4>Identitas Pemohon</h4>
                <div class="mb-3"><label class="form-label">Nama</label><input type="text" class="form-control" id="nama-diriSendiri" required>
                    <small class="form-text text-muted">Masukkan nama lengkap sesuai dengan identitas KTP (tanpa gelar).</small>
                </div>


                <div class="mb-3"><label class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenis-kelamin-diriSendiri" required>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <small class="form-text text-muted">Masukkan jenis kelamin sesuai dengan identitas KTP.</small>
                </div>


                <div class="mb-3"><label class="form-label">Tempat Lahir</label><input type="text" class="form-control" id="tempat-lahir-diriSendiri" required>
                    <small class="form-text text-muted">Masukkan tempat lahir sesuai dengan identitas KTP.</small>
                </div>


                <div class="mb-3"><label class="form-label">Tanggal Lahir</label><input type="date" class="form-control" id="tanggal-lahir-diriSendiri" required>
                    <small class="form-text text-muted">Masukkan tanggal lahir sesuai dengan identitas KTP.</small>
                </div>


                <div class="mb-3"><label class="form-label">Alamat Sesuai KTP</label><input type="text" class="form-control" id="alamat-diriSendiri" required>
                <small class="form-text text-muted">Masukkan alamat sesuai KTP (Contoh : Dukuh Mangga, RT 01 / RW 01, Desa/Kelurahan Slahung, Kecamatan Slahung, Kabupaten Ponorogo)</small>
                </div>


                <div class="mb-3"><label class="form-label">Pekerjaan</label><input type="text" class="form-control" id="pekerjaan-diriSendiri" required>
                    <small class="form-text text-muted">Masukkan pekerjaan sesuai dengan identitas KTP.</small>
                </div>


                <div class="mb-3"><label class="form-label">Pendidikan</label><input type="text" class="form-control" id="pendidikan-diriSendiri" required>
                <small class="form-text text-muted">Masukkan pendidikan terakir (Contoh SD, SMP, SMA, D3, Strata 1)</small>
                </div>


                <div class="mb-3"><label class="form-label">Agama</label>
                    <select class="form-select" id="agama-diriSendiri" required>
                        <option value="">-- Pilih Agama --</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                    <small class="form-text text-muted">Masukkan agama sesuai dengan identitas KTP.</small>
                </div>
                <div class="d-flex justify-content-between mt-3">

                    <button class="btn btn-secondary mt-4" onclick="showPrevious('step2-diriSendiri', 'step1-diriSendiri')">Previous</button>
                    <button class="btn btn-primary mt-4" onclick="validateAndNext('step2-diriSendiri', 'step3-diriSendiri')">Next</button>
                </div>


            </div>

            <!-- Slide 3: Data Kelahiran diri -->
            <div class="step-content" id="step3-diriSendiri" style="display:none;">
                <h4>Data Kelahiran</h4>
                <div class="mb-3"><label class="form-label">Nama pada Akta Kelahiran</label><input type="text" class="form-control" id="nama-akta-kelahiran-diriSendiri" required>
                    <small class="form-text text-muted">Masukkan nama lengkap sesuai dengan akta kelahiran.</small>
                </div>
                <div class="mb-3"><label class="form-label">Nomor Akta Kelahiran</label><input type="text" class="form-control" id="no-akta-diriSendiri" required>
                    <small class="form-text text-muted">Masukkan nomor akta kelahiran.</small>
                </div>
                <div class="mb-3"><label class="form-label">Tanggal Akta Kelahiran</label><input type="date" class="form-control" id="tgl-akta-diriSendiri" required>
                    <small class="form-text text-muted">Masukkan tanggal lahir sesuai dengan akta kelahiran.</small>
                </div>
                <div class="mb-3"><label class="form-label">Nama Ayah</label><input type="text" class="form-control" id="nama-ayah-diriSendiri" required>
                    <small class="form-text text-muted">Masukkan nama ayah sesuai dengan akta kelahiran.</small>
                </div>
                <div class="mb-3"><label class="form-label">Nama Ibu</label><input type="text" class="form-control" id="nama-ibu-diriSendiri" required>
                    <small class="form-text text-muted">Masukkan nama ibu sesuai dengan akta kelahiran.</small>
                </div>
                <div class="mb-3"><label class="form-label">Kabupaten/Kota tempat dikeluarkan Akta Kelahiran</label><input type="text" class="form-control" id="kota-akta-diriSendiri" required>
                    <small class="form-text text-muted">Masukkan kabupaten/kota tempat dikeluarkan akta kelahiran.</small>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <!-- Tombol Previous -->
                    <button class="btn btn-secondary" onclick="showPrevious('step3-diriSendiri', 'step2-diriSendiri')">Previous</button>

                    <!-- Tombol Next -->
                    <button class="btn btn-primary" onclick="validateAndNext('step3-diriSendiri', 'step4-diriSendiri')">Next</button>
                </div>

            </div>

            <!-- Slide 4: Data Perubahan -->
            <div class="step-content" id="step4-diriSendiri" style="display:none;">
                <h4>Permohonan Perubahan Nama</h4>
                <div class="mb-3"><label class="form-label">Nama Baru</label><input type="text" class="form-control" id="nama-baru-diriSendiri" required>
                    <small class="form-text text-muted">Masukkan nama yang baru.</small>
                </div>
                <div class="mb-3"><label class="form-label">Alasan Perubahan Nama</label><textarea class="form-control" id="alasan-perubahan-diriSendiri" required></textarea>
                    <small class="form-text text-muted">Masukkan alasan perubahan nama (contoh alasan : alasan perubahan nama karena sering mengalami sakit-sakitan, perubahan nama karena nama baru memiliki arti yang baik dan membawa keberkahan/keberuntungan, dll.</small>

                </div>
                <div class="d-flex justify-content-between mt-3">
                    <button class="btn btn-secondary " onclick="showPrevious('step4-diriSendiri', 'step3-diriSendiri')">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="showConfirmation('diri')">Kirim Permohonan Diri Sendiri</button>

                </div>
            </div>











            <!-- Slides untuk Permohonan Anak -->
            <div id="anak-steps" style="display:none;">
                <!-- Slide 1: Persyaratan -->
                <div class="step-content" id="step1-anak">
                    <h4>Persyaratan</h4>
                    <p>Pastikan semua persyaratan di bawah ini telah dipenuhi:</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="ktp-anak" required>
                        <label class="form-check-label" for="ktp-anak">KTP</label>
                        <small class="form-text text-muted">Silakan centang jika Anda memiliki KTP yang valid.</small>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kk-anak" required>
                        <label class="form-check-label" for="kk-anak">KK</label>
                        <small class="form-text text-muted">Silakan centang jika Anda memiliki KK yang valid.</small>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="akta-anak" required>
                        <label class="form-check-label" for="akta-anak">Akta Kelahiran anak</label>
                        <small class="form-text text-muted">Silakan centang jika Anda memiliki Akta Kelahiran yang valid.</small>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="buku-nikah-anak" required>
                        <label class="form-check-label" for="buku-nikah-anak">Buku Nikah/Akta Nikah</label>
                        <small class="form-text text-muted">Silakan centang jika Anda memiliki Buku Nikah.</small>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="surat-pernyataan-anak" required>
                        <label class="form-check-label" for="surat-pernyataan-anak">Surat Pernyataan perubahan nama diketahui kepala desa</label>
                        <small class="form-text text-muted">Wajib dicentang</small>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="surat-domisili-anak" required>
                        <label class="form-check-label" for="surat-domisili-anak">Surat keterangan domisili</label>
                        <small class="form-text text-muted">Wajib dicentang</small>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="surat-permohonan-anak" required>
                        <label class="form-check-label" for="surat-permohonan-anak">Surat Permohonan</label>
                        <small class="form-text text-muted">Wajib dicentang</small>
                    </div>

                    <a href="index.php" class="btn btn-secondary mt-4 ml-2">Halaman Utama</a>
                    <button class="btn btn-primary mt-4" onclick="validateAndNext('step1-anak', 'step2-anak')">Next</button>


                </div>

                <!-- Slide 2: Identitas Pemohon -->
                <div class="step-content" id="step2-anak" style="display:none;">
                    <h4>Identitas Pemohon</h4>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama-anak-anak" required>
                        <small class="form-text text-muted">Masukkan nama lengkap pemohon sesuai KTP (Tanpa Gelar)</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="jenis-kelamin-anak-anak" required>
                            <option value="">-- Pilih --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <small class="form-text text-muted">Pilih jenis kelamin pemohon</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat-lahir-anak-anak" required>
                        <small class="form-text text-muted">Masukkan tempat lahir Sesuai KTP</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal-lahir-anak-anak" required>
                        <small class="form-text text-muted">Masukkan tanggal lahir Sesuai KTP</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Sesuai KTP</label>
                        <input type="text" class="form-control" id="alamat-anak-anak" required>
                        <small class="form-text text-muted">Masukkan alamat sesuai KTP (Contoh : Dukuh Mangga, RT 01 / RW 01, Desa/Kelurahan Slahung, Kecamatan Slahung, Kabupaten Ponorogo)</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan-anak-anak" required>
                        <small class="form-text text-muted">Masukkan pekerjaan Sesuai KTP</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pendidikan</label>
                        <input type="text" class="form-control" id="pendidikan-anak-anak" required>
                        <small class="form-text text-muted">Masukkan pendidikan terakir (Contoh SD, SMP, SMA, D3, Strata 1)</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Agama</label>
                        <select class="form-select" id="agama-anak" required>
                            <option value="">-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                        <small class="form-text text-muted">Pilih agama pemohon</small>
                    </div>


                    <div class="d-flex justify-content-between mt-3">
                        <button class="btn btn-secondary mt-4" onclick="showPrevious('step2-anak', 'step1-anak')">Previous</button>
                        <button class="btn btn-primary mt-4" onclick="validateAndNext('step2-anak', 'step3-anak')">Next</button>
                    </div>

                </div>

                <!-- Slide 3: Data Perkawinan anak -->
                <div class="step-content" id="step3-anak" style="display:none;">
                    <h4>Data Perkawinan</h4>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Perkawinan</label>
                        <input type="date" class="form-control" id="tanggal-perkawinan-anak-anak" required>
                        <small class="form-text text-muted">Masukkan tanggal perkawinan sesuai dengan buku atau akta nikah</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomor Akta Perkawinan</label>
                        <input type="text" class="form-control" id="nomor-akta-perkawinan-anak-anak" required>
                        <small class="form-text text-muted">Masukkan nomor akta perkawinan sesuai dengan buku atau akta nikah</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pilih Suami/Istri</label>
                        <select class="form-select" id="pasangan-anak-anak" required>
                            <option value="">-- Pilih --</option>
                            <option value="Suami">Suami</option>
                            <option value="Istri">Istri</option>
                        </select>
                        <small class="form-text text-muted">Pilih pasangan</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Pasangan</label>
                        <input type="text" class="form-control" id="nama-pasangan-anak-anak" required>
                        <small class="form-text text-muted">Masukkan nama pasangan</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Akta Perkawinan</label>
                        <input type="date" class="form-control" id="tanggal-akta-perkawinan-anak-anak" required>
                        <small class="form-text text-muted">Masukkan tanggal akta perkawinan yang ada pada buku atau akta perkawinan</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Menikah Secara Agama</label>
                        <select class="form-select" id="menikah-secara-agama" required>
                            <option value="">-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                        <small class="form-text text-muted">Pilih agama saat menikah</small>
                    </div>


                    <div class="d-flex justify-content-between mt-3">
                        <button class="btn btn-secondary mt-4" onclick="showPrevious('step3-anak', 'step2-anak')">Previous</button>
                        <button class="btn btn-primary mt-4" onclick="validateAndNext('step3-anak', 'step4-anak')">Next</button>
                    </div>
                </div>

                <!-- Slide 4: Permohonan Perubahan Nama Anak -->
                <div class="step-content" id="step4-anak" style="display:none;">
                    <h4>Permohonan Perubahan Nama Anak</h4>
                    <div class="mb-3">
                        <label class="form-label">Nama Anak Saat ini</label>
                        <input type="text" class="form-control" id="nama-anak-barang" required>
                        <small class="form-text text-muted">Masukkan nama lengkap anak saat ini</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tempat Lahir Anak</label>
                        <input type="text" class="form-control" id="tempat-lahir-anak-barang" required>
                        <small class="form-text text-muted">Masukkan tempat lahir anak sesui akta anak</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir Anak</label>
                        <input type="date" class="form-control" id="tanggal-lahir-anak-barang" required>
                        <small class="form-text text-muted">Masukkan tanggal lahir anak sesuai akta anak</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin Anak</label>
                        <select class="form-select" id="jenis_kelamin-anak-barang">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">NO Akta Kelahiran Anak sesuai akta anak</label>
                        <input type="text" class="form-control" id="nomor-akta-anak-anak" required>
                        <small class="form-text text-muted">Masukkan No Akta Kelahiran Anak</small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Akta Kelahiran Anak</label>
                        <input type="date" class="form-control" id="tanggal-akta-anak-anak" required>
                        <small class="form-text text-muted">Masukkan Tanggal Akta Kelahiran Anak</small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Kab / Kota di Keluarkan Akta Kelahiran</label>
                        <input type="text" class="form-control" id="kota-akta-anak-anak" required>
                        <small class="form-text text-muted">Masukkan kab Kota di Keluarkan Akta Kelahiran Anak</small>
                    </div>



                    <div class="d-flex justify-content-between mt-3">
                        <button class="btn btn-secondary mt-4" onclick="showPrevious('step4-anak', 'step3-anak')">Previous</button>
                        <button class="btn btn-primary mt-4" onclick="validateAndNext('step4-anak', 'step5-anak')">Next</button>
                    </div>


                </div>
            </div>

            <!-- Slide 5: Konfirmasi Permohonan Perubahan Nama Anak -->
            <div class="step-content" id="step5-anak" style="display:none;">
                <h4>Konfirmasi Permohonan Perubahan Nama Anak</h4>
                <div class="mb-3">
                    <label class="form-label">Tulis Ulang Nama Anak Saat Ini</label>
                    <input type="text" class="form-control" id="nama-lama" required>
                    <small class="form-text text-muted">Masukkan ulang nama lengkap anak saat ini dan pastikan penulisan sudah benar </small>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Baru</label>
                    <input type="text" class="form-control" id="nama-baru" required>
                    <small class="form-text text-muted">Masukkan ulang nama lengkap anak yang baru dan pastikan penulisan sudah benar </small>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alasan Ganti Nama</label>
                    <textarea class="form-control" id="alasan-perubahan" rows="3" required></textarea>
                    <small class="form-text text-muted">Masukkan alasan perubahan nama (contoh alasan : alasan perubahan nama karena sering mengalami sakit-sakitan, perubahan nama karena nama baru memiliki arti yang baik dan membawa keberkahan/keberuntungan, dll.</small>
                </div>


                <div class="d-flex justify-content-between mt-3">
                    <button class="btn btn-secondary mt-4" onclick="showPrevious('step5-anak', 'step4-anak')">Previous</button>
                    <button class="btn btn-primary mt-3" onclick="showConfirmation('anak')">Simpan Permohonan</button>

                </div>
            </div>
        </div>
        <footer class="bg-white text-dark text-center py-4 mt-5">
            <div class="container">
                <hr style="border-top: 2px solid #333; width: 50%; margin: 0 auto;">
                <h5 class="mt-4">Tentang Aplikasi</h5>
                <p>
                    Forpena dibuat untuk memudahkan masyarakat dalam menyusun permohonan perubahan nama. Melalui Aplikasi ini, masyarakat akan dipandu dalam pembuatan permohonan perubahan nama.
                    Namun perlu diperhatikan bahwa tidak sepenuhnya permohonan yang dibuat melalui Aplikasi ini akan dikabulkan.
                    Penetapan dikabulkan atau tidaknya permohonan bergantung pada proses persidangan yang dilaksanakan.
                    Apabila setelah dicetak masih terdapat kekurangan dalam surat permohonan, pemohon dipersilakan untuk menambah atau memperbaiki permohonan karena unduhan dari sistem ini berbentuk docx.
                </p>
                <hr style="border-top: 2px solid #333; width: 50%; margin: 0 auto;">
            </div>
        </footer>



        <div class="modal fade" id="modalConfirmation" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Konfirmasi Permohonan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah data sudah benar? jika masih belum benar klik tombol batal lalu perbaiki</p>
                        <ul id="dataSummary"></ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" id="confirmButton">Kirim</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function showConfirmation(permohonanType) {
                const confirmButton = document.getElementById('confirmButton');
                const dataSummary = document.getElementById('dataSummary');

                // Bersihkan data sebelumnya
                dataSummary.innerHTML = '';

                // Kumpulkan data sesuai permohonan dan tampilkan di modal
                let isValid = true;

                if (permohonanType === 'diri') {
                    const nama = document.getElementById('nama-diriSendiri').value;
                    const jenisKelamin = document.getElementById('jenis-kelamin-diriSendiri').value;
                    const tempatLahir = document.getElementById('tempat-lahir-diriSendiri').value;
                    const tanggalLahir = document.getElementById('tanggal-lahir-diriSendiri').value;
                    const alamatKtp = document.getElementById('alamat-diriSendiri').value;
                    const pekerjaan = document.getElementById('pekerjaan-diriSendiri').value;
                    const pendidikan = document.getElementById('pendidikan-diriSendiri').value;
                    const agama = document.getElementById('agama-diriSendiri').value;
                    const namaBaru = document.getElementById('nama-baru-diriSendiri').value;
                    const alasanPerubahan = document.getElementById('alasan-perubahan-diriSendiri').value;
                    const namaAktaKelahiran = document.getElementById('nama-akta-kelahiran-diriSendiri').value;
                    const namaIbu = document.getElementById('nama-ibu-diriSendiri').value;

                    const namaAyah = document.getElementById('nama-ayah-diriSendiri').value;
                    const noAkta = document.getElementById('no-akta-diriSendiri').value;
                    const tglAkta = document.getElementById('tgl-akta-diriSendiri').value;
                    const kotaAkta = document.getElementById('kota-akta-diriSendiri').value;

                    // Validasi input
                    if (!nama || !alamatKtp || !jenisKelamin || !namaBaru || !alasanPerubahan) {
                        isValid = false;
                        alert('Silakan lengkapi semua data yang diperlukan untuk permohonan diri.');
                    } else {
                        // Tampilkan data di dalam modal
                        dataSummary.innerHTML = `
            <li>Nama Lama: ${nama}</li>
            <li>Jenis Kelamin: ${jenisKelamin}</li>
            <li>Tempat Lahir: ${tempatLahir}</li>
            <li>Tanggal Lahir: ${tanggalLahir}</li>
            <li>Alamat KTP: ${alamatKtp}</li>
            <li>Pekerjaan: ${pekerjaan}</li>
            <li>Pendidikan: ${pendidikan}</li>
            <li>Agama: ${agama}</li>
            <li>Nama Baru: ${namaBaru}</li>
            <li>Alasan Perubahan: ${alasanPerubahan}</li>
            <li>Nama Akta Kelahiran: ${namaAktaKelahiran}</li>
            <li>Nama Ibu: ${namaIbu}</li>
            <li>Nama Ayah: ${namaAyah}</li>
             <li>Nomor Akta: ${noAkta}</li>
            <li>Tanggal Akta: ${tglAkta}</li>
            <li>Kabupaten/Kota Akta: ${kotaAkta}</li>
        `;
                    }

                } else if (permohonanType === 'anak') {
                    const namaAnak = document.getElementById('nama-anak-anak').value;
                    const tempatLahirAnak = document.getElementById('tempat-lahir-anak-anak').value;
                    const tanggalLahirAnak = document.getElementById('tanggal-lahir-anak-anak').value;
                    const jenisKelaminAnak = document.getElementById('jenis-kelamin-anak-anak').value;
                    const alamatAnak = document.getElementById('alamat-anak-anak').value;
                    const agamaAnak = document.getElementById('agama-anak').value;
                    const nomorAktaKelahiranAnak = document.getElementById('nomor-akta-anak-anak').value;
                    const tanggalAktaKelahiranAnak = document.getElementById('tanggal-akta-anak-anak').value;
                    const kabupatenKotaAkta = document.getElementById('kota-akta-anak-anak').value;
                    const pekerjaanAnak = document.getElementById('pekerjaan-anak-anak').value;
                    const PendidikanAnak = document.getElementById('pendidikan-anak-anak').value;

                    // Data Perkawinan
                    const tanggalPerkawinan = document.getElementById('tanggal-akta-perkawinan-anak-anak').value;
                    const nomorAktaPerkawinan = document.getElementById('nomor-akta-perkawinan-anak-anak').value;
                    const pasangan = document.getElementById('pasangan-anak-anak').value;

                    const namaPasangan = document.getElementById('nama-pasangan-anak-anak').value;
                    const tanggalAktaPerkawinan = document.getElementById('tanggal-akta-perkawinan-anak-anak').value;
                    const menikahSecaraAgama = document.getElementById('menikah-secara-agama').value;

                    // Data Perubahan Nama
                    const namaLama = document.getElementById('nama-lama').value;
                    const namaBaru = document.getElementById('nama-baru').value;
                    const alasanPerubahan = document.getElementById('alasan-perubahan').value;


                    // Validasi input
                    if (!namaAnak || !tempatLahirAnak || !tanggalLahirAnak || !jenisKelaminAnak) {
                        isValid = false;
                        alert('Silakan lengkapi semua data yang diperlukan untuk permohonan anak.');
                    } else {
                        // Tampilkan data di dalam modal
                        dataSummary.innerHTML = `
                   <li>Nama Anak: ${namaAnak}</li>
                <li>Tempat Lahir Anak: ${tempatLahirAnak}</li>
                <li>Tanggal Lahir Anak: ${tanggalLahirAnak}</li>
          <li>Jenis Kelamin Anak: ${jenisKelaminAnak}</li>
          <li>Alamat: ${alamatAnak}</li>
           <li>Agama: ${agamaAnak}</li>
              <li>Nomor Akta Kelahiran Anak: ${nomorAktaKelahiranAnak}</li>
               <li>Tanggal Akta Kelahiran Anak: ${tanggalAktaKelahiranAnak}</li>
              <li>Kabupaten/Kota Akta Kelahiran Anak: ${kabupatenKotaAkta}</li>
               <li>Pekerjaan: ${pekerjaanAnak}</li>
                <li>Pendidikan: ${PendidikanAnak}</li>
            <li>Tanggal Perkawinan Orang Tua: ${tanggalPerkawinan}</li>
           <li>Nomor Akta Perkawinan: ${nomorAktaPerkawinan}</li>          
            <li>Pasangan: ${pasangan}</li>
           <li>Nama Pasangan: ${namaPasangan}</li>
          <li>Tanggal Akta Perkawinan: ${tanggalAktaPerkawinan}</li>
          <li>Menikah Secara Agama: ${menikahSecaraAgama}</li>
             <li>Nama Lama: ${namaLama}</li>
            <li>Nama Baru: ${namaBaru}</li>
            <li>Alasan Perubahan: ${alasanPerubahan}</li>
            `;
                    }
                }

                if (!isValid) {
                    return; // Keluar dari fungsi jika input tidak valid
                }

                // Fungsi untuk kirim data setelah konfirmasi
                const handleConfirmClick = () => {
                    let formData = new FormData();

                    if (permohonanType === 'diri') {
                        formData.append('nama', document.getElementById('nama-diriSendiri').value);
                        formData.append('jenis_kelamin', document.getElementById('jenis-kelamin-diriSendiri').value);
                        formData.append('tempat_lahir', document.getElementById('tempat-lahir-diriSendiri').value);
                        formData.append('tanggal_lahir', document.getElementById('tanggal-lahir-diriSendiri').value);
                        formData.append('alamat_ktp', document.getElementById('alamat-diriSendiri').value);
                        formData.append('pekerjaan', document.getElementById('pekerjaan-diriSendiri').value);
                        formData.append('pendidikan', document.getElementById('pendidikan-diriSendiri').value);
                        formData.append('agama', document.getElementById('agama-diriSendiri').value);
                        formData.append('nama_baru', document.getElementById('nama-baru-diriSendiri').value);
                        formData.append('alasan_perubahan', document.getElementById('alasan-perubahan-diriSendiri').value);
                        formData.append('nama_akta_kelahiran', document.getElementById('nama-akta-kelahiran-diriSendiri').value);
                        formData.append('nama_ibu', document.getElementById('nama-ibu-diriSendiri').value);
                        formData.append('no_akta', document.getElementById('no-akta-diriSendiri').value);
                        formData.append('nama_ayah', document.getElementById('nama-ayah-diriSendiri').value);
                        formData.append('tgl_akta', document.getElementById('tgl-akta-diriSendiri').value);
                        formData.append('kota_akta', document.getElementById('kota-akta-diriSendiri').value);
                        // Kirim data ke simpan_data_diri_sendiri.php
                        fetch('simpan_data_diri_sendiri.php', {
                                method: 'POST',
                                body: formData
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error(`HTTP error! Status: ${response.status}`);
                                }
                                return response.json(); // Mengonversi respons ke JSON
                            })
                            .then(data => {
                                if (data.status === 'success') {
                                    alert(data.message);
                                    setTimeout(() => {
                                        window.location.href = 'tampil_data.php?id=' + data.id;
                                    }, 1000);
                                } else {
                                    alert(`Gagal mengirim permohonan: ${data.message}`);
                                }
                            })
                            .catch(error => {
                                console.error('Fetch error:', error);
                                alert('Terjadi kesalahan saat mengirim permohonan. Silakan coba lagi.');
                            });
                    } else if (permohonanType === 'anak') {

                        // Data Anak
                        formData.append('nama_anak', document.getElementById('nama-anak-anak').value);
                        formData.append('tempat_lahir_anak', document.getElementById('tempat-lahir-anak-anak').value);
                        formData.append('tanggal_lahir_anak', document.getElementById('tanggal-lahir-anak-anak').value);
                        formData.append('jenis_kelamin_anak', document.getElementById('jenis-kelamin-anak-anak').value);
                        formData.append('alamat_anak', document.getElementById('alamat-anak-anak').value);
                        formData.append('agama_anak', document.getElementById('agama-anak').value);

                        formData.append('nomor_akta_kelahiran_anak', document.getElementById('nomor-akta-anak-anak').value);
                        formData.append('tanggal_akta_kelahiran_anak', document.getElementById('tanggal-akta-anak-anak').value);
                        formData.append('kabupaten_kota_akta', document.getElementById('kota-akta-anak-anak').value);
                        formData.append('pekerjaan_anak', document.getElementById('pekerjaan-anak-anak').value);
                        formData.append('pendidikan_anak', document.getElementById('pendidikan-anak-anak').value);

                        // Data Perkawinan
                        formData.append('tanggal_perkawinan', document.getElementById('tanggal-akta-perkawinan-anak-anak').value);
                        formData.append('nomor_akta_perkawinan', document.getElementById('nomor-akta-perkawinan-anak-anak').value);
                        formData.append('pasangan', document.getElementById('pasangan-anak-anak').value);

                        formData.append('nama_pasangan', document.getElementById('nama-pasangan-anak-anak').value);
                        formData.append('tanggal_akta_perkawinan', document.getElementById('tanggal-akta-perkawinan-anak-anak').value);
                        formData.append('menikah_secara_agama', document.getElementById('menikah-secara-agama').value);

                        // Data Perubahan Nama
                        formData.append('nama_lama', document.getElementById('nama-lama').value);
                        formData.append('nama_baru', document.getElementById('nama-baru').value);
                        formData.append('alasan_perubahan', document.getElementById('alasan-perubahan').value);
                        // Kirim data ke simpan_data_anak.php
                        fetch('simpan_data_anak.php', {
                                method: 'POST',
                                body: formData
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error(`HTTP error! Status: ${response.status}`);
                                }
                                return response.json();
                            })
                            .then(data => {
                                if (data.status === 'success') {
                                    alert(data.message);
                                    setTimeout(() => {
                                        window.location.href = 'daftar.php?id=' + data.id;
                                    }, 1000);
                                } else {
                                    alert(`Gagal mengirim permohonan: ${data.message}`);
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('Terjadi kesalahan saat mengirim permohonan.');
                            });
                    }

                    // Menutup modal setelah konfirmasi
                    const modalInstance = bootstrap.Modal.getInstance(document.getElementById('modalConfirmation'));
                    modalInstance.hide();
                    confirmButton.removeEventListener('click', handleConfirmClick);
                };

                confirmButton.removeEventListener('click', handleConfirmClick); // Hindari duplikasi listener
                confirmButton.addEventListener('click', handleConfirmClick); // Tambah listener untuk kirim data

                // Tampilkan modal
                const modal = new bootstrap.Modal(document.getElementById('modalConfirmation'));
                modal.show();
            }





            // Fungsi untuk menampilkan langkah sesuai jenis permohonan (diriSendiri/anak)
            function showSteps(type) {
                // Menyembunyikan semua langkah yang ada
                document.getElementById("diriSendiri-steps").style.display = type === "diriSendiri" ? "block" : "none";
                document.getElementById("anak-steps").style.display = type === "anak" ? "block" : "none";

                // Menyembunyikan semua konten langkah (step-content)
                document.querySelectorAll(".step-content").forEach(step => step.style.display = "none");

                // Menampilkan langkah pertama sesuai jenis permohonan
                if (type === "diriSendiri") {
                    document.getElementById("step1-diriSendiri").style.display = "block";
                } else if (type === "anak") {
                    document.getElementById("step1-anak").style.display = "block";
                }
            }

            // Fungsi untuk validasi sebelum melanjutkan ke langkah berikutnya
            function validateAndNext(currentStepId, nextStepId) {
                const stepContent = document.getElementById(currentStepId);
                const inputs = stepContent.querySelectorAll("input[required], select[required], textarea[required]");
                let valid = true;

                // Cek apakah semua input yang wajib diisi sudah terisi
                inputs.forEach(input => {
                    if (input.type === "checkbox" && !input.checked) {
                        valid = false;
                    } else if (input.type !== "checkbox" && input.value.trim() === "") {
                        valid = false;
                    }
                });

                if (valid) {
                    // Jika valid, lanjutkan ke langkah berikutnya
                    showNext(currentStepId, nextStepId);
                } else {
                    alert("Mohon lengkapi semua input yang diperlukan.");
                }
            }

            // Fungsi untuk menampilkan langkah berikutnya
            function showNext(currentStepId, nextStepId) {
                const currentStep = document.getElementById(currentStepId);
                const nextStep = document.getElementById(nextStepId);

                // Memastikan langkah berikutnya ada dan menampilkannya
                if (currentStep && nextStep) {
                    currentStep.style.display = "none";
                    nextStep.style.display = "block";
                } else {
                    console.log(`Langkah berikutnya tidak ditemukan: ${nextStepId}`);
                }
            }

            // Fungsi untuk kembali ke langkah sebelumnya
            function showPrevious(currentStepId, previousStepId) {
                const currentStep = document.getElementById(currentStepId);
                const previousStep = document.getElementById(previousStepId);

                // Memastikan langkah sebelumnya ada dan menampilkannya
                if (currentStep && previousStep) {
                    currentStep.style.display = "none";
                    previousStep.style.display = "block";
                }
            }

            // Fungsi untuk menampilkan konfirmasi setelah data lengkap


            // Fungsi untuk menampilkan langkah-langkah sesuai jenis permohonan yang dipilih
            function showStepsBasedOnSelection() {
                const jenisPermohonan = document.getElementById("jenis-permohonan").value;

                // Tampilkan langkah-langkah sesuai jenis permohonan
                if (jenisPermohonan === "diriSendiri") {
                    showSteps("diriSendiri");
                } else if (jenisPermohonan === "anak") {
                    showSteps("anak");
                }
            }

            // Fungsi untuk menonaktifkan dropdown jenis permohonan setelah pemilihan
            function disableJenisPermohonan() {
                const jenisPermohonan = document.getElementById("jenis-permohonan");
                jenisPermohonan.disabled = true; // Menonaktifkan dropdown setelah dipilih
            }
        </script>

    </body>

</html>
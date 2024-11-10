<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard with Categories and Right-Side Logo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            max-width: 150px;
        }
        .footer {
            margin-top: 50px;
            padding: 20px;
            background-color: #f8f9fa;
            border-top: 1px solid #ddd;
        }
        .category-section {
            display: none;
        }
        .welcome-message {
            display: none;
            margin-top: 30px;
        }
        .welcome-message h2 {
            color: #28a745;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .welcome-message p {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        .instructions {
            margin-top: 20px;
            background-color: #f1f1f1;
            padding: 20px;
            border-left: 5px solid #28a745;
            font-size: 1rem;
            color: #333;
        }
        .instructions p {
            margin: 0;
            padding: 5px 0;
        }
        .btn-download {
            display: inline-block;
            margin: 15px 0;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.1rem;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <!-- Logo dan Header -->
        <div class="row">
            <div class="col-md-12">
                <div class="header">
                    <div>
                        <h1>Dashboard</h1>
                        <p class="lead">Select a category to view relevant data.</p>
                    </div>
                    <!-- Logo di sebelah kanan -->
                    <div>
                        <img src="path/to/your/logo.png" alt="Logo" class="logo">
                    </div>
                </div>
            </div>
        </div>

        <!-- Kategori Pilihan -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-4 text-center">
                <button class="btn btn-primary w-100 mb-3" onclick="showCategory('category1')">PERUBAHAN NAMA DIRI SENDIRI</button>
            </div>
            <div class="col-md-4 text-center">
                <button class="btn btn-secondary w-100 mb-3" onclick="showCategory('category2')">Category 2</button>
            </div>
        </div>

        <!-- Kategori 1 dengan Form Input -->
        <div id="category1" class="category-section">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Category 1 Data</h3>
                </div>
                <div class="card-body">
                    <form id="formCategory1">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-control" id="jenisKelamin" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempatLahir" placeholder="Masukkan Tempat Lahir" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggalLahir" required>
                        </div>
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamatKTP" class="form-label">Alamat sesuai KTP</label>
                            <textarea class="form-control" id="alamatKTP" rows="3" placeholder="Masukkan Alamat sesuai KTP" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" placeholder="Masukkan Pekerjaan" required>
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select class="form-control" id="agama" required>
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <!-- Tombol Next -->
                        <button type="submit" class="btn btn-primary">Next</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal untuk Menampilkan Data -->
        <div class="modal fade" id="dataModal" tabindex="-1" aria-labelledby="dataModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="dataModalLabel">Data yang Dimasukkan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalContent">
                        <!-- Data akan ditampilkan di sini -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="downloadData()">Download Data</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pesan Selamat Datang -->
        <div id="welcomeMessage" class="welcome-message">
            <h2>SELAMAT DATANG untuk tahap upload di sistem ecourt</h2>
            <p>1. Cetak data yang sudah di download kemudian di tandatangani.</p>
            <p>2. Scan semua persyaratan yang disiapkan tadi.</p>
            <div class="instructions">
                <p>Akses link berikut ini untuk mendaftarkan permohonan "<span id="categoryName"></span>":</p>
                <a href="https://ecourt.mahkamahagung.go.id/Login" target="_blank" class="btn-download">Daftar Permohonan</a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer text-center">
            <p>&copy; 2023 Dashboard</p>
        </div>
    </div>

    <script>
        // Menampilkan kategori yang sesuai
        function showCategory(categoryId) {
            document.querySelectorAll('.category-section').forEach(section => {
                section.style.display = 'none';
            });
            document.getElementById(categoryId).style.display = 'block';
        }

        // Event Listener untuk Form Kategori 1
        document.getElementById('formCategory1').addEventListener('submit', function(event) {
            event.preventDefault();
            var nama = document.getElementById('nama').value;
            document.getElementById('displayName').textContent = 'Nama: ' + nama;
            showCategory('category2');
        });

        // Event Listener untuk Button di Kategori 2
        document.getElementById('nextToSlide3').addEventListener('click', function() {
            var oldName = document.getElementById('nama').value;
            document.getElementById('oldName').textContent = 'Nama Lama: ' + oldName;
            showCategory('category3');
        });

        // Event Listener untuk Button di Kategori 3
        document.getElementById('tampilkanData').addEventListener('click', function() {
            var nama = document.getElementById('nama').value;
            var namaBaru = document.getElementById('namaBaru').value;
            var alasan = document.getElementById('alasanPerubahan').value;

            var modalContent = `
                <p><strong>Nama Lama:</strong> ${nama}</p>
                <p><strong>Nama Baru:</strong> ${namaBaru}</p>
                <p><strong>Alasan Perubahan Nama:</strong> ${alasan}</p>
            `;

            document.getElementById('modalContent').innerHTML = modalContent;
            var dataModal = new bootstrap.Modal(document.getElementById('dataModal'));
            dataModal.show();
        });

        // Fungsi untuk Mengunduh Data sebagai Dokumen
        function downloadData() {
            var nama = document.getElementById('nama').value;
            var namaBaru = document.getElementById('namaBaru').value;
            var alasan = document.getElementById('alasanPerubahan').value;

            var docContent = `
                Nama Lama: ${nama}\n
                Nama Baru: ${namaBaru}\n
                Alasan Perubahan Nama: ${alasan}
            `;

            var blob = new Blob([docContent], { type: 'application/msword' });
            var link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = 'data_perubahan_nama.doc';
            link.click();

            // Tampilkan pesan selamat datang setelah download
            document.getElementById('category1').style.display = 'none';
            document.getElementById('welcomeMessage').style.display = 'block';
            document.getElementById('categoryName').textContent = nama; // Sesuaikan dengan kategori yang dipilih
        }
    </script>
</body>
</html>

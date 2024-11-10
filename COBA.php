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
        /* Menyembunyikan kategori saat halaman di-refresh */
        .category-section {
            display: none;
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
                <button class="btn btn-primary w-100 mb-3" onclick="showCategory('category1')">Category 1</button>
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

        <!-- Kategori 2 -->
        <div id="category2" class="category-section">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Category 2 Data</h3>
                </div>
                <div class="card-body">
                    <p id="displayName">Nama: </p>
                    <div class="mb-3">
                        <label for="aktaKelahiran" class="form-label">Nomor Akta Kelahiran</label>
                        <input type="text" class="form-control" id="aktaKelahiran" placeholder="Masukkan Nomor Akta Kelahiran" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalAkta" class="form-label">Tanggal Akta Kelahiran</label>
                        <input type="date" class="form-control" id="tanggalAkta" required>
                    </div>
                    <div class="mb-3">
                        <label for="namaAyah" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" id="namaAyah" placeholder="Masukkan Nama Ayah" required>
                    </div>
                    <div class="mb-3">
                        <label for="namaIbu" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" id="namaIbu" placeholder="Masukkan Nama Ibu" required>
                    </div>
                    <div class="mb-3">
                        <label for="kotaAkta" class="form-label">Kabupaten/Kota tempat dikeluarkan Akta Kelahiran</label>
                        <input type="text" class="form-control" id="kotaAkta" placeholder="Masukkan Kabupaten/Kota" required>
                    </div>
                    <button class="btn btn-primary" id="nextToSlide3">Next</button>
                </div>
            </div>
        </div>

        <!-- Kategori 3 -->
        <div id="category3" class="category-section">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Alasan Perubahan Nama</h3>
                </div>
                <div class="card-body">
                    <p id="oldName">Nama Lama: </p>
                    <div class="mb-3">
                        <label for="newNameInput" class="form-label">Nama Baru</label>
                        <input type="text" class="form-control" id="newNameInput" placeholder="Masukkan Nama Baru" required>
                    </div>
                    <div class="mb-3">
                        <label for="alasanPerubahan" class="form-label">Alasan Perubahan Nama</label>
                        <textarea class="form-control" id="alasanPerubahan" rows="3" placeholder="Masukkan Alasan Perubahan Nama" required></textarea>
                    </div>
                    <button class="btn btn-success" id="tampilkanData">Tampilkan Data</button>
                </div>
            </div>
        </div>

        <!-- Footer Tentang Sistem -->
        <div class="footer text-center">
            <h4>Tentang Sistem</h4>
            <p>
                Merupakan sistem yang dibuat untuk memudahkan masyarakat dalam menyusun permohonan perubahan nama.
                Melalui sistem ini, masyarakat akan dipandu dalam pembuatan permohonan perubahan nama.
                Namun, perlu diperhatikan bahwa permohonan yang dibuat melalui sistem ini tidak langsung
                disetujui, dan tetap memerlukan proses verifikasi manual oleh pihak berwenang.
                Unduhan dari sistem ini berbentuk .docx.
            </p>
        </div>
    </div>

    <script>
        function showCategory(categoryId) {
            // Menyembunyikan semua kategori
            document.querySelectorAll('.category-section').forEach(section => {
                section.style.display = 'none';
            });
            // Menampilkan kategori yang dipilih
            document.getElementById(categoryId).style.display = 'block';
        }

        // Form submission handler untuk kategori 1
        document.getElementById('formCategory1').addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah reload halaman

            // Ambil nilai dari input Nama
            var nama = document.getElementById('nama').value;

            // Tampilkan Nama di slide kedua (kategori 2)
            document.getElementById('displayName').innerText = "Nama: " + nama;

            // Arahkan ke kategori 2
            showCategory('category2');
        });

        // Handler untuk tombol Next di kategori 2
        document.getElementById('nextToSlide3').addEventListener('click', function() {
            // Tampilkan Nama Lama di slide ketiga
            document.getElementById('oldName').innerText = "Nama Lama: " + document.getElementById('nama').value;

            // Arahkan ke kategori 3
            showCategory('category3');
        });

        // Handler untuk tombol Tampilkan Data
        document.getElementById('tampilkanData').addEventListener('click', function() {
            // Ambil semua nilai dari input
            var namaLama = document.getElementById('nama').value;
            var jenisKelamin = document.getElementById('jenisKelamin').value;
            var tempatLahir = document.getElementById('tempatLahir').value;
            var tanggalLahir = document.getElementById('tanggalLahir').value;
            var nik = document.getElementById('nik').value;
            var alamatKTP = document.getElementById('alamatKTP').value;
            var pekerjaan = document.getElementById('pekerjaan').value;
            var agama = document.getElementById('agama').value;
            var aktaKelahiran = document.getElementById('aktaKelahiran').value;
            var tanggalAkta = document.getElementById('tanggalAkta').value;
            var namaAyah = document.getElementById('namaAyah').value;
            var namaIbu = document.getElementById('namaIbu').value;
            var kotaAkta = document.getElementById('kotaAkta').value;
            var namaBaru = document.getElementById('newNameInput').value;
            var alasanPerubahan = document.getElementById('alasanPerubahan').value;

            // Simpan data ke database menggunakan AJAX
            fetch('simpan_data.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    namaLama: namaLama,
                    jenisKelamin: jenisKelamin,
                    tempatLahir: tempatLahir,
                    tanggalLahir: tanggalLahir,
                    nik: nik,
                    alamatKTP: alamatKTP,
                    pekerjaan: pekerjaan,
                    agama: agama,
                    aktaKelahiran: aktaKelahiran,
                    tanggalAkta: tanggalAkta,
                    namaAyah: namaAyah,
                    namaIbu: namaIbu,
                    kotaAkta: kotaAkta,
                    namaBaru: namaBaru,
                    alasanPerubahan: alasanPerubahan
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Data berhasil disimpan!');

                    // Tampilkan semua data yang telah diinputkan
                    var semuaData = `
                        <h5>Data yang Dimasukkan:</h5>
                        <p><strong>Nama Lama:</strong> ${namaLama}</p>
                        <p><strong>Jenis Kelamin:</strong> ${jenisKelamin}</p>
                        <p><strong>Tempat Lahir:</strong> ${tempatLahir}</p>
                        <p><strong>Tanggal Lahir:</strong> ${tanggalLahir}</p>
                        <p><strong>NIK:</strong> ${nik}</p>
                        <p><strong>Alamat KTP:</strong> ${alamatKTP}</p>
                        <p><strong>Pekerjaan:</strong> ${pekerjaan}</p>
                        <p><strong>Agama:</strong> ${agama}</p>
                        <p><strong>Nomor Akta Kelahiran:</strong> ${aktaKelahiran}</p>
                        <p><strong>Tanggal Akta Kelahiran:</strong> ${tanggalAkta}</p>
                        <p><strong>Nama Ayah:</strong> ${namaAyah}</p>
                        <p><strong>Nama Ibu:</strong> ${namaIbu}</p>
                        <p><strong>Kabupaten/Kota:</strong> ${kotaAkta}</p>
                        <p><strong>Nama Baru:</strong> ${namaBaru}</p>
                        <p><strong>Alasan Perubahan Nama:</strong> ${alasanPerubahan}</p>
                    `;
                    // Tampilkan data di dalam modal atau di dalam halaman
                    document.querySelector('.footer').innerHTML += semuaData; // Menampilkan data di footer
                } else {
                    alert('Gagal menyimpan data.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>

    <?php include 'koneksi.php'; // Menyertakan file koneksi ?>
</body>
</html>





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
        /* Menyembunyikan kategori saat halaman di-refresh */
        .category-section {
            display: none;
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
                <button class="btn btn-secondary w-100 mb-3" onclick="showCategory('category2')">PERUBAHAN UNTUK ANAK</button>
            </div>
        </div>

        <!-- Kategori 1 dengan Form Input slide 1-->
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

        <!-- Kategori 1 dengan Form Input slide 2-->
        <div id="category2" class="category-section">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Category 2 Data</h3>
                </div>
                <div class="card-body">
                    <p id="displayName">Nama: </p>
                    <div class="mb-3">
                        <label for="aktaKelahiran" class="form-label">Nomor Akta Kelahiran</label>
                        <input type="text" class="form-control" id="aktaKelahiran" placeholder="Masukkan Nomor Akta Kelahiran" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalAkta" class="form-label">Tanggal Akta Kelahiran</label>
                        <input type="date" class="form-control" id="tanggalAkta" required>
                    </div>
                    <div class="mb-3">
                        <label for="namaAyah" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" id="namaAyah" placeholder="Masukkan Nama Ayah" required>
                    </div>
                    <div class="mb-3">
                        <label for="namaIbu" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" id="namaIbu" placeholder="Masukkan Nama Ibu" required>
                    </div>
                    <div class="mb-3">
                        <label for="kotaAkta" class="form-label">Kabupaten/Kota tempat dikeluarkan Akta Kelahiran</label>
                        <input type="text" class="form-control" id="kotaAkta" placeholder="Masukkan Kabupaten/Kota" required>
                    </div>
                    <button class="btn btn-primary" id="nextToSlide3">Next</button>
                </div>
            </div>
        </div>

        <!--         <!-- Kategori 1 dengan Form Input slide 3 -->
        <div id="category3" class="category-section">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Alasan Perubahan Nama</h3>
                </div>
                <div class="card-body">
                    <p id="oldName">Nama Lama: </p>
                    <p id="newName">input Nama Baru: </p>
					 <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required>
                    <div class="mb-3">
                        <label for="alasanPerubahan" class="form-label">Alasan Perubahan Nama</label>
                        <textarea class="form-control" id="alasanPerubahan" rows="3" placeholder="Masukkan Alasan Perubahan Nama" required></textarea>
                    </div>
                    <!-- Tombol untuk menampilkan data -->
                    <button class="btn btn-primary" id="tampilkanData">Tampilkan Data</button>
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
						<a href='edit_data.php?id=" . $row['id'] . "' class='btn btn-warning'>Edit</a>
                        <button type="button" class="btn btn-success" id="submitData">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
           		      <div class="footer text-center">
            <h4>Tentang Sistem</h4>
            <p>
                Merupakan sistem yang dibuat untuk memudahkan masyarakat dalam menyusun permohonan perubahan nama.
                Melalui sistem ini, masyarakat akan dipandu dalam pembuatan permohonan perubahan nama.
                Namun, perlu diperhatikan bahwa permohonan yang dibuat melalui sistem ini tidak langsung
                disetujui, dan tetap memerlukan proses verifikasi manual oleh pihak berwenang.
                Unduhan dari sistem ini berbentuk .docx.
            </p>
        </div>
    </div>

    <script>
        function showCategory(category) {
            document.querySelectorAll('.category-section').forEach(function(section) {
                section.style.display = 'none'; // Sembunyikan semua kategori
            });
            document.getElementById(category).style.display = 'block'; // Tampilkan kategori yang dipilih
        }

        // Menangani pengiriman form untuk Kategori 1
        document.getElementById('formCategory1').addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah pengiriman form default
            const name = document.getElementById('nama').value;
            const gender = document.getElementById('jenisKelamin').value;
            const birthPlace = document.getElementById('tempatLahir').value;
            const birthDate = document.getElementById('tanggalLahir').value;
            const nik = document.getElementById('nik').value;
            const address = document.getElementById('alamatKTP').value;
            const job = document.getElementById('pekerjaan').value;
            const religion = document.getElementById('agama').value;

            // Menyimpan data di localStorage
            localStorage.setItem('name', name);
            localStorage.setItem('gender', gender);
            localStorage.setItem('birthPlace', birthPlace);
            localStorage.setItem('birthDate', birthDate);
            localStorage.setItem('nik', nik);
            localStorage.setItem('address', address);
            localStorage.setItem('job', job);
            localStorage.setItem('religion', religion);

            // Menampilkan data di Kategori 2
            document.getElementById('displayName').innerText = 'Nama: ' + name;
            showCategory('category2'); // Tampilkan kategori 2
        });

        // Menangani pengiriman data untuk Kategori 2
        document.getElementById('nextToSlide3').addEventListener('click', function() {
            const name = localStorage.getItem('name');
            document.getElementById('oldName').innerText = 'Nama Lama: ' + name; // Tampilkan Nama Lama di Kategori 3
            document.getElementById('newName').innerText = 'Nama Baru: '; // Kosongkan Nama Baru
            showCategory('category3'); // Tampilkan kategori 3
        });

        // Menangani tampilan data di Modal
        document.getElementById('tampilkanData').addEventListener('click', function() {
            const name = localStorage.getItem('name');
            const gender = localStorage.getItem('gender');
            const birthPlace = localStorage.getItem('birthPlace');
            const birthDate = localStorage.getItem('birthDate');
            const nik = localStorage.getItem('nik');
            const address = localStorage.getItem('address');
            const job = localStorage.getItem('job');
            const religion = localStorage.getItem('religion');
            const aktaKelahiran = document.getElementById('aktaKelahiran').value;
            const tanggalAkta = document.getElementById('tanggalAkta').value;
            const namaAyah = document.getElementById('namaAyah').value;
            const namaIbu = document.getElementById('namaIbu').value;
            const kotaAkta = document.getElementById('kotaAkta').value;
            const alasanPerubahan = document.getElementById('alasanPerubahan').value;

            let content = `
                <p><strong>Nama:</strong> ${name}</p>
                <p><strong>Jenis Kelamin:</strong> ${gender}</p>
                <p><strong>Tempat Lahir:</strong> ${birthPlace}</p>
                <p><strong>Tanggal Lahir:</strong> ${birthDate}</p>
                <p><strong>NIK:</strong> ${nik}</p>
                <p><strong>Alamat KTP:</strong> ${address}</p>
                <p><strong>Pekerjaan:</strong> ${job}</p>
                <p><strong>Agama:</strong> ${religion}</p>
                <p><strong>Nomor Akta Kelahiran:</strong> ${aktaKelahiran}</p>
                <p><strong>Tanggal Akta Kelahiran:</strong> ${tanggalAkta}</p>
                <p><strong>Nama Ayah:</strong> ${namaAyah}</p>
                <p><strong>Nama Ibu:</strong> ${namaIbu}</p>
                <p><strong>Kabupaten/Kota Akta Kelahiran:</strong> ${kotaAkta}</p>
                <p><strong>Alasan Perubahan Nama:</strong> ${alasanPerubahan}</p>
            `;

            document.getElementById('modalContent').innerHTML = content;
            const modal = new bootstrap.Modal(document.getElementById('dataModal'));
            modal.show();
        });

        // Menangani submit data di modal
       // Menangani submit data di modal
		document.getElementById('submitData').addEventListener('click', function() {
    // Mengambil semua data dari localStorage
    const data = {
        name: localStorage.getItem('name'),
        gender: localStorage.getItem('gender'),
        birthPlace: localStorage.getItem('birthPlace'),
        birthDate: localStorage.getItem('birthDate'),
        nik: localStorage.getItem('nik'),
        address: localStorage.getItem('address'),
        job: localStorage.getItem('job'),
        religion: localStorage.getItem('religion'),
        aktaKelahiran: document.getElementById('aktaKelahiran').value,
        tanggalAkta: document.getElementById('tanggalAkta').value,
        namaAyah: document.getElementById('namaAyah').value,
        namaIbu: document.getElementById('namaIbu').value,
        kotaAkta: document.getElementById('kotaAkta').value,
        alasanPerubahan: document.getElementById('alasanPerubahan').value
    };

    // Mengirim data ke format_doc.php
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "format_doc.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.responseType = 'blob'; // Set response type to blob for downloading

    xhr.onload = function() {
        if (xhr.status === 200) {
            const blob = new Blob([xhr.response], { type: 'application/vnd.ms-word' });
            const link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = 'data.doc';
            link.click();
            alert('Data telah disimpan dan diunduh!');
        } else {
            alert('Gagal mengirim data.');
        }
    };

    // Membuat string query untuk data yang akan dikirim
    const queryString = Object.keys(data).map(key => `${encodeURIComponent(key)}=${encodeURIComponent(data[key])}`).join('&');
    xhr.send(queryString);
});

    </script>
</body>
</html>



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
        /* Menyembunyikan kategori saat halaman di-refresh */
        .category-section {
            display: none;
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

        <!-- Kategori 2 -->
        <div id="category2" class="category-section">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Category 2 Data</h3>
                </div>
                <div class="card-body">
                    <p id="displayName">Nama: </p>
                    <div class="mb-3">
                        <label for="aktaKelahiran" class="form-label">Nomor Akta Kelahiran</label>
                        <input type="text" class="form-control" id="aktaKelahiran" placeholder="Masukkan Nomor Akta Kelahiran" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalAkta" class="form-label">Tanggal Akta Kelahiran</label>
                        <input type="date" class="form-control" id="tanggalAkta" required>
                    </div>
                    <div class="mb-3">
                        <label for="namaAyah" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" id="namaAyah" placeholder="Masukkan Nama Ayah" required>
                    </div>
                    <div class="mb-3">
                        <label for="namaIbu" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" id="namaIbu" placeholder="Masukkan Nama Ibu" required>
                    </div>
                    <div class="mb-3">
                        <label for="kotaAkta" class="form-label">Kabupaten/Kota tempat dikeluarkan Akta Kelahiran</label>
                        <input type="text" class="form-control" id="kotaAkta" placeholder="Masukkan Kabupaten/Kota" required>
                    </div>
                    <button class="btn btn-primary" id="nextToSlide3">Next</button>
                </div>
            </div>
        </div>

        <!-- Kategori 3 -->
        <div id="category3" class="category-section">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Alasan Perubahan Nama</h3>
                </div>
                <div class="card-body">
                    <p id="oldName">Nama Lama: </p>
                    <p id="newName">input Nama Baru: </p>
					 <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required>
                    <div class="mb-3">
                        <label for="alasanPerubahan" class="form-label">Alasan Perubahan Nama</label>
                        <textarea class="form-control" id="alasanPerubahan" rows="3" placeholder="Masukkan Alasan Perubahan Nama" required></textarea>
                    </div>
                    <!-- Tombol untuk menampilkan data -->
                    <button class="btn btn-primary" id="tampilkanData">Tampilkan Data</button>
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
						<a href='edit_data.php?id=" . $row['id'] . "' class='btn btn-warning'>Edit</a>
                        <button type="button" class="btn btn-success" id="submitData">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
           		      <div class="footer text-center">
            <h4>Tentang Sistem</h4>
            <p>
                Merupakan sistem yang dibuat untuk memudahkan masyarakat dalam menyusun permohonan perubahan nama.
                Melalui sistem ini, masyarakat akan dipandu dalam pembuatan permohonan perubahan nama.
                Namun, perlu diperhatikan bahwa permohonan yang dibuat melalui sistem ini tidak langsung
                disetujui, dan tetap memerlukan proses verifikasi manual oleh pihak berwenang.
                Unduhan dari sistem ini berbentuk .docx.
            </p>
        </div>
    </div>

    <script>
        function showCategory(category) {
            document.querySelectorAll('.category-section').forEach(function(section) {
                section.style.display = 'none'; // Sembunyikan semua kategori
            });
            document.getElementById(category).style.display = 'block'; // Tampilkan kategori yang dipilih
        }

        // Menangani pengiriman form untuk Kategori 1
        document.getElementById('formCategory1').addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah pengiriman form default
            const name = document.getElementById('nama').value;
            const gender = document.getElementById('jenisKelamin').value;
            const birthPlace = document.getElementById('tempatLahir').value;
            const birthDate = document.getElementById('tanggalLahir').value;
            const nik = document.getElementById('nik').value;
            const address = document.getElementById('alamatKTP').value;
            const job = document.getElementById('pekerjaan').value;
            const religion = document.getElementById('agama').value;

            // Menyimpan data di localStorage
            localStorage.setItem('name', name);
            localStorage.setItem('gender', gender);
            localStorage.setItem('birthPlace', birthPlace);
            localStorage.setItem('birthDate', birthDate);
            localStorage.setItem('nik', nik);
            localStorage.setItem('address', address);
            localStorage.setItem('job', job);
            localStorage.setItem('religion', religion);

            // Menampilkan data di Kategori 2
            document.getElementById('displayName').innerText = 'Nama: ' + name;
            showCategory('category2'); // Tampilkan kategori 2
        });

        // Menangani pengiriman data untuk Kategori 2
        document.getElementById('nextToSlide3').addEventListener('click', function() {
            const name = localStorage.getItem('name');
            document.getElementById('oldName').innerText = 'Nama Lama: ' + name; // Tampilkan Nama Lama di Kategori 3
            document.getElementById('newName').innerText = 'Nama Baru: '; // Kosongkan Nama Baru
            showCategory('category3'); // Tampilkan kategori 3
        });

        // Menangani tampilan data di Modal
        document.getElementById('tampilkanData').addEventListener('click', function() {
            const name = localStorage.getItem('name');
            const gender = localStorage.getItem('gender');
            const birthPlace = localStorage.getItem('birthPlace');
            const birthDate = localStorage.getItem('birthDate');
            const nik = localStorage.getItem('nik');
            const address = localStorage.getItem('address');
            const job = localStorage.getItem('job');
            const religion = localStorage.getItem('religion');
            const aktaKelahiran = document.getElementById('aktaKelahiran').value;
            const tanggalAkta = document.getElementById('tanggalAkta').value;
            const namaAyah = document.getElementById('namaAyah').value;
            const namaIbu = document.getElementById('namaIbu').value;
            const kotaAkta = document.getElementById('kotaAkta').value;
            const alasanPerubahan = document.getElementById('alasanPerubahan').value;

            let content = `
                <p><strong>Nama:</strong> ${name}</p>
                <p><strong>Jenis Kelamin:</strong> ${gender}</p>
                <p><strong>Tempat Lahir:</strong> ${birthPlace}</p>
                <p><strong>Tanggal Lahir:</strong> ${birthDate}</p>
                <p><strong>NIK:</strong> ${nik}</p>
                <p><strong>Alamat KTP:</strong> ${address}</p>
                <p><strong>Pekerjaan:</strong> ${job}</p>
                <p><strong>Agama:</strong> ${religion}</p>
                <p><strong>Nomor Akta Kelahiran:</strong> ${aktaKelahiran}</p>
                <p><strong>Tanggal Akta Kelahiran:</strong> ${tanggalAkta}</p>
                <p><strong>Nama Ayah:</strong> ${namaAyah}</p>
                <p><strong>Nama Ibu:</strong> ${namaIbu}</p>
                <p><strong>Kabupaten/Kota Akta Kelahiran:</strong> ${kotaAkta}</p>
                <p><strong>Alasan Perubahan Nama:</strong> ${alasanPerubahan}</p>
            `;

            document.getElementById('modalContent').innerHTML = content;
            const modal = new bootstrap.Modal(document.getElementById('dataModal'));
            modal.show();
        });

        // Menangani submit data di modal
       // Menangani submit data di modal
		document.getElementById('submitData').addEventListener('click', function() {
    // Mengambil semua data dari localStorage
    const data = {
        name: localStorage.getItem('name'),
        gender: localStorage.getItem('gender'),
        birthPlace: localStorage.getItem('birthPlace'),
        birthDate: localStorage.getItem('birthDate'),
        nik: localStorage.getItem('nik'),
        address: localStorage.getItem('address'),
        job: localStorage.getItem('job'),
        religion: localStorage.getItem('religion'),
        aktaKelahiran: document.getElementById('aktaKelahiran').value,
        tanggalAkta: document.getElementById('tanggalAkta').value,
        namaAyah: document.getElementById('namaAyah').value,
        namaIbu: document.getElementById('namaIbu').value,
        kotaAkta: document.getElementById('kotaAkta').value,
        alasanPerubahan: document.getElementById('alasanPerubahan').value
    };

    // Mengirim data ke format_doc.php
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "format_doc.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.responseType = 'blob'; // Set response type to blob for downloading

    xhr.onload = function() {
        if (xhr.status === 200) {
            const blob = new Blob([xhr.response], { type: 'application/vnd.ms-word' });
            const link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = 'data.doc';
            link.click();
            alert('Data telah disimpan dan diunduh!');
        } else {
            alert('Gagal mengirim data.');
        }
    };

    // Membuat string query untuk data yang akan dikirim
    const queryString = Object.keys(data).map(key => `${encodeURIComponent(key)}=${encodeURIComponent(data[key])}`).join('&');
    xhr.send(queryString);
});

    </script>
</body>
</html>

<?php
// Autoload untuk mengimpor PhpWord
require 'autoload.php'; // Pastikan autoload.php ada di direktori yang sama

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

// Ganti ini dengan koneksi ke database jika diperlukan
$servername = "localhost";
$username = "root";  // Ganti dengan username database Anda
$password = "1234";  // Ganti dengan password database Anda
$dbname = "forpena";  // Nama database yang ingin digunakan

// Koneksi ke database
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Validasi dan ambil ID dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    $sql = "SELECT * FROM permohonan_perubahan_nama WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($data) {
        // Buat dokumen Word
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        // Tambahkan data ke dokumen
        $section->addTitle('Dokumen Permohonan Perubahan Nama', 1);
        $section->addText("Nama Lama: " . $data['nama_lama']);
        $section->addText("Nama Baru: " . $data['nama_baru']);
        $section->addText("Alasan Perubahan: " . $data['alasan_perubahan']);
        $section->addText("Jenis Kelamin: " . $data['jenis_kelamin']);
        $section->addText("Tempat Lahir: " . $data['tempat_lahir']);
        $section->addText("Tanggal Lahir: " . $data['tanggal_lahir']);
        $section->addText("NIK: " . $data['nik']);
        $section->addText("Alamat KTP: " . $data['alamat_ktp']);
        $section->addText("Pekerjaan: " . $data['pekerjaan']);
        $section->addText("Agama: " . $data['agama']);
        $section->addText("Akta Kelahiran: " . $data['akta_kelahiran']);
        $section->addText("Tanggal Akta Kelahiran: " . $data['tanggal_akta']);
        $section->addText("Nama Ayah: " . $data['nama_ayah']);
        $section->addText("Nama Ibu: " . $data['nama_ibu']);
        $section->addText("Kota Akta: " . $data['kota_akta']);

        // Simpan file
        $fileName = "Permohonan_Perubahan_Nama_" . $id . ".docx";
        $filePath = __DIR__ . '/' . $fileName;
        $phpWord->save($filePath, 'Word2007');

        // Download file
        header("Content-Description: File Transfer");
        header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        header("Content-Disposition: attachment; filename=" . basename($filePath));
        header("Expires: 0");
        header("Cache-Control: must-revalidate");
        header("Pragma: public");
        header("Content-Length: " . filesize($filePath));
        readfile($filePath);
        
        // Hapus file setelah di-download (opsional)
        unlink($filePath);
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak valid.";
}
?>

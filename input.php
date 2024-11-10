<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permohonan Perubahan Nama</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .slide {
            display: none;
        }
        .active {
            display: block;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Permohonan Perubahan Nama</h1>
    <form action="simpan_data.php" method="post" id="formPermohonan">
        
        <!-- Slide 1: Jenis Permohonan -->
        <div class="slide active" id="slide1">
            <div class="form-group">
                <label for="jenis_permohonan">Jenis Permohonan:</label>
                <select class="form-control" id="jenis_permohonan" name="jenis_permohonan" required>
                    <option value="">Pilih...</option>
                    <option value="sendiri">Untuk Diri Sendiri</option>
                    <option value="anak">Untuk Anak</option>
                </select>
            </div>
        </div>

        <!-- Slide 2: Identitas Pemohon -->
        <div class="slide" id="slide2">
            <h3>Identitas Pemohon</h3>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="">Pilih...</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label for="nik">NIK:</label>
                <input type="text" class="form-control" id="nik" name="nik" required>
            </div>
            <div class="form-group">
                <label for="alamat_ktp">Alamat sesuai KTP:</label>
                <textarea class="form-control" id="alamat_ktp" name="alamat_ktp" rows="2" required></textarea>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
            </div>
            <div class="form-group">
                <label for="pendidikan">Pendidikan:</label>
                <input type="text" class="form-control" id="pendidikan" name="pendidikan" required>
            </div>
            <div class="form-group">
                <label for="agama">Agama:</label>
                <input type="text" class="form-control" id="agama" name="agama" required>
            </div>
        </div>

        <!-- Slide 3: Data Kelahiran -->
        <div class="slide" id="slide3">
            <h3>Data Kelahiran</h3>
            <div class="form-group">
                <label for="nama_akta">Nama pada Akta Kelahiran:</label>
                <input type="text" class="form-control" id="nama_akta" name="nama_akta" required>
            </div>
            <div class="form-group">
                <label for="nomor_akta">Nomor Akta Kelahiran:</label>
                <input type="text" class="form-control" id="nomor_akta" name="nomor_akta" required>
            </div>
            <div class="form-group">
                <label for="tanggal_akta">Tanggal Akta Kelahiran:</label>
                <input type="date" class="form-control" id="tanggal_akta" name="tanggal_akta" required>
            </div>
            <div class="form-group">
                <label for="nama_ayah">Nama Ayah:</label>
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
            </div>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu:</label>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
            </div>
            <div class="form-group">
                <label for="kota_akta">Kabupaten/Kota tempat dikeluarkan Akta Kelahiran:</label>
                <input type="text" class="form-control" id="kota_akta" name="kota_akta" required>
            </div>
        </div>

        <!-- Slide 4: Data Perubahan -->
        <div class="slide" id="slide4">
            <h3>Data Perubahan</h3>
            <div class="form-group">
                <label for="nama_baru">Nama yang Baru:</label>
                <input type="text" class="form-control" id="nama_baru" name="nama_baru" required>
            </div>
            <div class="form-group">
                <label for="alasan_perubahan">Alasan Perubahan Nama:</label>
                <textarea class="form-control" id="alasan_perubahan" name="alasan_perubahan" rows="3" required></textarea>
            </div>
        </div>

        <!-- Slide 5: Download File/Dokumen -->
        <div class="slide" id="slide5">
            <h3>Download File/Dokumen</h3>
            <p>Setelah mengirimkan permohonan, Anda dapat mengunduh file dokumen permohonan perubahan nama.</p>
            <button type="submit" class="btn btn-primary">Kirim Permohonan</button>
        </div>

        <div class="mt-4">
            <button type="button" class="btn btn-secondary" id="prevBtn" onclick="changeSlide(-1)" style="display: none;">Previous</button>
            <button type="button" class="btn btn-primary" id="nextBtn" onclick="changeSlide(1)">Next</button>
        </div>
    </form>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    function showSlide(n) {
        slides.forEach((slide, index) => {
            slide.classList.remove('active');
            if (index === n) {
                slide.classList.add('active');
            }
        });

        // Update button visibility
        prevBtn.style.display = n === 0 ? 'none' : 'inline-block';
        nextBtn.style.display = n === slides.length - 1 ? 'none' : 'inline-block';
    }

    function changeSlide(n) {
        if (currentSlide + n >= 0 && currentSlide + n < slides.length) {
            currentSlide += n;
            showSlide(currentSlide);
        }
    }

    // Initialize the first slide
    showSlide(currentSlide);
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

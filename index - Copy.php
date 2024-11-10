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
    <div class="container mt-5">
        <h2>Dashboard Forpena</h2>
        <div class="alert alert-info" role="alert">
            Forpena merupakan sistem yang dibuat untuk memudahkan masyarakat dalam menyusun permohonan perubahan nama untuk diri sendiri maupun untuk nama anak.
            Melalui sistem ini, masyarakat akan dipandu dalam pembuatan permohonan perubahan nama.
        </div>
        <div class="form-group">
            <label for="jenis-permohonan">Pilih Jenis Permohonan:</label>
            <select class="form-control" id="jenis-permohonan" onchange="showSteps(this.value); disableJenisPermohonan()">


                <option value="">-- Pilih --</option>
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
       
        <button class="btn btn-primary mt-4" onclick="validateAndNext('step1-diriSendiri')">Next1</button>
        <!-- Tombol untuk melanjutkan ke langkah berikutnya -->
        <button class="btn btn-primary mt-4" onclick="validateAndNext('step1-diriSendiri')">Next</button>
        <button class="btn btn-primary mt-4" onclick="validateAndNext('step1-diriSendiri', 'step2-diriSendiri')">Nextxx</button>

    </div>
</div>

<style>
    /* Perbesar ukuran checkbox dan tambahkan efek hover */
    .form-check-input {
        transform: scale(1.2);  /* Membuat checkbox lebih besar */
        border: 2px solid #007bff; /* Menambahkan border agar lebih terlihat */
    }

    .form-check-input:focus {
        outline: none;  /* Menghilangkan outline default saat fokus */
        border-color: #0056b3;  /* Ubah border saat fokus */
    }

    .form-check-label {
        font-size: 1rem; /* Ukuran font normal, tidak tebal */
        color: #333; /* Memberikan warna teks label */
    }

    .form-check-input:checked {
        background-color: #007bff; /* Menambahkan warna latar belakang saat centang */
        border-color: #007bff; /* Mengubah border saat centang */
    }
</style>

      

        <!-- Slide 2: Identitas Pemohon -->
        <div class="step-content" id="step2-diriSendiri" style="display:none;">
            <h4>Identitas Pemohon</h4>
            <div class="mb-3"><label class="form-label">Nama</label><input type="text" class="form-control" id="nama-diriSendiri" required>
			 <small class="form-text text-muted">Masukkan nama lengkap sesuai dengan identitas KTP.</small>
			</div>
               

		   <div class="mb-3"><label class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis-kelamin-diriSendiri" required><option value="">-- Pilih --</option><option value="Laki-laki">Laki-laki</option><option value="Perempuan">Perempuan</option></select>
               <small class="form-text text-muted">Masukkan jenis kelamin sesuai dengan identitas KTP.</small>
			</div>
			 

            <div class="mb-3"><label class="form-label">Tempat Lahir</label><input type="text" class="form-control" id="tempat-lahir-diriSendiri" required>
			 <small class="form-text text-muted">Masukkan tempat lahir sesuai dengan identitas KTP.</small>
			</div>
               

			<div class="mb-3"><label class="form-label">Tanggal Lahir</label><input type="date" class="form-control" id="tanggal-lahir-diriSendiri" required>
			 <small class="form-text text-muted">Masukkan tanggal lahir sesuai dengan identitas KTP.</small>
			</div>
          

            <div class="mb-3"><label class="form-label">Alamat Sesuai KTP</label><input type="text" class="form-control" id="alamat-diriSendiri" required>
			 <small class="form-text text-muted">Masukkan alamat lengkap sesuai dengan identitas KTP.</small>
			</div>
       

			<div class="mb-3"><label class="form-label">Pekerjaan</label><input type="text" class="form-control" id="pekerjaan-diriSendiri" required>
			         <small class="form-text text-muted">Masukkan pekerjaan sesuai dengan identitas KTP.</small>
			</div>
             

			<div class="mb-3"><label class="form-label">Pendidikan</label><input type="text" class="form-control" id="pendidikan-diriSendiri" required>
			         <small class="form-text text-muted">Masukkan pendidikan terakhir.</small>
			</div>
                

			<div class="mb-3"><label class="form-label">Agama</label>
                <select class="form-select" id="agama-diriSendiri" required><option value="">-- Pilih Agama --</option><option value="Islam">Islam</option><option value="Kristen">Kristen</option><option value="Hindu">Hindu</option><option value="Buddha">Buddha</option><option value="Konghucu">Konghucu</option></select>
            <small class="form-text text-muted">Masukkan agama sesuai dengan identitas KTP.</small>
			</div>
			    

		<button class="btn btn-secondary mt-3" onclick="showPrevious('step1-diriSendiri')">Previous</button>

       <button class="btn btn-primary mt-3" onclick="validateAndNext('step2-diriSendiri')">Next</button>
        
        </div>

        <!-- Slide 3: Data Kelahiran -->
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
					<button class="btn btn-secondary mt-3" onclick="showPrevious('step2-diriSendiri')">Previous</button>

            <button class="btn btn-primary mt-3" onclick="showNext('step4-diriSendiri')">Next</button>
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
						
			<button class="btn btn-secondary mt-3" onclick="showPrevious('step2-diriSendiri')">Previous</button>
            <button class="btn btn-primary mt-3" onclick="showConfirmation('diri')">Kirim Permohonan DIRI</button>
        </div>
    </div>


    

    <!-- Slides untuk Permohonan Anak -->
    <div id="anak-steps" style="display:none;">
        <!-- Slide 1: Persyaratan -->
        <div class="step-content" id="step1-anak">
            <h4>Persyaratan</h4>
            <p>Pastikan semua persyaratan di bawah ini telah dipenuhi:</p>
            <div class="form-check"><input class="form-check-input" type="checkbox" id="ktp-anak" required><label class="form-check-label" for="ktp-anak">KTP</label></div>
            <div class="form-check"><input class="form-check-input" type="checkbox" id="kk-anak" required><label class="form-check-label" for="kk-anak">KK</label></div>
            <div class="form-check"><input class="form-check-input" type="checkbox" id="akta-anak" required><label class="form-check-label" for="akta-anak">Akta Kelahiran anak</label></div>
            <div class="form-check"><input class="form-check-input" type="checkbox" id="buku-nikah-anak" required><label class="form-check-label" for="buku-nikah-anak">Buku Nikah/Akta Nikah</label></div>
            <div class="form-check"><input class="form-check-input" type="checkbox" id="surat-pernyataan-anak" required><label class="form-check-label" for="surat-pernyataan-anak">Surat Pernyataan perubahan nama diketahui kepala desa</label></div>
            <div class="form-check"><input class="form-check-input" type="checkbox" id="surat-domisili-anak" required><label class="form-check-label" for="surat-domisili-anak">Surat keterangan domisili</label></div>
            <div class="form-check"><input class="form-check-input" type="checkbox" id="surat-permohonan-anak" required><label class="form-check-label" for="surat-permohonan-anak">Surat Permohonan</label></div>
            <button class="btn btn-primary mt-3" onclick="showNext('step2-anak')">Next</button>
        </div>

        <!-- Slide 2: Identitas Pemohon -->
        <div class="step-content" id="step2-anak" style="display:none;">
            <h4>Identitas Pemohon</h4>
            <div class="mb-3"><label class="form-label">Nama</label><input type="text" class="form-control" id="nama-anak" required></div>
            <div class="mb-3"><label class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis-kelamin-anak" required>
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3"><label class="form-label">Tempat Lahir</label><input type="text" class="form-control" id="tempat-lahir-anak" required></div>
            <div class="mb-3"><label class="form-label">Tanggal Lahir</label><input type="date" class="form-control" id="tanggal-lahir-anak" required></div>
            <div class="mb-3"><label class="form-label">Alamat Sesuai KTP</label><input type="text" class="form-control" id="alamat-anak" required></div>
            <div class="mb-3"><label class="form-label">Pekerjaan</label><input type="text" class="form-control" id="pekerjaan-anak" required></div>
            <div class="mb-3"><label class="form-label">Pendidikan</label><input type="text" class="form-control" id="pendidikan-anak" required></div>
            <div class="mb-3"><label class="form-label">Agama</label>
                <select class="form-select" id="agama-anak" required>
                    <option value="">-- Pilih Agama --</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            <button class="btn btn-secondary mt-3" onclick="showPrevious('step1-anak')">Previous</button>
            <button class="btn btn-primary mt-3" onclick="showNext('step3-anak')">Next</button>
        </div>

        <!-- Slide 3: Data Perkawinan -->
        <div class="step-content" id="step3-anak" style="display:none;">
            <h4>Data Perkawinan</h4>
            <div class="mb-3"><label class="form-label">Tanggal Perkawinan</label><input type="date" class="form-control" id="tanggal-perkawinan-anak" required></div>
            <div class="mb-3"><label class="form-label">Nomor Akta Perkawinan</label><input type="text" class="form-control" id="nomor-akta-perkawinan-anak" required></div>
            <div class="mb-3"><label class="form-label">Pilih Suami/Istri</label>
                <select class="form-select" id="pasangan-anak" required>
                    <option value="">-- Pilih --</option>
                    <option value="Suami">Suami</option>
                    <option value="Istri">Istri</option>
                </select>
            </div>
            <div class="mb-3"><label class="form-label">Nama Pasangan</label><input type="text" class="form-control" id="nama-pasangan-anak" required></div>
            <div class="mb-3"><label class="form-label">Tanggal Akta Perkawinan</label><input type="date" class="form-control" id="tanggal-akta-perkawinan-anak" required></div>
            <div class="mb-3"><label class="form-label">Menikah Secara Agama</label>
                <select class="form-select" id="agama-perkawinan-anak" required>
                    <option value="">-- Pilih Agama --</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            <button class="btn btn-secondary mt-3" onclick="showPrevious('step2-anak')">Previous</button>
            <button class="btn btn-primary mt-3" onclick="showNext('step4-anak')">Next</button>
        </div>

        <!-- Slide 4: Permohonan Perubahan Nama Anak -->
        <div class="step-content" id="step4-anak" style="display:none;">
            <h4>Permohonan Perubahan Nama Anak</h4>
            <div class="mb-3"><label class="form-label">Nama Anak</label><input type="text" class="form-control" id="nama-anak-anak" required></div>
            <div class="mb-3"><label class="form-label">Tempat Lahir Anak</label><input type="text" class="form-control" id="tempat-lahir-anak-anak" required></div>
            <div class="mb-3"><label class="form-label">Tanggal Lahir Anak</label><input type="date" class="form-control" id="tanggal-lahir-anak-anak" required></div>
            <div class="mb-3"><label class="form-label">Jenis Kelamin Anak</label>
                <select class="form-select" id="jenis-kelamin-anak-anak" required>
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3"><label class="form-label">Nomor Akta Kelahiran Anak</label><input type="text" class="form-control" id="nomor-akta-anak-anak" required></div>
            <div class="mb-3"><label class="form-label">Tanggal Akta Kelahiran Anak</label><input type="date" class="form-control" id="tanggal-akta-anak-anak" required></div>
            <div class="mb-3"><label class="form-label">Kabupaten/Kota dikeluarkannya Akta Kelahiran Anak</label><input type="text" class="form-control" id="kota-akta-anak-anak" required></div>
            <button class="btn btn-secondary mt-3" onclick="showPrevious('step3-anak')">Previous</button>
            <button class="btn btn-primary mt-3" onclick="showConfirmation('anak')">Kirim Permohonan</button>
        </div>
    </div>

    <!-- Slide 5: Konfirmasi Permohonan Perubahan Nama Anak -->
    <div class="step-content" id="step5-anak" style="display:none;">
        <h4>Konfirmasi Permohonan Perubahan Nama Anak</h4>
        <div class="mb-3">
            <label class="form-label">Nama Saat Ini</label>
            <input type="text" class="form-control" id="nama-saat-ini-anak" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Baru</label>
            <input type="text" class="form-control" id="nama-baru-anak" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Alasan Ganti Nama</label>
            <textarea class="form-control" id="alasan-ganti-nama-anak" rows="3" required></textarea>
        </div>
        <button class="btn btn-secondary mt-3" onclick="showPrevious('step4-anak')">Previous</button>
        <button class="btn btn-primary mt-3" onclick="submitAnakForm()">Simpan Permohonan</button>
    </div>


    <footer class="bg-white text-drag text-center py-4 mt-5">
        <div class="container">
            <h5>Tentang Sistem</h5>
            <p>
                Forpena dibuat untuk memudahkan masyarakat dalam menyusun permohonan perubahan nama. Melalui sistem ini, masyarakat akan dipandu dalam pembuatan permohonan perubahan nama.
                Namun perlu diperhatikan bahwa tidak sepenuhnya permohonan yang dibuat melalui sistem ini akan dikabulkan.
                Penetapan dikabulkan atau tidaknya permohonan bergantung pada proses persidangan yang dilaksanakan.
                Apabila setelah dicetak masih terdapat kekurangan dalam surat permohonan, pemohon dipersilakan untuk menambah atau memperbaiki permohonan karena unduhan dari sistem ini berbentuk docx.
            </p>
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
                    <p>Apakah Anda yakin ingin mengirim permohonan dengan data berikut?</p>
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
                const noAkta = document.getElementById('no-akta-diriSendiri').value;
                const namaAyah = document.getElementById('nama-ayah-diriSendiri').value;
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
            <li>Nomor Akta: ${noAkta}</li>
            <li>Nama Ayah: ${namaAyah}</li>
            <li>Tanggal Akta: ${tglAkta}</li>
            <li>Kabupaten/Kota Akta: ${kotaAkta}</li>
        `;
                }

            } else if (permohonanType === 'anak') {
                const namaAnak = document.getElementById('nama-anak-anak').value;
                const tempatLahirAnak = document.getElementById('tempat-lahir-anak-anak').value;
                const tanggalLahirAnak = document.getElementById('tanggal-lahir-anak-anak').value;
                const jenisKelaminAnak = document.getElementById('jenis-kelamin-anak-anak').value;
                const nomorAkta = document.getElementById('nomor-akta-anak-anak').value;
                const tanggalAkta = document.getElementById('tanggal-akta-anak-anak').value;
                const kotaAkta = document.getElementById('kota-akta-anak-anak').value;

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
                <li>Nomor Akta Anak: ${nomorAkta}</li>
                <li>Tanggal Akta Anak: ${tanggalAkta}</li>
                <li>Kota Akta Anak: ${kotaAkta}</li>
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
                    formData.append('nama_anak', document.getElementById('nama-anak-anak').value);
                    formData.append('tempat_lahir', document.getElementById('tempat-lahir-anak-anak').value);
                    formData.append('tanggal_lahir', document.getElementById('tanggal-lahir-anak-anak').value);
                    formData.append('jenis_kelamin', document.getElementById('jenis-kelamin-anak-anak').value);
                    formData.append('nomor_akta', document.getElementById('nomor-akta-anak-anak').value);
                    formData.append('tanggal_akta', document.getElementById('tanggal-akta-anak-anak').value);
                    formData.append('kota_akta', document.getElementById('kota-akta-anak-anak').value);

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
                                    window.location.href = 'daftar.php';
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
        if (input.type === "checkbox") {
            if (!input.checked) {
                valid = false;
            }
        } else if (input.value.trim() === "") {
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
function showNext(currentStepId) {
    const currentStep = document.getElementById(currentStepId);
    const nextStep = currentStep.nextElementSibling;

    // Memastikan langkah berikutnya ada dan menampilkannya
    if (nextStep && nextStep.classList.contains("step-content")) {
        currentStep.style.display = "none";
        nextStep.style.display = "block";
    } else {
        console.log("Langkah berikutnya tidak ditemukan.");
    }
}

// Fungsi untuk kembali ke langkah sebelumnya
function showPrevious() {
    const currentStep = document.querySelector('.step-content[style="display: block;"]');
    if (currentStep) {
        const prevStep = currentStep.previousElementSibling;

        if (prevStep && prevStep.classList.contains("step-content")) {
            currentStep.style.display = "none";
            prevStep.style.display = "block";
        }
    }
}

// Fungsi untuk menampilkan konfirmasi setelah data lengkap
function showConfirmation(type) {
    if (type === "diri") {
        alert("Data untuk permohonan perubahan nama diri sendiri telah lengkap.");
    } else if (type === "anak") {
        alert("Data untuk permohonan perubahan nama anak telah lengkap.");
    }
    // Arahkan ke halaman simpan atau submit data (misalnya, dengan AJAX atau redirect)
}

// Fungsi tambahan untuk mengontrol langkah-langkah
function showNextStep(stepId) {
    // Menyembunyikan semua langkah dan menampilkan langkah yang dituju
    document.querySelectorAll(".step-content").forEach(step => step.style.display = "none");
    document.getElementById(stepId).style.display = "block";
}

function showPreviousStep(stepId) {
    // Menyembunyikan semua langkah dan menampilkan langkah yang dituju
    document.querySelectorAll(".step-content").forEach(step => step.style.display = "none");
    document.getElementById(stepId).style.display = "block";
}

// Fungsi untuk menonaktifkan dropdown jenis permohonan setelah pemilihan
function disableJenisPermohonan() {
    const jenisPermohonan = document.getElementById("jenis-permohonan");
    jenisPermohonan.disabled = true; // Menonaktifkan dropdown setelah dipilih
}

// Fungsi untuk menampilkan langkah-langkah sesuai jenis permohonan yang dipilih
function showStepsBasedOnSelection() {
    const jenisPermohonan = document.getElementById("jenis-permohonan").value;

    // Tampilkan langkah-langkah sesuai jenis permohonan
    if (jenisPermohonan === "diriSendiri") {
        document.getElementById("diriSendiri-steps").style.display = "block";
        document.getElementById("anak-steps").style.display = "none";
        document.getElementById("step1-diriSendiri").style.display = "block";
    } else if (jenisPermohonan === "anak") {
        document.getElementById("anak-steps").style.display = "block";
        document.getElementById("diriSendiri-steps").style.display = "none";
        document.getElementById("step1-anak").style.display = "block";
    }
}

    </script>

</body>

</html>
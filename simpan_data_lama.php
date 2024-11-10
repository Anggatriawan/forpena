<?php
include 'koneksi.php'; // Menyertakan file koneksi


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $namaLama = $_POST['namaLama'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $nik = $_POST['nik'];
    $alamatKTP = $_POST['alamatKTP'];
    $pekerjaan = $_POST['pekerjaan'];
    $agama = $_POST['agama'];
    $aktaKelahiran = $_POST['aktaKelahiran'];
    $tanggalAkta = $_POST['tanggalAkta'];
    $namaAyah = $_POST['namaAyah'];
    $namaIbu = $_POST['namaIbu'];
    $kotaAkta = $_POST['kotaAkta'];
    $namaBaru = $_POST['namaBaru'];
    $alasanPerubahan = $_POST['alasanPerubahan'];

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO permohonan_perubahan_nama (nama_lama, jenis_kelamin, tempat_lahir, tanggal_lahir, nik, alamat_ktp, pekerjaan, agama, akta_kelahiran, tanggal_akta, nama_ayah, nama_ibu, kota_akta, nama_baru, alasan_perubahan) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssss", $namaLama, $jenisKelamin, $tempatLahir, $tanggalLahir, $nik, $alamatKTP, $pekerjaan, $agama, $aktaKelahiran, $tanggalAkta, $namaAyah, $namaIbu, $kotaAkta, $namaBaru, $alasanPerubahan);

    if ($stmt->execute()) {
        echo "Data berhasil disimpan!<br>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();

    // Ambil dan tampilkan semua data
    $result = $conn->query("SELECT * FROM permohonan_perubahan_nama ORDER BY id DESC"); // Ganti 'id' dengan kolom primary key Anda

    if ($result->num_rows > 0) {
        echo "<h3>Data Permohonan:</h3>";
        echo "<table class='table'>";
        echo "<thead><tr><th>Nama Lama</th><th>Nama Baru</th><th>Jenis Kelamin</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>NIK</th><th>Alamat KTP</th><th>Pekerjaan</th><th>Agama</th><th>Akta Kelahiran</th><th>Tanggal Akta</th><th>Nama Ayah</th><th>Nama Ibu</th><th>Kota Akta</th><th>Alasan Perubahan</th><th>Aksi</th></tr></thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            // Buat row dengan tombol untuk memunculkan modal
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['nama_lama']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nama_baru']) . "</td>";
            echo "<td>" . htmlspecialchars($row['jenis_kelamin']) . "</td>";
            echo "<td>" . htmlspecialchars($row['tempat_lahir']) . "</td>";
            echo "<td>" . htmlspecialchars($row['tanggal_lahir']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nik']) . "</td>";
            echo "<td>" . htmlspecialchars($row['alamat_ktp']) . "</td>";
            echo "<td>" . htmlspecialchars($row['pekerjaan']) . "</td>";
            echo "<td>" . htmlspecialchars($row['agama']) . "</td>";
            echo "<td>" . htmlspecialchars($row['akta_kelahiran']) . "</td>";
            echo "<td>" . htmlspecialchars($row['tanggal_akta']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nama_ayah']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nama_ibu']) . "</td>";
            echo "<td>" . htmlspecialchars($row['kota_akta']) . "</td>";
            echo "<td>" . htmlspecialchars($row['alasan_perubahan']) . "</td>";
            echo "<td><button class='btn btn-primary' data-toggle='modal' data-target='#myModal" . $row['id'] . "'>Aksi</button></td>";
            echo "</tr>";

            // Modal untuk menampilkan detail data, serta tombol edit dan download
            echo "
            <div class='modal fade' id='myModal" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
              <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='myModalLabel'>Detail Data</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>
                  <div class='modal-body'>
                    <p><strong>Nama Lama:</strong> " . htmlspecialchars($row['nama_lama']) . "</p>
                    <p><strong>Nama Baru:</strong> " . htmlspecialchars($row['nama_baru']) . "</p>
                    <p><strong>Jenis Kelamin:</strong> " . htmlspecialchars($row['jenis_kelamin']) . "</p>
                    <p><strong>Tempat Lahir:</strong> " . htmlspecialchars($row['tempat_lahir']) . "</p>
                    <p><strong>Tanggal Lahir:</strong> " . htmlspecialchars($row['tanggal_lahir']) . "</p>
                    <p><strong>NIK:</strong> " . htmlspecialchars($row['nik']) . "</p>
                    <p><strong>Alamat KTP:</strong> " . htmlspecialchars($row['alamat_ktp']) . "</p>
                    <p><strong>Pekerjaan:</strong> " . htmlspecialchars($row['pekerjaan']) . "</p>
                    <p><strong>Agama:</strong> " . htmlspecialchars($row['agama']) . "</p>
                    <p><strong>Akta Kelahiran:</strong> " . htmlspecialchars($row['akta_kelahiran']) . "</p>
                    <p><strong>Tanggal Akta:</strong> " . htmlspecialchars($row['tanggal_akta']) . "</p>
                    <p><strong>Nama Ayah:</strong> " . htmlspecialchars($row['nama_ayah']) . "</p>
                    <p><strong>Nama Ibu:</strong> " . htmlspecialchars($row['nama_ibu']) . "</p>
                    <p><strong>Kota Akta:</strong> " . htmlspecialchars($row['kota_akta']) . "</p>
                    <p><strong>Alasan Perubahan:</strong> " . htmlspecialchars($row['alasan_perubahan']) . "</p>
                  </div>
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Tutup</button>
                    <a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning'>Edit</a>
                    <a href='download.php?id=" . $row['id'] . "' class='btn btn-success'>Download</a>
                  </div>
                </div>
              </div>
            </div>";
        }
        echo "</tbody></table>";
    } else {
        echo "Tidak ada data yang ditemukan.";
    }

    $conn->close();
}
?>

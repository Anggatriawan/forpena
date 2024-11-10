<?php
include 'koneksi.php'; // Menyertakan file koneksi

// Cek jika ada ID yang diterima
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data berdasarkan ID
    $sql = "SELECT * FROM permohonan_perubahan_nama WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak valid.";
    exit;
}

// Proses update data
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

    // Query untuk update data ke database
    $sqlUpdate = "UPDATE permohonan_perubahan_nama SET 
                    nama_lama = ?, 
                    jenis_kelamin = ?, 
                    tempat_lahir = ?, 
                    tanggal_lahir = ?, 
                    nik = ?, 
                    alamat_ktp = ?, 
                    pekerjaan = ?, 
                    agama = ?, 
                    akta_kelahiran = ?, 
                    tanggal_akta = ?, 
                    nama_ayah = ?, 
                    nama_ibu = ?, 
                    kota_akta = ?, 
                    nama_baru = ?, 
                    alasan_perubahan = ? 
                  WHERE id = ?";
    
    $stmtUpdate = $conn->prepare($sqlUpdate);
    $stmtUpdate->bind_param("sssssssssssssssi", $namaLama, $jenisKelamin, $tempatLahir, $tanggalLahir, $nik, $alamatKTP, $pekerjaan, $agama, $aktaKelahiran, $tanggalAkta, $namaAyah, $namaIbu, $kotaAkta, $namaBaru, $alasanPerubahan, $id);

    if ($stmtUpdate->execute()) {
        echo "Data berhasil diperbarui!";
    } else {
        echo "Error: " . $stmtUpdate->error;
    }

    $stmtUpdate->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Edit Data Permohonan Perubahan Nama</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label>Nama Lama</label>
            <input type="text" name="namaLama" class="form-control" value="<?php echo htmlspecialchars($row['nama_lama']); ?>" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenisKelamin" class="form-control" required>
                <option value="L" <?php if ($row['jenis_kelamin'] == 'L') echo 'selected'; ?>>Laki-laki</option>
                <option value="P" <?php if ($row['jenis_kelamin'] == 'P') echo 'selected'; ?>>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempatLahir" class="form-control" value="<?php echo htmlspecialchars($row['tempat_lahir']); ?>" required>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggalLahir" class="form-control" value="<?php echo htmlspecialchars($row['tanggal_lahir']); ?>" required>
        </div>
        <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control" value="<?php echo htmlspecialchars($row['nik']); ?>" required>
        </div>
        <div class="form-group">
            <label>Alamat KTP</label>
            <input type="text" name="alamatKTP" class="form-control" value="<?php echo htmlspecialchars($row['alamat_ktp']); ?>" required>
        </div>
        <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" value="<?php echo htmlspecialchars($row['pekerjaan']); ?>" required>
        </div>
        <div class="form-group">
            <label>Agama</label>
            <input type="text" name="agama" class="form-control" value="<?php echo htmlspecialchars($row['agama']); ?>" required>
        </div>
        <div class="form-group">
            <label>Akta Kelahiran</label>
            <input type="text" name="aktaKelahiran" class="form-control" value="<?php echo htmlspecialchars($row['akta_kelahiran']); ?>" required>
        </div>
        <div class="form-group">
            <label>Tanggal Akta</label>
            <input type="date" name="tanggalAkta" class="form-control" value="<?php echo htmlspecialchars($row['tanggal_akta']); ?>" required>
        </div>
        <div class="form-group">
            <label>Nama Ayah</label>
            <input type="text" name="namaAyah" class="form-control" value="<?php echo htmlspecialchars($row['nama_ayah']); ?>" required>
        </div>
        <div class="form-group">
            <label>Nama Ibu</label>
            <input type="text" name="namaIbu" class="form-control" value="<?php echo htmlspecialchars($row['nama_ibu']); ?>" required>
        </div>
        <div class="form-group">
            <label>Kota Akta</label>
            <input type="text" name="kotaAkta" class="form-control" value="<?php echo htmlspecialchars($row['kota_akta']); ?>" required>
        </div>
        <div class="form-group">
            <label>Nama Baru</label>
            <input type="text" name="namaBaru" class="form-control" value="<?php echo htmlspecialchars($row['nama_baru']); ?>" required>
        </div>
        <div class="form-group">
            <label>Alasan Perubahan</label>
            <textarea name="alasanPerubahan" class="form-control" required><?php echo htmlspecialchars($row['alasan_perubahan']); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui Data</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

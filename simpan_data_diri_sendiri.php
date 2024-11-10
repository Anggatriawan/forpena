<?php
$servername = "localhost";
$username = "root";  // Ganti dengan username database Anda
$password = "1234";  // Ganti dengan password database Anda
$dbname = "forpena";  // Nama database yang ingin digunakan

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Cek apakah data POST ada
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // Ambil data dari form dengan validasi
        $nama_lama = isset($_POST['nama']) ? trim($_POST['nama']) : null;
        $jenis_kelamin = isset($_POST['jenis_kelamin']) ? trim($_POST['jenis_kelamin']) : null;
        $tempat_lahir = isset($_POST['tempat_lahir']) ? trim($_POST['tempat_lahir']) : null;
        $tanggal_lahir = isset($_POST['tanggal_lahir']) ? trim($_POST['tanggal_lahir']) : null;
        $alamat_ktp = isset($_POST['alamat_ktp']) ? trim($_POST['alamat_ktp']) : null;
        $pekerjaan = isset($_POST['pekerjaan']) ? trim($_POST['pekerjaan']) : null;
        $pendidikan = isset($_POST['pendidikan']) ? trim($_POST['pendidikan']) : null;
        $agama = isset($_POST['agama']) ? trim($_POST['agama']) : null;
        $nama_baru = isset($_POST['nama_baru']) ? trim($_POST['nama_baru']) : null;
        $alasan_perubahan = isset($_POST['alasan_perubahan']) ? trim($_POST['alasan_perubahan']) : null;
        $nama_akta_kelahiran = isset($_POST['nama_akta_kelahiran']) ? trim($_POST['nama_akta_kelahiran']) : null;
        $nama_ibu = isset($_POST['nama_ibu']) ? trim($_POST['nama_ibu']) : null;
        $no_akta = isset($_POST['no_akta']) ? trim($_POST['no_akta']) : null;
        $nama_ayah = isset($_POST['nama_ayah']) ? trim($_POST['nama_ayah']) : null;
        $tgl_akta = isset($_POST['tgl_akta']) ? trim($_POST['tgl_akta']) : null;
        $kota_akta = isset($_POST['kota_akta']) ? trim($_POST['kota_akta']) : null;

        // Validasi data: pastikan tidak ada field yang null (atau sesuaikan validasi sesuai kebutuhan Anda)
        if ($nama_lama && $jenis_kelamin && $tempat_lahir && $tanggal_lahir && $alamat_ktp && $pekerjaan && $pendidikan && $agama && $nama_baru && $alasan_perubahan && $nama_akta_kelahiran && $nama_ibu && $no_akta && $nama_ayah && $tgl_akta && $kota_akta) {
            // SQL untuk menyimpan data
            $sql = "INSERT INTO permohonan_perubahan_nama_diri_sendiri 
                    (nama_lama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat_ktp, pekerjaan, pendidikan, agama, nama_baru, alasan_perubahan, nama_akta_kelahiran, nama_ibu, no_akta, nama_ayah, tgl_akta, kota_akta) 
                    VALUES 
                    (:nama_lama, :jenis_kelamin, :tempat_lahir, :tanggal_lahir, :alamat_ktp, :pekerjaan, :pendidikan, :agama, :nama_baru, :alasan_perubahan, :nama_akta_kelahiran, :nama_ibu, :no_akta, :nama_ayah, :tgl_akta, :kota_akta)";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nama_lama' => $nama_lama,
                ':jenis_kelamin' => $jenis_kelamin,
                ':tempat_lahir' => $tempat_lahir,
                ':tanggal_lahir' => $tanggal_lahir,
                ':alamat_ktp' => $alamat_ktp,
                ':pekerjaan' => $pekerjaan,
                ':pendidikan' => $pendidikan,
                ':agama' => $agama,
                ':nama_baru' => $nama_baru,
                ':alasan_perubahan' => $alasan_perubahan,
                ':nama_akta_kelahiran' => $nama_akta_kelahiran,
                ':nama_ibu' => $nama_ibu,
                ':no_akta' => $no_akta,
                ':nama_ayah' => $nama_ayah,
                ':tgl_akta' => $tgl_akta,
                ':kota_akta' => $kota_akta,
            ]);

            // Ambil ID terakhir yang baru saja dimasukkan
            $id = $pdo->lastInsertId();
            
            // Berikan response JSON
            echo json_encode(['status' => 'success', 'message' => 'Data berhasil disimpan.', 'id' => $id]);
            exit(); // Hentikan eksekusi setelah mengirim respons
        } else {
            // Jika data tidak lengkap, kirim respons JSON
            echo json_encode(['status' => 'error', 'message' => 'Data tidak lengkap. Silakan lengkapi semua data.']);
            exit(); // Hentikan eksekusi setelah mengirim respons
        }
    } else {
        http_response_code(405); // Method not allowed
        echo json_encode(['status' => 'error', 'message' => 'Metode tidak diizinkan.']);
        exit(); // Hentikan eksekusi setelah mengirim respons
    }
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
    exit(); // Hentikan eksekusi setelah mengirim respons
}
?>

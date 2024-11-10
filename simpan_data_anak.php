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
        $nama_anak = isset($_POST['nama_anak']) ? trim($_POST['nama_anak']) : null;
        $tempat_lahir_anak = isset($_POST['tempat_lahir_anak']) ? trim($_POST['tempat_lahir_anak']) : null;
        $tanggal_lahir_anak = isset($_POST['tanggal_lahir_anak']) ? trim($_POST['tanggal_lahir_anak']) : null;
        $jenis_kelamin_anak = isset($_POST['jenis_kelamin_anak']) ? trim($_POST['jenis_kelamin_anak']) : null;
        $alamat_anak = isset($_POST['alamat_anak']) ? trim($_POST['alamat_anak']) : null;
        $agama_anak = isset($_POST['agama_anak']) ? trim($_POST['agama_anak']) : null;

        $nomor_akta_kelahiran_anak = isset($_POST['nomor_akta_kelahiran_anak']) ? trim($_POST['nomor_akta_kelahiran_anak']) : null;
        $tanggal_akta_kelahiran_anak = isset($_POST['tanggal_akta_kelahiran_anak']) ? trim($_POST['tanggal_akta_kelahiran_anak']) : null;
        $kabupaten_kota_akta = isset($_POST['kabupaten_kota_akta']) ? trim($_POST['kabupaten_kota_akta']) : null;
        $pekerjaan_anak = isset($_POST['pekerjaan_anak']) ? trim($_POST['pekerjaan_anak']) : null;
        $pendidikan_anak = isset($_POST['pendidikan_anak']) ? trim($_POST['pendidikan_anak']) : null;

        // Data Perkawinan
        $tanggal_perkawinan = isset($_POST['tanggal_perkawinan']) ? trim($_POST['tanggal_perkawinan']) : null;
        $nomor_akta_perkawinan = isset($_POST['nomor_akta_perkawinan']) ? trim($_POST['nomor_akta_perkawinan']) : null;
        $pasangan = isset($_POST['pasangan']) ? trim($_POST['pasangan']) : null;

        $nama_pasangan = isset($_POST['nama_pasangan']) ? trim($_POST['nama_pasangan']) : null;
        $tanggal_akta_perkawinan = isset($_POST['tanggal_akta_perkawinan']) ? trim($_POST['tanggal_akta_perkawinan']) : null;
        $menikah_secara_agama = isset($_POST['menikah_secara_agama']) ? trim($_POST['menikah_secara_agama']) : null;

        // Data Perubahan Nama
        $nama_lama = isset($_POST['nama_lama']) ? trim($_POST['nama_lama']) : null;
        $nama_baru = isset($_POST['nama_baru']) ? trim($_POST['nama_baru']) : null;
        $alasan_perubahan = isset($_POST['alasan_perubahan']) ? trim($_POST['alasan_perubahan']) : null;

        // Validasi data: pastikan tidak ada field yang null
        if ($nama_anak && $tempat_lahir_anak && $tanggal_lahir_anak && $jenis_kelamin_anak && $nomor_akta_kelahiran_anak && $tanggal_akta_kelahiran_anak && $kabupaten_kota_akta && $tanggal_perkawinan && $nomor_akta_perkawinan && $nama_pasangan && $tanggal_akta_perkawinan && $menikah_secara_agama && $nama_lama && $nama_baru && $alasan_perubahan) {
            // SQL untuk menyimpan data
            $sql = "INSERT INTO permohonan_perubahan_nama_anak 
                    (nama_anak, tempat_lahir_anak, tanggal_lahir_anak, jenis_kelamin_anak, alamat_anak, agama_anak, nomor_akta_kelahiran_anak, tanggal_akta_kelahiran_anak, kabupaten_kota_akta, pekerjaan_anak, pendidikan_anak, tanggal_perkawinan, nomor_akta_perkawinan, pasangan, nama_pasangan, tanggal_akta_perkawinan, menikah_secara_agama, nama_lama, nama_baru, alasan_perubahan) 
                    VALUES 
                    (:nama_anak, :tempat_lahir_anak, :tanggal_lahir_anak, :jenis_kelamin_anak, :alamat_anak, :agama_anak, :nomor_akta_kelahiran_anak, :tanggal_akta_kelahiran_anak, :kabupaten_kota_akta, :pekerjaan_anak, :pendidikan_anak, :tanggal_perkawinan, :nomor_akta_perkawinan, :pasangan, :nama_pasangan, :tanggal_akta_perkawinan, :menikah_secara_agama, :nama_lama, :nama_baru, :alasan_perubahan)";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nama_anak' => $nama_anak,
                ':tempat_lahir_anak' => $tempat_lahir_anak,
                ':tanggal_lahir_anak' => $tanggal_lahir_anak,
                ':jenis_kelamin_anak' => $jenis_kelamin_anak,
                ':alamat_anak' => $alamat_anak,
                ':agama_anak' => $agama_anak,
                ':nomor_akta_kelahiran_anak' => $nomor_akta_kelahiran_anak,
                ':tanggal_akta_kelahiran_anak' => $tanggal_akta_kelahiran_anak,
                ':kabupaten_kota_akta' => $kabupaten_kota_akta,
                ':pekerjaan_anak' => $pekerjaan_anak,
                ':pendidikan_anak' => $pendidikan_anak,
                ':tanggal_perkawinan' => $tanggal_perkawinan,
                ':nomor_akta_perkawinan' => $nomor_akta_perkawinan,
                ':pasangan' => $pasangan,
                ':nama_pasangan' => $nama_pasangan,
                ':tanggal_akta_perkawinan' => $tanggal_akta_perkawinan,
                ':menikah_secara_agama' => $menikah_secara_agama,
                ':nama_lama' => $nama_lama,
                ':nama_baru' => $nama_baru,
                ':alasan_perubahan' => $alasan_perubahan
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

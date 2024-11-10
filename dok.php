<?php
// Pastikan variabel $id sudah ditentukan sebelumnya
if (!isset($id)) {
    echo json_encode(['status' => 'error', 'message' => 'ID tidak ditemukan.']);
    exit();
}

// Koneksi ke database untuk mengambil data permohonan
try {
    $pdo = new PDO("mysql:host=localhost;dbname=forpena;charset=utf8", "root", "1234");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Ambil data permohonan berdasarkan ID
    $stmt = $pdo->prepare("SELECT * FROM permohonan_perubahan_nama_diri_sendiri WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $permohonan = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$permohonan) {
        echo json_encode(['status' => 'error', 'message' => 'Data permohonan tidak ditemukan.']);
        exit();
    }

    // Membuat konten dokumen
    $documentContent = '
    <html>
    <head>
        <title>Dokumen Permohonan Perubahan Nama</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 20px; }
            h1 { text-align: center; }
            table { width: 100%; border-collapse: collapse; margin-top: 20px; }
            th, td { border: 1px solid #000; padding: 10px; text-align: left; }
            th { background-color: #f2f2f2; }
        </style>
    </head>
    <body>
        <h1>Dokumen Permohonan Perubahan Nama</h1>
        <table>
            <tr>
                <th>Nama Lama</th>
                <td>' . htmlspecialchars($permohonan['nama_lama']) . '</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>' . htmlspecialchars($permohonan['jenis_kelamin']) . '</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>' . htmlspecialchars($permohonan['tempat_lahir']) . '</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>' . htmlspecialchars($permohonan['tanggal_lahir']) . '</td>
            </tr>
            <tr>
                <th>Alamat KTP</th>
                <td>' . htmlspecialchars($permohonan['alamat_ktp']) . '</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>' . htmlspecialchars($permohonan['pekerjaan']) . '</td>
            </tr>
            <tr>
                <th>Pendidikan</th>
                <td>' . htmlspecialchars($permohonan['pendidikan']) . '</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>' . htmlspecialchars($permohonan['agama']) . '</td>
            </tr>
            <tr>
                <th>Nama Baru</th>
                <td>' . htmlspecialchars($permohonan['nama_baru']) . '</td>
            </tr>
            <tr>
                <th>Alasan Perubahan</th>
                <td>' . nl2br(htmlspecialchars($permohonan['alasan_perubahan'])) . '</td>
            </tr>
        </table>
        <p style="margin-top: 20px;">Dokumen ini dibuat sebagai bukti permohonan perubahan nama.</p>
    </body>
    </html>
    ';

    // Menyimpan konten ke file .html atau mengunduh sebagai file
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="dokumen_permohonan_' . $id . '.pdf"');

    // Load library TCPDF
    require_once 'path/to/tcpdf/tcpdf.php'; // Ganti dengan path yang sesuai

    // Buat instance TCPDF
    $pdf = new TCPDF();
    $pdf->AddPage();
    $pdf->writeHTML($documentContent, true, false, true, false, '');
    $pdf->Output('dokumen_permohonan_' . $id . '.pdf', 'D'); // Mengunduh file PDF
    exit();

} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Kesalahan saat mengakses database: ' . $e->getMessage()]);
    exit();
}

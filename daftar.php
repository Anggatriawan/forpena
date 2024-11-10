<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$servername = "localhost";
$username = "root";  // Ganti dengan username database Anda
$password = "1234";  // Ganti dengan password database Anda
$dbname = "forpena";  // Nama database yang ingin digunakan

try {
    // Koneksi ke database
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Ambil ID dari query string
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = intval($_GET['id']);  // Casting untuk keamanan

        // SQL untuk mengambil data berdasarkan ID
        $sql = "SELECT * FROM permohonan_perubahan_nama_anak WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Ambil data
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            // Tampilkan data dalam tabel
            echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
            echo "<div class='container mt-5'>";
            echo "<h1 class='text-center'>Berikut Detail Permohonan Perubahan Nama Anak</h1>";
            echo "<table class='table table-bordered table-striped mt-4'>";
            echo "<thead class='thead-dark'>";
            echo "<tr>";
            echo "<th>Nama Anak Yang Lama</th>";
            echo "<th>Nama Anak Yang Baru</th>";
            echo "<th>Alasan Perubahan</th>";
            echo "<th>Download Doc</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . htmlspecialchars($data['nama_lama']) . "</td>";
            echo "<td>" . htmlspecialchars($data['nama_baru']) . "</td>";
            echo "<td>" . htmlspecialchars($data['alasan_perubahan']) . "</td>";
            echo "<td><a href='download_anak.php?id=" . htmlspecialchars($data['id']) . "' class='btn btn-primary btn-sm download-btn'>Download</a></td>";
            echo "</tr>";
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        } else {
            // Data tidak ditemukan, kembali ke index.php
            header("Location: index.php");
            exit;
        }
    } else {
        echo "<p>ID tidak valid.</p>";
    }

    // Keterangan pendaftaran perkara
    echo "<div class='container mt-4'>";
    echo "<p>Buku Panduan Pendaftaran perkara elektronik, klik <a href='https://ecourt.mahkamahagung.go.id/' target='_blank'>di sini</a>.</p>";
    echo "<p>Video Tutorial Pendaftaran Secara Elektronik elektronik, klik <a href='https://ecourt.mahkamahagung.go.id/' target='_blank'>di sini</a>.</p>";

   // SELALU DI TAMPILKAN
   echo "<button id='toggleInstructions' class='btn btn-info'>Petunjuk Pendaftaran Perkara Elektronik</button>";
   echo "<div id='instructions' style='display:none;' class='mt-3 p-3 border border-info rounded'>";
   echo "<p>Silakan ikuti langkah-langkah berikut untuk mendaftar perkara:</p>";
   echo "<ul>";
   echo "<li>Langkah 1: Siapkan dokumen persyaratan, Termasuk Foto Copy nya</li>";
   echo "<li>Langkah 2: Nasegel Foto Copy Dokumen di kantor POS (contoh Foto Copy Ktp 1 Nasegel, Foto Copy KK 1 Nasegel Dst)</li>";
   echo "<li>Langkah 3: Pastikan Suart Permohonan dan dokumen yang ber Nasegel sudah di-scan</li>";
   echo "</ul>";
   echo "<p>Untuk mendaftar perkara secara elektronik, klik <a href='https://ecourt.mahkamahagung.go.id/' target='_blank'>di sini</a>.</p>";
   echo "</div>";
   echo "</div>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!-- Tambahkan jQuery dan Bootstrap JS untuk interaksi -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    // Sembunyikan #instructions pada awalnya
    $("#instructions").show();

    // Aksi toggle saat tombol diklik
    $("#toggleInstructions").click(function(){
        $("#instructions").toggle();
    });

    // Aksi pengalihan otomatis setelah klik tombol Download
    $(".download-btn").click(function(event){
        event.preventDefault();  // Mencegah aksi default
        var downloadUrl = $(this).attr("href");
        
        // Mengarahkan ke file download
        window.location.href = downloadUrl;

        // Mengalihkan ke index.php setelah 3 detik
       setTimeout(function() {
         alert('Terima kasih, data akan segera dihapus dan Anda akan diarahkan ke halaman utama.');
        window.location.href = 'index.php';
       }, 3000);
    });
});
</script>

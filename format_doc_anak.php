<?php
// Include autoload untuk PhpWord
require_once 'autoload.php';  // Pastikan ini mengarah ke autoload.php yang benar

use PhpOffice\PhpWord\PhpWord;

// Ambil data dari database berdasarkan ID yang dikirim dari simpan_data.php
$id = $_GET['id'];  // Ambil ID dari URL
$pdo = new PDO("mysql:host=localhost;dbname=forpena;charset=utf8", "root", "1234");
$stmt = $pdo->prepare("SELECT * FROM permohonan_perubahan_nama WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC);

if ($data) {
    // Buat instance PhpWord
    $phpWord = new PhpWord();

    // Buat dokumen Word
    $section = $phpWord->addSection();
    
    // Tambahkan isi surat sesuai format yang diinginkan
    $section->addText("Perihal: Permohonan Perubahan Nama di Akta Lahir", ['bold' => true]);
    $section->addText("Ponorogo, …………………..……..");
    $section->addText("Kepada :");
    $section->addText("Yth. Ketua Pengadilan Negeri Ponorogo di PONOROGO");
    $section->addText("Dengan Hormat,");
    $section->addText("Yang bertanda tangan di bawah ini :");
    $section->addText("Nama: " . $data['nama_baru']);
    $section->addText("NIK: " . $data['nik']);
    $section->addText("Tempat/Tanggal Lahir: " . $data['tempat_lahir'] . ", " . $data['tanggal_lahir']);
    $section->addText("Jenis Kelamin: " . $data['jenis_kelamin']);
    $section->addText("Pendidikan: " . $data['pekerjaan']);  // Ganti dengan pendidikan jika ada
    $section->addText("Agama: " . $data['agama']);
    $section->addText("Alamat: " . $data['alamat_ktp']);
    
    $section->addText("Untuk selanjutnya mohon disebut sebagai PEMOHON.");
    $section->addText("Dengan ini mengajukan permohonan yang isinya bermaksud sebagai berikut:");
    $section->addText("1. Bahwa, Pemohon dilahirkan di ……………. pada tanggal ………………… dari pasangan suami istri ……………… dan ………………, sebagaimana tercatat dalam Kutipan Akta Kelahiran Nomor: ……………………………………;");
    $section->addText("2. Bahwa, Nama pemohon, sebagaimana tercatat dalam Akta Kelahiran Nomor: ………………………... Adalah .......................;");
    $section->addText("3. Bahwa; saat ini Pemohon berkehendak untuk merubah nama Pemohon dalam Kutipan Akta Kelahiran Nomor: ....................... yang semula nama Pemohon bernama ........................................ dirubah menjadi ..............................................;");
    $section->addText("4. Bahwa; alasan Pemohon melakukan Perubahan nama Pemohon, adalah ..........................................................;");
    $section->addText("5. Bahwa; dikarenakan hal tersebut, maka Pemohon berkehendak untuk mengajukan Permohonan Perubahan nama pada Akta Kelahiran di Pengadilan Negeri Ponorogo;");
    $section->addText("6. Bahwa; atas dasar uraian tersebut di atas, Permohonan Perubahan nama Pemohon pada Kutipan Akta Kelahiran Nomor: ....................... yang dimohonkan Pemohon telah sesuai dengan ketentuan peraturan perundang-undangan terutama Pasal 52 (1) UU No. 23 Tahun 2006 tentang Administrasi Kependudukan yang berbunyi “Pencatatan perubahan nama dilaksanakan berdasarkan penetapan pengadilan negeri tempat pemohon.”;");
    $section->addText("7. Bahwa; untuk selanjutnya pemohon akan mengurus Perubahan Nama pada Akta Kelahiran Pemohon tersebut ke Kantor Dinas Kependudukan dan Pencatatan Sipil Kabupaten Ponorogo;");
    
    $section->addText("Berdasarkan hal-hal tersebut di atas, maka Pemohon mohon kepada Pengadilan Negeri Ponorogo untuk memeriksa perkara ini dan selanjutnya memberikan Penetapan yang amarnya berbunyi sebagai berikut:");
    
    $section->addText("PRIMAIR");
    $section->addText("1. Mengabulkan permohonan Pemohon;");
    $section->addText("2. Mengizinkan kepada Pemohon untuk merubah nama Pemohon dalam Kutipan Akta Kelahiran Nomor: …………………., yang semula bernama ................................................ dirubah menjadi …………………………….;");
    $section->addText("3. Memerintahkan kepada Pemohon untuk melaporkan perubahan nama Pemohon tersebut ke Dinas Kependudukan dan Pencatatan Sipil Kabupaten Ponorogo untuk dilakukan perbaikan pada Akta Kelahirannya;");
    $section->addText("4. Membebankan biaya yang timbul akibat adanya perkara permohonan ini kepada Pemohon;");
    
    $section->addText("SUBSIDAIR");
    $section->addText("Atau apabila Yang Mulia Ketua Pengadilan Negeri Ponorogo berpendapat lain mohon putusan yang seadil-adilnya.");
    
    $section->addText("Demikian surat permohonan ini kami buat, atas terkabulnya permohonan ini sebelumnya kami ucapkan terima kasih.");
    
    $section->addText("Hormat Kami,");
    $section->addText("Pemohon");
    $section->addText("(nama pemohon)"); // Mungkin Anda ingin mengganti ini dengan $data['nama_baru'] atau nilai lain
    
    // Simpan file dengan nama unik berdasarkan data
    $file = 'Permohonan_' . $data['nama_lama'] . '.docx'; // Ganti .doc menjadi .docx
    $path = __DIR__ . '/' . $file;

    // Simpan file
    try {
        $phpWord->save($path, 'Word2007');  // Simpan dalam format Word 2007
    } catch (Exception $e) {
        echo "Terjadi kesalahan saat menyimpan file: " . $e->getMessage();
        exit;
    }

   // Setelah berhasil menyimpan dan mendownload file
if (file_exists($path)) {
    // Header untuk download file
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=" . basename($file));
    header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
    header("Content-Transfer-Encoding: binary");
    header("Expires: 0");
    header("Cache-Control: must-revalidate");
    header("Pragma: public");
    header("Content-Length: " . filesize($path));
    flush();  // Kosongkan buffer output
    readfile($path);  // Kirim file ke user

    // Redirect ke daftar.php setelah 1 detik
    header("Location: redirect.php?id=" . $id);
    exit;  // Hentikan eksekusi script
} else {
    echo "File tidak ditemukan.";
    exit;  // Hentikan eksekusi script
}
}
?>
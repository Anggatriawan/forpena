<?php
require_once __DIR__ . '/vendor/autoload.php';
// Menggunakan kelas PhpWord
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Style\ListItem;
use PhpOffice\PhpWord\SimpleType\Jc;

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "forpena";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];

        // Query untuk mengambil data berdasarkan ID
        $sql = "SELECT * FROM permohonan_perubahan_nama_diri_sendiri WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            $phpWord = new PhpWord();
            $section = $phpWord->addSection();
            $tanggal = strftime('%d %B %Y', strtotime('2024-11-10'));

            $section->addText("Perihal: Permohonan Perubahan Nama di Akta Lahir", ['bold' => true]);

            // Menambahkan indentasi kanan untuk tanggal dan informasi lokasi
            $rightIndentStyle = ['indentation' => ['left' => 6000]];
            $section->addText("Ponorogo, " . $tanggal, [], $rightIndentStyle);
            $section->addText("Kepada:", [], $rightIndentStyle);
            $section->addText("Yth. Ketua Pengadilan Negeri Ponorogo", ['bold' => true], $rightIndentStyle);
            $section->addText("di_", [], $rightIndentStyle);
            $section->addText("PONOROGO", ['bold' => true], $rightIndentStyle);

            $section->addText("Dengan Hormat,");
            $section->addText("Yang bertanda tangan di bawah ini:");


            function formatTanggal($tanggal)
            {
                $dateObject = DateTime::createFromFormat('Y-m-d', $tanggal); // Sesuaikan dengan format input tanggal Anda
                return $dateObject ? $dateObject->format('d F Y') : $tanggal; // Mengembalikan tanggal yang telah diformat atau tanggal asli jika gagal
            }

            // Menambahkan data pemohon
            $section->addText("\tNama\t\t\t: " . htmlspecialchars($data['nama_lama']), null);
            $section->addText("\tTempat/Tanggal Lahir\t: " . htmlspecialchars($data['tempat_lahir']) . ", " . formatTanggal($data['tanggal_lahir']), null);
            $section->addText("\tJenis Kelamin\t\t: " . htmlspecialchars($data['jenis_kelamin']), null);
            $section->addText("\tPendidikan\t\t: " . htmlspecialchars($data['pendidikan']), null);
            $section->addText("\tPekerjaan\t\t: " . htmlspecialchars($data['pekerjaan']), null);
            $section->addText("\tAgama\t\t\t: " . htmlspecialchars($data['agama']), null);
            $section->addText("\tAlamat\t\t\t: " . htmlspecialchars($data['alamat_ktp']), null);
            $textRun = $section->addTextRun();
            $textRun->addText("Untuk selanjutnya mohon disebut sebagai ");
            $textRun->addText("PEMOHON", ['bold' => true]); // Membuat "PEMOHON" menjadi bold
            $section->addText("Dengan ini mengajukan permohonan yang isinya bermaksud sebagai berikut:");


            // Gaya list dengan penomoran
            $listStyle = [
                'listType' => \PhpOffice\PhpWord\Style\ListItem::TYPE_NUMBER, // Penomoran otomatis
                'level' => 0,  // Tingkat penomoran (level pertama)
                'alignment' => Jc::BOTH,  // Rata kanan kiri
                'indentation' => ['left' => 240, 'hanging' => 360] // Menambahkan indentasi lebih banyak pada teks
            ];

            // Gaya paragraf untuk rata kanan kiri
            $styleParagraph = [
                'alignment' => Jc::BOTH,  // Rata kanan kiri
            ];

            $styleParagraphJustify = [
                'alignment' => Jc::BOTH,
            ];
            // Fungsi untuk mengubah format tanggal
       

            // Menambahkan item list dengan penomoran dan rata kanan kiri
            $section->addListItem(
                "Bahwa; Pemohon dilahirkan di " . htmlspecialchars($data['tempat_lahir']) .
                    " pada tanggal " . formatTanggal($data['tanggal_lahir']) . " dari pasangan suami istri " .
                    htmlspecialchars($data['nama_ayah']) . " dan " . htmlspecialchars($data['nama_ibu']) .
                    ", sebagaimana tercatat dalam Kutipan Akta Kelahiran Nomor: " . htmlspecialchars($data['no_akta']) . ".",
                0,
                null,
                $listStyle,
                $styleParagraph
            );

            $section->addListItem(
                "Bahwa; Nama pemohon, sebagaimana tercatat dalam Akta Kelahiran Nomor: " .
                    htmlspecialchars($data['no_akta']) . " adalah " . htmlspecialchars($data['nama_lama']) . ".",
                0,
                null,
                $listStyle,
                $styleParagraph
            );

            $section->addListItem(
                "Bahwa; saat ini Pemohon berkehendak untuk merubah nama Pemohon dalam Kutipan Akta Kelahiran Nomor: " .
                    htmlspecialchars($data['no_akta']) . " yang semula nama Pemohon bernama " .
                    htmlspecialchars($data['nama_lama']) . " dirubah menjadi " . htmlspecialchars($data['nama_baru']) . ".",
                0,
                null,
                $listStyle,
                $styleParagraph
            );

            $section->addListItem("Bahwa; alasan Pemohon melakukan Perubahan nama Pemohon, adalah " .
                htmlspecialchars($data['alasan_perubahan']) . ".", 0, null, $listStyle, $styleParagraph);

            $section->addListItem(
                "Bahwa; dikarenakan hal tersebut, maka Pemohon berhendak untuk mengajukan Permohonan Perubahan nama pada Akta Kelahiran di Pengadilan Negeri Ponorogo;",
                0,
                null,
                $listStyle,
                $styleParagraph
            );

            $section->addListItem(
                "Bahwa; atas dasar uraian tersebut diatas, Permohonan Perubahan nama Pemohon pada Kutipan Akta Kelahiran Nomor: " .
                    htmlspecialchars($data['no_akta']) . " yang dimohonkan Pemohon telah sesuai dengan ketentuan peraturan perundang-undangan terutama Pasal 52 Ayat (1) UU No. 23 Tahun 2006 tentang Administrasi Kependudukan yang berbunyi “Pencatatan perubahan nama dilaksanakan berdasarkan penetapan pengadilan negeri tempat pemohon”;",
                0,
                null,
                $listStyle,
                $styleParagraph
            );

            $section->addListItem(
                "Bahwa; untuk selanjutnya pemohon akan mengurus Perubahan Nama pada Akta Kelahiran Pemohon tersebut ke Kantor Dinas Kependudukan dan Pencatatan Sipil Kabupaten Ponorogo;",
                0,
                null,
                $listStyle,
                $styleParagraph
            );

            // Menambahkan teks dengan rata kanan kiri
            $section->addText(
                "Berdasarkan hal-hal tersebut diatas, maka Pemohon mohon kepada Pengadilan Negeri Ponorogo untuk memeriksa perkara ini dan selanjutnya memberikan Penetapan yang amarnya berbunyi sebagai berikut:",
                null,
                $styleParagraphJustify
            );

            $section->addText("PRIMAIR", ['bold' => true]);

            // Gaya list untuk bagian bawah (dimulai dari awal)
            $listStyleBottom = [
                'listType' => \PhpOffice\PhpWord\Style\ListItem::TYPE_NUMBER,
                'numId' => 2  // Nomor ID baru untuk memulai dari 1 lagi
            ];

            // Menambahkan list di bagian bawah dengan penomoran dimulai dari awal
            $section->addListItem("Mengabulkan permohonan Pemohon;", 0, null, $listStyleBottom, $styleParagraph);
            $section->addListItem("Mengizinkan kepada Pemohon untuk merubah nama pemohon dalam Kutipan Akta Kelahiran Nomor: " .
                htmlspecialchars($data['no_akta']) . ", yang semula bernama " . htmlspecialchars($data['nama_lama']) .
                " di rubah menjadi " . htmlspecialchars($data['nama_baru']) . ";", 0, null, $listStyleBottom, $styleParagraph);
            $section->addListItem(
                "Memerintahkan kepada Pemohon untuk melaporkan perubahan nama Pemohon tersebut ke Dinas Kependudukan dan Pencatatan Sipil Kabupaten Ponorogo untuk dilakukan perbaikan pada Akta Kelahirannya;",
                0,
                null,
                $listStyleBottom,
                $styleParagraph
            );
            $section->addListItem(
                "Membebankan biaya yang timbul akibat adanya perkara permohonan ini kepada Pemohon;",
                0,
                null,
                $listStyleBottom,
                $styleParagraph
            );

            $section->addText("SUBSIDAIR", ['bold' => true]);
            $section->addText(
                "Atau apabila Yang Mulia Ketua Pengadilan Negeri Ponorogo berpendapat lain mohon putusan yang seadil adilnya.",
                null,
                $styleParagraphJustify
            );

            $section->addText(
                "Demikian surat permohonan ini kami buat, atas terkabulnya permohonan ini sebelumnya kami ucapkan terimakasih.",
                null,
                $styleParagraphJustify
            );


            // Atur indentasi dan alignment

            // Pengaturan alignment kanan dengan teks rata tengah
            $rightCenteredOptions = [
                'alignment' => Jc::CENTER, // Atur agar teks berada di tengah 
                'indentation' => ['left' => 7000] // Sesuaikan nilai untuk memposisikan teks ke kanan
            ];

            // Tambahkan teks dengan alignment center dan indentation di kanan
            $section->addText("Hormat Kami,", [], $rightCenteredOptions);
            $section->addText("Pemohon", [], $rightCenteredOptions);
            $section->addTextBreak(); // Tambahkan baris kosong sebagai jeda (enter)
            $section->addText("(" . htmlspecialchars($data['nama_lama']) . ")", [], $rightCenteredOptions);


            // Mengunduh file Word
            $fileName = "Permohonan_Perubahan_Nama_" . htmlspecialchars($data['nama_lama']) . ".docx";
            header("Content-Description: File Transfer");
            header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
            header("Content-Disposition: attachment; filename=\"" . $fileName . "\"");
            header("Expires: 0");
            header("Cache-Control: must-revalidate");
            header("Pragma: public");

            $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
            $objWriter->save("php://output");

            // Menghapus data permohonan setelah diunduh
           $deleteStmt = $pdo->prepare("DELETE FROM permohonan_perubahan_nama_diri_sendiri WHERE id = :id");
            $deleteStmt->execute([':id' => $id]);
            exit;
        } else {
            header("Location: index.php");
        }
    } else {
        echo "ID tidak valid.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

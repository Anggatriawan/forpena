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

        // Query untuk mengambil data berdasarkan ID untuk permohonan anak
        $sql = "SELECT * FROM permohonan_perubahan_nama_anak WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            $phpWord = new PhpWord();
            $section = $phpWord->addSection();

            setlocale(LC_TIME, 'id_ID.utf8');

            // Mendapatkan tanggal dalam format yang diinginkan
            $tanggal = strftime('%d %B %Y', strtotime('2024-11-10'));

            // Tambahkan teks tanggal dengan format yang diinginkan

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
                setlocale(LC_TIME, 'id_ID.utf8');

                $dateObject = DateTime::createFromFormat('Y-m-d', $tanggal); // Sesuaikan dengan format input tanggal Anda
                return $dateObject ? $dateObject->format('d F Y') : $tanggal; // Mengembalikan tanggal yang telah diformat atau tanggal asli jika gagal
            }
            // Menambahkan data pemohon
            $section->addText("\tNama Pemohon\t: " . htmlspecialchars($data['nama_anak']), null);
            $section->addText("\tTempat/Tanggal Lahir\t: " . htmlspecialchars($data['tempat_lahir_anak']) . ", " . formatTanggal($data['tanggal_lahir_anak']), null);
            $section->addText("\tJenis Kelamin\t\t: " . htmlspecialchars($data['jenis_kelamin_anak']), null);
            $section->addText("\tPendidikan\t\t: " . htmlspecialchars($data['pendidikan_anak']), null);
            $section->addText("\tPekerjaan\t\t: " . htmlspecialchars($data['pekerjaan_anak']), null);
            $section->addText("\tAgama\t\t\t: " . htmlspecialchars($data['agama_anak']), null);
            $section->addText("\tAlamat\t\t\t: " . htmlspecialchars($data['alamat_anak']), null);
            $textRun = $section->addTextRun();
            $textRun->addText("Untuk selanjutnya mohon disebut sebagai ");
            $textRun->addText("PEMOHON", ['bold' => true]); // Membuat "PEMOHON" menjadi bold
            $section->addText("Dengan ini mengajukan permohonan yang isinya bermaksud sebagai berikut:");

            // Gaya list dengan penomoran
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

            // Pastikan nilai tanggal ada di dalam $data['tanggal_akta_perkawinan']


            // Fungsi untuk mengubah format tanggal menjadi '10 November 2024'
       

            // Gunakan fungsi formatTanggal pada setiap elemen yang mengandung tanggal di $data
            $section->addListItem("Bahwa; Pemohon telah menikah secara agama " . htmlspecialchars($data['menikah_secara_agama']) .
                " dengan seorang " . htmlspecialchars($data['pasangan']) . " yang bernama " . htmlspecialchars($data['nama_pasangan']) .
                ", sebagaimana tertuang dalam Kutipan Akta Nikah Nomor: " . htmlspecialchars($data['nomor_akta_perkawinan']) .
                " tertanggal " . htmlspecialchars(formatTanggal($data['tanggal_akta_perkawinan'])) . ";", 0, null, $listStyle, $styleParagraph);

            $section->addListItem("Bahwa; dalam pernikahan tersebut, Pemohon dikaruniai anak " . htmlspecialchars($data['jenis_kelamin_anak']) .
                " yang diberi nama " . htmlspecialchars($data['nama_lama']) .
                ", yang lahir di " . htmlspecialchars($data['tempat_lahir_anak']) .
                " pada tanggal " . htmlspecialchars(formatTanggal($data['tanggal_lahir_anak'])) .
                ", sebagaimana tertuang dalam Kutipan Akta Kelahiran Nomor: " . htmlspecialchars($data['nomor_akta_kelahiran_anak']) .
                " yang dikeluarkan oleh Dinas Kependudukan Dan Catatan Sipil Kabupaten " . htmlspecialchars($data['kabupaten_kota_akta']) .
                " tertanggal " . htmlspecialchars(formatTanggal($data['tanggal_akta_kelahiran_anak'])) . ";", 0, null, $listStyle, $styleParagraph);

            // Tambahkan elemen-elemen lainnya sesuai format di atas
            $section->addListItem("Bahwa; saat ini Pemohon berkehendak untuk merubah nama anak Pemohon dalam Kutipan Akta Kelahiran Nomor: " . htmlspecialchars($data['nomor_akta_kelahiran_anak']) .
                " yang semula bernama " . htmlspecialchars($data['nama_lama']) . " dirubah menjadi " . htmlspecialchars($data['nama_baru']) . ";", 0, null, $listStyle, $styleParagraph);

            $section->addListItem("Bahwa; alasan Pemohon melakukan perubahan nama anak Pemohon adalah " . htmlspecialchars($data['alasan_perubahan']) . ";", 0, null, $listStyle, $styleParagraph);

            $section->addListItem("Bahwa; dikarenakan hal tersebut, maka Pemohon berhendak untuk mengajukan Permohonan Perubahan Nama Anak Pemohon pada Akta Kelahiran di Pengadilan Negeri Ponorogo;", 0, null, $listStyle, $styleParagraph);

            $section->addListItem("Bahwa; atas dasar uraian tersebut di atas, permohonan perubahan nama anak Pemohon pada Kutipan Akta Kelahiran Nomor: " . htmlspecialchars($data['nomor_akta_kelahiran_anak']) .
                " yang dimohonkan Pemohon telah sesuai dengan ketentuan peraturan perundang-undangan terutama Pasal 52 Ayat (1) UU No. 23 Tahun 2006 tentang Administrasi Kependudukan yang berbunyi 'Pencatatan perubahan nama dilaksanakan berdasarkan penetapan pengadilan negeri tempat pemohon';", 0, null, $listStyle, $styleParagraph);

            $section->addListItem("Bahwa; untuk selanjutnya Pemohon akan mengurus perubahan nama pada Akta Kelahiran Pemohon tersebut ke Kantor Dinas Kependudukan dan Pencatatan Sipil Kabupaten Ponorogo.", 0, null, $listStyle, $styleParagraph);

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
            // Menambahkan list baru di bagian bawah sesuai permintaan
            // Tambahkan pernyataan sesuai format yang diinginkan

            $section->addListItem("Mengabulkan permohonan Pemohon;", 0, null, $listStyleBottom, $styleParagraph);
            $section->addListItem("Mengizinkan Pemohon untuk melakukan perubahan nama anak kandung Pemohon yang semula bernama " . htmlspecialchars($data['nama_lama']) .
                " sebagaimana tertulis pada Kutipan Akta Kelahiran Nomor: " . htmlspecialchars($data['nomor_akta_kelahiran_anak']) .
                " menjadi " . htmlspecialchars($data['nama_baru']) . ";", 0, null, $listStyleBottom, $styleParagraph);
            $section->addListItem("Memerintahkan kepada Pemohon untuk melaporkan penetapan perubahan nama anak kandung Pemohon tersebut kepada Kantor Dinas Kependudukan dan Pencatatan Sipil Kabupaten Ponorogo untuk dilakukan perbaikan pada Akta Kelahirannya;", 0, null, $listStyleBottom, $styleParagraph);
            $section->addListItem("Membebankan biaya perkara kepada Pemohon;", 0, null, $listStyleBottom, $styleParagraph);
            $section->addText("SUBSIDAIR", ['bold' => true]);

            $section->addText(
                "Atau apabila Yang Mulia Ketua Pengadilan Negeri Ponorogo berpendapat lain mohon putusan yang seadil adilnya..",
                null,
                $styleParagraphJustify
            );

            $section->addText(
                "Demikian surat permohonan ini kami buat, atas terkabulnya permohonan ini sebelumnya kami ucapkan terimakasih.",
                null,
                $styleParagraphJustify
            );

            $rightCenteredOptions = [
                'alignment' => Jc::CENTER, // Atur agar teks berada di tengah 
                'indentation' => ['left' => 7000] // Sesuaikan nilai untuk memposisikan teks ke kanan
            ];

            // Tambahkan teks dengan alignment center dan indentation di kanan
            $section->addText("Hormat Kami,", [], $rightCenteredOptions);
            $section->addText("Pemohon", [], $rightCenteredOptions);
            $section->addTextBreak(); // Tambahkan baris kosong sebagai jeda (enter)
            $section->addText("(" . htmlspecialchars($data['nama_anak']) . ")", [], $rightCenteredOptions);


            // Menyimpan file docx
            $fileName = "Permohonan_Perubahan_Nama_anak_" . htmlspecialchars($data['nama_lama']) . ".docx";
            header("Content-Description: File Transfer");
            header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
            header("Content-Disposition: attachment; filename=\"" . $fileName . "\"");
            header("Expires: 0");
            header("Cache-Control: must-revalidate");
            header("Pragma: public");

            $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
            $objWriter->save("php://output");

            // Menghapus data permohonan setelah diunduh
          //  $deleteStmt = $pdo->prepare("DELETE FROM permohonan_perubahan_nama_anak WHERE id = :id");
           //     $deleteStmt->execute([':id' => $id]);
            exit;
        } else {
            echo "Data tidak ditemukan.";
        }
    } else {
        echo "ID tidak valid.";
    }
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}

<?php

session_start();

// Membatasi Halaman Sebelum Login
if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('Mohon Maaf Silakan Login Dulu Ya Mohon Maaf Lahir & Batin');
            document.location.href = 'login.php' ;
            </script>"; 
    exit;
        
}

require 'config/app.php';

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A2', 'No');
$sheet->setCellValue('B2', 'Kode');
$sheet->setCellValue('C2', 'Nama');
$sheet->setCellValue('D2', 'Jenis');
$sheet->setCellValue('E2', 'Tanggal Masuk');
$sheet->setCellValue('F2', 'Harga');

$data_buah = select("SELECT * FROM tabel_buah");

$no = 1;
$start = 3;

foreach ($data_buah as $buah) {
    $sheet->setCellValue('A' . $start, $no++);
    $sheet->setCellValue('B' . $start, $buah['kode']);
    $sheet->setCellValue('C' . $start, $buah['nama']);
    $sheet->setCellValue('D' . $start, $buah['jenis']);
    $sheet->setCellValue('E' . $start, $buah['tanggal_masuk']);
    $sheet->setCellValue('F' . $start, $buah['harga']);



    $start++;
}


$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet');
header('Content-Disposition: attachment;filename="Data Toko Buah.xlsx"');
readfile('hello world.xlsx');
unlink('hello world.xlsx');
exit;


?>
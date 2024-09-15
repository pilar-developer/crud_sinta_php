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
$sheet->setCellValue('A2', 'No. TA');
$sheet->setCellValue('B2', 'Judul');
$sheet->setCellValue('C2', 'Nama Mahasiswa');
$sheet->setCellValue('D2', 'Nama Pembimbing');

$data_ta = select("SELECT * FROM ta");

$no = 1;
$start = 3;

foreach ($data_ta as $ta) {
    $sheet->setCellValue('A' . $start, $no++);
    $sheet->setCellValue('B' . $start, $ta['nota']);
    $sheet->setCellValue('C' . $start, $ta['judul']);
    $sheet->setCellValue('D' . $start, $ta['mahasiswa']);
    $sheet->setCellValue('E' . $start, $ta['pembimbing']);



    $start++;
}


$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet');
header('Content-Disposition: attachment;filename="Data Tugas Akhir.xlsx"');
readfile('hello world.xlsx');
unlink('hello world.xlsx');
exit;


?>
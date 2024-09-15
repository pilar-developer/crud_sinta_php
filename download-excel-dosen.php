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
$sheet->setCellValue('B2', 'NIDN');
$sheet->setCellValue('C2', 'Nama');
$sheet->setCellValue('D2', 'Mata Kuliah');
$sheet->setCellValue('E2', 'Kelas');
$sheet->setCellValue('F2', 'Email');
$sheet->setCellValue('G2', 'Ruang');
$sheet->setCellValue('H2', 'No HP');

$data_dosen = select("SELECT * FROM dosen");

$no = 1;
$start = 3;

foreach ($data_dosen as $dosen) {
    $sheet->setCellValue('A' . $start, $no++);
    $sheet->setCellValue('B' . $start, $dosen['nidn']);
    $sheet->setCellValue('C' . $start, $dosen['nama']);
    $sheet->setCellValue('D' . $start, $dosen['mata_kuliah']);
    $sheet->setCellValue('E' . $start, $dosen['kelas']);
    $sheet->setCellValue('F' . $start, $dosen['email']);
    $sheet->setCellValue('G' . $start, $dosen['ruang']);
    $sheet->setCellValue('H' . $start, $dosen['nohp']);



    $start++;
}


$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet');
header('Content-Disposition: attachment;filename="Data Dosen.xlsx"');
readfile('hello world.xlsx');
unlink('hello world.xlsx');
exit;


?>
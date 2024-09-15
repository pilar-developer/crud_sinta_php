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
$sheet->setCellValue('B2', 'NIM');
$sheet->setCellValue('C2', 'Nama');
$sheet->setCellValue('D2', 'Jurusan');
$sheet->setCellValue('E2', 'Jenis Kelamin');
$sheet->setCellValue('F2', 'No Hp');
$sheet->setCellValue('G2', 'Email');
$sheet->setCellValue('H2', 'Alamat');

$data_mahasiswa = select("SELECT * FROM mahasiswa");

$no = 1;
$start = 3;

foreach ($data_mahasiswa as $mahasiswa) {
    $sheet->setCellValue('A' . $start, $no++);
    $sheet->setCellValue('B' . $start, $mahasiswa['nim']);
    $sheet->setCellValue('C' . $start, $mahasiswa['nama']);
    $sheet->setCellValue('D' . $start, $mahasiswa['jurusan']);
    $sheet->setCellValue('E' . $start, $mahasiswa['jk']);
    $sheet->setCellValue('F' . $start, $mahasiswa['nohp']);
    $sheet->setCellValue('G' . $start, $mahasiswa['email']);
    $sheet->setCellValue('H' . $start, $mahasiswa['alamat']);



    $start++;
}


$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet');
header('Content-Disposition: attachment;filename="Data Mahasiswa.xlsx"');
readfile('hello world.xlsx');
unlink('hello world.xlsx');
exit;


?>
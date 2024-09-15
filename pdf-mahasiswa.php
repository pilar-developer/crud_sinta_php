<?php

require __DIR__.'/vendor/autoload.php';
require 'config/app.php';


use Spipu\Html2Pdf\Html2Pdf;

$data_mahasiswa = select("SELECT * FROM mahasiswa");

$content .= '
<page>
        <table border="1" align="center">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>';

            $no = 1;
            foreach ($data_mahasiswa as $mahasiswa) {
                $content .= '
                    <tr>
                        <td>'. $no++.'</td>
                        <td>'. $mahasiswa['nim'] .'</td>
                        <td>'. $mahasiswa['nama'] .'</td>
                        <td>'. $mahasiswa['jurusan'] .'</td>
                        <td>'. $mahasiswa['jk'] .'</td>
                        <td>'. $mahasiswa['nohp'] .'</td>
                        <td>'. $mahasiswa['email'] .'</td>
                        <td>'. $mahasiswa['alamat'] .'</td>
                    </tr>
                ';
            }
        
        
$content .='
        </table>
</page>';

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($content);
ob_start();
$html2pdf->output('Laporan-mahasiswa.pdf');


?>
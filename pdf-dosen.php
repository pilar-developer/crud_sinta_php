<?php

require __DIR__.'/vendor/autoload.php';
require 'config/app.php';


use Spipu\Html2Pdf\Html2Pdf;

$data_dosen = select("SELECT * FROM dosen");

$content .= '
<page>
        <table border="1" align="center">
            <tr>
                <td>No</td>
                <td>NIDN</td>
                <td>Nama</td>
                <td>Mata Kuliah</td>
                <td>Kelas</td>
                <td>Email</td>
                <td>Ruang</td>
                <td>No HP</td>
            </tr>';

            $no = 1;
            foreach ($data_dosen as $dosen) {
                $content .= '
                    <tr>
                        <td>'. $no++.'</td>
                        <td>'. $dosen['nidn'] .'</td>
                        <td>'. $dosen['nama'] .'</td>
                        <td>'. $dosen['mata_kuliah'] .'</td>
                        <td>'. $dosen['kelas'] .'</td>
                        <td>'. $dosen['email'] .'</td>
                        <td>'. $dosen['ruang'] .'</td>
                        <td>'. $dosen['nohp'] .'</td>
                    </tr>
                ';
            }
        
        
$content .='
        </table>
</page>';

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($content);
ob_start();
$html2pdf->output('Laporan-dosen.pdf');


?>
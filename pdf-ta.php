<?php

require __DIR__.'/vendor/autoload.php';
require 'config/app.php';


use Spipu\Html2Pdf\Html2Pdf;

$data_ta = select("SELECT * FROM ta");

$content .= '
<page>
        <table border="1" align="center">
            <tr>
                <th>No</th>
                <th>No. TA</th>
                <th>Judul</th>
                <th>Nama Mahasiswa</th>
                <th>Nama Pembimbing</th>
            </tr>';

            $no = 1;
            foreach ($data_ta as $ta) {
                $content .= '
                    <tr>
                        <td>'. $no++.'</td>
                        <td>'. $ta['nota'] .'</td>
                        <td>'. $ta['judul'] .'</td>
                        <td>'. $ta['mahasiswa'] .'</td>
                        <td>'. $ta['pembimbing'] .'</td>
                    </tr>
                ';
            }
        
        
$content .='
        </table>
</page>';

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($content);
ob_start();
$html2pdf->output('Laporan-Tugas Akhir.pdf');


?>
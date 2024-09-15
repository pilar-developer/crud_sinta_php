<?php

require __DIR__.'/vendor/autoload.php';
require 'config/app.php';


use Spipu\Html2Pdf\Html2Pdf;

$data_buah = select("SELECT * FROM tabel_buah");

$content .= '
<page>
        <table border="1" align="center">
            <tr>
                <td>No</td>
                <td>Kode</td>
                <td>Nama</td>
                <td>Jenis</td>
                <td>Tanggal Masuk</td>
                <td>Harga</td>
            </tr>';

            $no = 1;
            foreach ($data_buah as $tabel_buah) {
                $content .= '
                    <tr>
                        <td>'. $no++.'</td>
                        <td>'. $tabel_buah['kode'] .'</td>
                        <td>'. $tabel_buah['nama'] .'</td>
                        <td>'. $tabel_buah['jenis'] .'</td>
                        <td>'. $tabel_buah['tanggal_masuk'] .'</td>
                        <td>'. $tabel_buah['harga'] .'</td>
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
$html2pdf->output('Laporan Buah.pdf');


?>
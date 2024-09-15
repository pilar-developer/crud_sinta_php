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

include 'config/app.php';

// Menerima Id Akun yang di pilih pengguna
$id_akun = (int)$_GET['id_akun'];

if (delete_akun($id_akun) > 0){
    echo "<script>
            alert('Data Akun Berhasil Dihapus');
            document.location.href = 'akun.php';
            </script>";
}else {
    echo "<script>
            alert('Data Akun Gagal Di Hapus');
            document.location.href = 'akun.php';
        </script>";
}
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
$id_buah = (int)$_GET['id_buah'];

if (delete_buah($id_buah) > 0){
    echo "<script>
            alert('Data Buah Berhasil Dihapus');
            document.location.href = 'buah.php';
            </script>";
}else {
    echo "<script>
            alert('Data Buah Gagal Di Hapus');
            document.location.href = 'buah.php';
        </script>";
}
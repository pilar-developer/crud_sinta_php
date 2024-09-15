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
$id = (int)$_GET['id'];

if (delete_ta($id) > 0){
    echo "<script>
            alert('Data TA Berhasil Dihapus');
            document.location.href = 'ta.php';
            </script>";
}else {
    echo "<script>
            alert('Data TA Gagal Di Hapus');
            document.location.href = 'ta.php';
        </script>";
}
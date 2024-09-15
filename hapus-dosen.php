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
$id_dosen = (int)$_GET['id_dosen'];

if (delete_dosen($id_dosen) > 0){
    echo "<script>
            alert('Data Dosen Berhasil Dihapus');
            document.location.href = 'dosen.php';
            </script>";
}else {
    echo "<script>
            alert('Data Dosen Gagal Di Hapus');
            document.location.href = 'dosen.php';
        </script>";
}
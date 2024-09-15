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
$id_mahasiswa = (int)$_GET['id_mahasiswa'];

if (delete_mahasiswa($id_mahasiswa) > 0){
    echo "<script>
            alert('Data Mahasiswa Berhasil Dihapus');
            document.location.href = 'mahasiswa.php';
            </script>";
}else {
    echo "<script>
            alert('Data Mahasiswa Gagal Di Hapus');
            document.location.href = 'mahasiswa.php';
        </script>";
}
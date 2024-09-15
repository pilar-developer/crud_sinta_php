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

include 'layout/header.php';

// $title = 'Daftar Mahasiswa';

// $data_barang = select("SELECT * FROM barang");

?>


    <div class="text-center container mt-5">
        <h1>SINTA</h1>
        <hr>
    </div>
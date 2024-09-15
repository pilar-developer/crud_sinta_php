<?php

session_start();

// membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('Mohon Maaf Silakan Login Dulu Ya Mohon Maaf Lahir & Batin');
            document.location.href = 'login.php' ;
            </script>"; 
    exit;
        
}

// kosongkan $_SESSION user Login
$_SESSION =[];

session_unset();
session_destroy();
header("Location: login.php")

?>
<?php

include 'config/app.php';


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
   <!-- datatables -->
    <link rel='stylesheet' href='https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css'>

    <!-- Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <!-- Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title><?= $title; ?></title>
</head>
  <body>
  <div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dosen.php">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ta.php">TA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buah.php">Toko Buah Sehat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="crud-modal.php">Modal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
    <div>
      <a class="navbar-brand" href="#"><?= $_SESSION['nama']; ?></a>
    </div>
  </div>
</nav>
  </div>
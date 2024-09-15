<?php

include 'config/app.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SINTA| Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets-template/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="assets-template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets-template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets-template/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets-template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="assets-template/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="assets-template/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets-template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets-template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets-template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="assets-template/dist/img/Logo SIU.png" alt="Logo SIU" height="70" width="70">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a class="brand-link">
                <img src="assets-template/dist/img/Logo SIU.png" alt="" class="brand-image elevation-3">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="assets-template/dist/img/arif.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a class="d-block" href="#"><?= $_SESSION['nama']; ?></a>
                        <!-- <a href="#" class="d-block">Muhamad Arif</a> -->
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-3">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="index.php" class="nav-link active">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-header">DAFTAR MENU</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Data Master
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="dosen.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Dosen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="mahasiswa.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Mahasiswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="ta.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data TA</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="buah.php" class="nav-link">
                                <i class="nav-icon fas fa-gift"></i>
                                <p>
                                    UAS Toko Buah Sehat
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="akun.php" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Akun
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://youtube.com/@AweWewewewe?si=_Qh2C6L2vtRLE5ad" class="nav-link">
                                <i class="nav-icon fas fa-thumbs-up"></i>
                                <p>
                                    YT Mampir Dulu Sebentar
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" onclick="return confirm('Yakin Ingin Logout?')" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
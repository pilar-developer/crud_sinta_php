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

$title = 'Detail Buah';

include 'layout/header.php';


// Mengambil Id Buah dari url
$id_buah = (int)$_GET['id_buah'];

 $buah = select("SELECT * FROM tabel_buah WHERE id_buah = $id_buah")[0];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Home</h1>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                
                <div class="">
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                            <div class="card-header">
                                <h1>Data <?= $buah['nama']; ?></h1>
                            </div>
                            <div class="card-header">
                            <a href="tambah-buah.php" class="btn btn-primary mb-1">
                                <i class='bx bxs-plus-circle bx-flashing-hover'></i>
                                Tambah
                            </a>
                            </div>
                            <!-- /.card-header -->
                            
                            <div class="card-body">
                                <table class="table table-bordered table-striped mt-3" id="MyTable">
                                <tr>
                                    <td>Kode</td>
                                    <td>: <?= $buah['kode']; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>: <?= $buah['nama']; ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis</td>
                                    <td>: <?= $buah['jenis']; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Masuk</td>
                                    <td>: <?= $buah['tanggal_masuk']; ?></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>: <?= $buah['harga']; ?></td>
                                </tr>
                                </table>

                                <a href="buah.php" class="btn btn-primary btn-sm" style="float: right ;">Kembali</a>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </section>
            </section>
        </div>
        <!-- /.content-wrapper -->
<!-- /.content-wrapper -->


<?php include 'layout/footer.php'; 

?>
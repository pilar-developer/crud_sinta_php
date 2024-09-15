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

$title = 'Daftar Tugas Akhir';

include 'layout/header.php';

    // Menampilkan Data TA
    $data_ta = select("SELECT * FROM ta ORDER BY id DESC");
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
                                <h1>Daftar Tugas Akhir</h1>
                            </div>
                            <div class="card-header">
                            <a href="tambah-ta.php" class="btn btn-primary mb-1">
                                <i class='bx bxs-plus-circle bx-flashing-hover'></i>
                                Tambah
                            </a>
                            <a href="download-excel-ta.php" class="btn btn-secondary mb-1">
                                <i class='bx bx-printer bx-flashing-hover'></i>
                                Print Excel
                            </a>
                            <a href="pdf-ta.php" class="btn btn-warning mb-1">
                                    <i class='bx bxs-file-pdf bx-flashing-hover'></i>
                                    Print PDF
                            </a>
                            </div>
                            <!-- /.card-header -->
                            
                            <div class="table-responsive">
                            <div class="card-body">
                                <table class="table table-bordered table-striped mt-3" id="MyTable">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>No. TA</td>
                                            <td>Judul</td>
                                            <td>Nama Mahasiswa</td>
                                            <td>Nama Dosen Pembimbing</td>
                                            <td>Opsi</td>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($data_ta as $ta) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $ta['nota']; ?></td>
                                                <td><?= $ta['judul']; ?></td>
                                                <td><?= $ta['mahasiswa']; ?></td>
                                                <td><?= $ta['pembimbing']; ?></td>
                                                <td>
                                                    <a href="detail-ta.php?id=<?= $ta['id']; ?>" class="btn btn-secondary btn-sm"><i class='bx bxs-detail bx-flashing-hover'></i>Detail</a>
                                                    <a href="ubah-ta.php?id=<?= $ta['id']; ?>" class="btn btn-success btn-sm" onlick="return confirm('Yakin Ingin Mengubah?');">
                                                        <i class='bx bxs-edit bx-flashing-hover'></i>
                                                        Edit
                                                    </a>
                                                    <a href="hapus-ta.php?id=<?= $ta['id']; ?>" class="btn btn-primary btn-sm" onlick="return confirm('Yakin Kamu Ingin Menghapusku???');">
                                                        <i class='bx bxs-trash-alt bx-flashing-hover'></i>
                                                        Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                </table>
                            </div>
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
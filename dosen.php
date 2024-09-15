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

$title = 'Daftar Dosen';

include 'layout/header.php';

    // Menampilkan Data Dosen
    $data_dosen = select("SELECT * FROM dosen ORDER BY id_dosen DESC");
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
                                <h1>Daftar Dosen</h1>
                            </div>
                            <div class="card-header">
                            <a href="tambah-dosen.php" class="btn btn-primary mb-1">
                                <i class='bx bxs-plus-circle bx-flashing-hover'></i>
                                Tambah
                            </a>
                            <a href="download-excel-dosen.php" class="btn btn-secondary mb-1">
                                <i class='bx bx-printer bx-flashing-hover'></i>
                                Print Excel
                            </a>
                            <a href="pdf-dosen.php" class="btn btn-warning mb-1">
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
                                        <td>NIDN</td>
                                        <td>Nama</td>
                                        <td>Mata Kuliah</td>
                                        <td>Kelas</td>
                                        <td>Email</td>
                                        <td>Ruang</td>
                                        <td>No HP</td>
                                        <td>Opsi</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($data_dosen as $dosen) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $dosen['nidn']; ?></td>
                                            <td><?= $dosen['nama']; ?></td>
                                            <td><?= $dosen['mata_kuliah']; ?></td>
                                            <td><?= $dosen['kelas']; ?></td>
                                            <td><?= $dosen['email']; ?></td>
                                            <td><?= $dosen['ruang']; ?></td>
                                            <td><?= $dosen['nohp']; ?></td>
                                            <td>
                                            <a href="detail-dosen.php?id_dosen=<?= $dosen['id_dosen']; ?>" class="btn btn-secondary btn-sm"><i class='bx bxs-detail bx-flashing-hover'></i>Detail</a>
                                            <a href="ubah-dosen.php?id_dosen=<?= $dosen['id_dosen']; ?>" class="btn btn-success btn-sm" onlick="return confirm('Yakin Ingin Mengubah?');">
                                                <i class='bx bxs-edit bx-flashing-hover'></i>
                                                Edit
                                            </a>
                                            <a href="hapus-dosen.php?id_dosen=<?= $dosen['id_dosen']; ?>" class="btn btn-primary btn-sm" onlick="return confirm('Yakin Kamu Ingin Menghapusku???');">
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
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

$title = 'Daftar Mahasiswa';

include 'layout/header.php';

    // Menampilkan Data Mahasiswa
    $data_mahasiswa = select("SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC");
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
                
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                            <div class="card-header">
                                <h1>Daftar Mahasiswa</h1>
                            </div>
                            <div class="card-header">
                            <a href="tambah-mahasiswa.php" class="btn btn-primary mb-1">
                                <i class='bx bxs-plus-circle bx-flashing-hover'></i>
                                Tambah
                            </a>
                            <a href="download-excel-mahasiswa.php" class="btn btn-secondary mb-1">
                                <i class='bx bx-printer bx-flashing-hover'></i>
                                Print Excel
                            </a>
                            <a href="pdf-mahasiswa.php" class="btn btn-warning mb-1">
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
                                        <td>NIM</td>
                                        <td>Nama</td>
                                        <td>Jurusan</td>
                                        <td>Jenis Kelamin</td>
                                        <td>No Hp</td>
                                        <td>Email</td>
                                        <td>Alamat</td>
                                        <td>Opsi</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($data_mahasiswa as $mahasiswa) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $mahasiswa['nim']; ?></td>
                                            <td><?= $mahasiswa['nama']; ?></td>
                                            <td><?= $mahasiswa['jurusan']; ?></td>
                                            <td><?= $mahasiswa['jk']; ?></td>
                                            <td><?= $mahasiswa['nohp']; ?></td>
                                            <td><?= $mahasiswa['email']; ?></td>
                                            <td><?= $mahasiswa['alamat']; ?></td>
                                            <td>
                                                <a href="detail-mahasiswa.php?id_mahasiswa=<?= $mahasiswa['id_mahasiswa']; ?>" class="btn btn-secondary btn-sm"><i class='bx bxs-detail bx-flashing-hover'></i>Detail</a>
                                                <a href="ubah-mahasiswa.php?id_mahasiswa=<?= $mahasiswa['id_mahasiswa']; ?>" class="btn btn-success btn-sm" onlick="return confirm('Yakin Ingin Mengubah?');">
                                                    <i class='bx bxs-edit bx-flashing-hover'></i>
                                                    Edit
                                                </a>
                                                <a href="hapus-mahasiswa.php?id_mahasiswa=<?= $mahasiswa['id_mahasiswa']; ?>" class="btn btn-primary btn-sm" onlick="return confirm('Yakin Kamu Ingin Menghapusku???');">
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
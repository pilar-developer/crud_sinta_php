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

$title = 'Daftar Akun';

include 'layout/header.php';

$data_akun = select("SELECT * FROM akun");

// jika tombol tambah ditekan jalankan script berikut
if(isset($_POST['tambah'])){
    if(create_akun($_POST) > 0) {
    echo "<script>
    alert('Data Akun Berhasil Ditambahkan');
    document.location.href = 'akun.php';
  </script>";
  } else {
  echo "<script>
    alert('Data Akun Gagal Ditambahkan');
    document.location.href = 'akun.php';
  </script>";
  }
}

// jika tombil Ubah ditekan jalankan script berikut
if(isset($_POST['ubah'])){
    if(create_akun($_POST) > 0) {
    echo "<script>
    alert('Data Akun Berhasil Diubah');
    document.location.href = 'akun.php';
  </script>";
  } else {
  echo "<script>
    alert('Data Akun Gagal Diubah');
    document.location.href = 'akun.php';
  </script>";
  }
}

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
                                <h1>Daftar Akun</h1>
                            </div>

                            <!-- /.card-header -->
                            
                            <div class="card-body">
                            <a href="tambah-akun.php" class="btn btn-primary mb-1">
                                <i class='bx bxs-plus-circle bx-flashing-hover'></i>
                                Tambah
                            </a>
                                <table class="table table-bordered table-striped mt-3" id="MyTable">
                                    <thead>
                                      <tr>
                                        <td>No</td>
                                        <td>Nama</td>
                                        <td>Username</td>
                                        <td>Email</td>
                                        <td>Password</td>
                                        <td>Opsi</td>
                                      </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($data_akun as $akun) : ?>
                                      <tr>
                                          <td><?= $no++; ?></td>
                                          <td><?= $akun['nama']; ?></td>
                                          <td><?= $akun['username']; ?></td>
                                          <td><?= $akun['email']; ?></td>
                                          <td>Password Ter-enskripsi</td>
                                          <td class="text-center">
                                          <a href="ubah-akun.php?id_akun=<?= $akun['id_akun']; ?>" class="btn btn-success btn-sm" onlick="return confirm('Yakin Ingin Mengubah?');">
                                                    <i class='bx bxs-edit bx-flashing-hover'></i>
                                                    Edit
                                                </a>
                                                <a href="hapus-akun.php?id_akun=<?= $akun['id_akun']; ?>" class="btn btn-primary btn-sm" onlick="return confirm('Yakin Kamu Ingin Menghapusku???');">
                                                    <i class='bx bxs-trash-alt bx-flashing-hover'></i>
                                                    Hapus
                                                </a>
                                          </td>
                                      </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                                </table>
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


<?php include 'layout/footer.php'; 

?>
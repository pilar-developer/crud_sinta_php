<?php
session_start();
// membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('login dulu sayang');
            document.location.href = 'login.php' ;
            </script>"; 
    exitdet;
        
}
$title = "ubah akun";
include 'layout/header.php';
// check apakah tombo; tambah ditekan
if (isset($_POST['ubah'])){
    if (update_akun($_POST) > 0) {
        echo "<script>
                alert('Data akun Berhasil Diubahkan');
                document.location.href = 'akun.php';
             </script>";
    } else {
        echo "<script>
                alert('Data akun Gagal Diubahkan');
                document.location.href = 'akun.php';
             </script>";
    }
}
$id_akun = (int)$_GET ['id_akun'];

$akun = select("SELECT * FROM akun WHERE id_akun = $id_akun")[0];
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Akun</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-mt-5">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1>Tabel Data Ubah Akun</h1>
                <hr>
        <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_akun"value="<?= $akun['id_akun'] ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="Text" class="form-control" id="nama" name="nama" placeholder="Nama" 
            required value="<?=$akun['nama'] ?>">
        </div>


        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="Text" class="form-control" id="username" name="username" placeholder="Username"
            required value="<?=$akun['username'] ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="Text" class="form-control" id="email" name="email" placeholder="Alamat Email"
            required value="<?=$akun['email'] ?>">
        </div>
        <div class="mb-3">
            <label for="password">Password <small>(Masukkan Password Baru/Lama)</small></label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required minlength="8">
        </div>
        <div class="row">
        <div class="mb-3 col-6">
            <label for="level" class="form-label">Level</label>
            <select name="level" id="level" class="form-control" required>
                <?php $level= $dosen['level']; ?>
                <option value="Admin"<?= $level == 'Admin'? 'selected' : null ?>>Admin</option>
                <option value="Operator"<?= $level == 'Operator'? 'selected' : null ?>>Operator</option>
            </select>
        </div>
        </div>

        <button type= "submit" name="ubah" class ="btn btn-primary" style="float: right;">Tambah </button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
<?php include 'layout/footer.php'?>
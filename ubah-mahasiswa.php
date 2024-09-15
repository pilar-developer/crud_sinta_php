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

$title = "Ubah Mahasiswa";
include 'layout/header.php';
// check apakah tombol ubah ditekan
if (isset($_POST['ubah'])){
    if (update_mahasiswa($_POST) > 0) {
        echo "<script>
                alert('Data Mahasiswa Berhasil Diubahkan');
                document.location.href = 'mahasiswa.php';
             </script>";
    } else {
        echo "<script>
                alert('Data Mahasiswa Gagal Diubahkan');
                document.location.href = 'mahasiswa.php';
             </script>";
    }
}
// Mengambil id mahasiswa dari url
$id_mahasiswa = (int)$_GET ['id_mahasiswa'];

$mahasiswa = select("SELECT * FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa")[0];
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
                                <h1>Ubah Mahasiswa</h1>
                            </div>
                            <!-- /.card-header -->
                            
                            <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_mahasiswa"value="<?= $mahasiswa['id_mahasiswa'] ?>">
                                    <div class="mb-3">
                                        <label for="nim" class="form-label">NIM</label>
                                        <input type="text" class="form-control" id="nim"  name="nim" placeholder="NIM"
                                        required value="<?=$mahasiswa['nim'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap Mahasiswa" 
                                        required value="<?=$mahasiswa['nama'] ?>">
                                    </div>
                                    <div class="row">
                                    <div class="mb-3 col-6">
                                        <label for="jurusan" class="form-label">Jurusan</label>
                                        <select name="jurusan" id="jurusan" class="form-control" required>
                                        <?php $jurusan= $mahasiswa['jurusan']; ?>
                                            <option value="Teknik Informatika" <?= $jurusan == 'Teknik Informatika'? 'selected' : null ?>> Teknik Informatika</option>
                                            <option value="Sistem Informasi"<?= $jurusan == 'Sistem Informasi'? 'selected' : null ?>> Sistem Informasi</option>
                                            <option value="Komputerisasi Akutansi"<?= $jurusan == 'Komputerisasi Akutansi'? 'selected' : null ?>> Komputerisasi Akutansi</option>
                                            <option value="Manajement Informatika"<?= $jurusan == 'Manajement Informatika'? 'selected' : null ?>> Manajement Informatika</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="jk" class="form-label">Jenis Kelamin</label>
                                        <select name="jk" id="jk" class="form-control"required>
                                            <?php $jk= $mahasiswa['jk']; ?>
                                            <option value="Laki-Laki"<?= $jk == 'Laki-Laki'? 'selected' : null ?>> Laki-Laki</option>
                                            <option value="Perempuan"<?= $jk == 'Perempuan'? 'selected' : null ?>> Perempuan</option>
                                        </select>
                                     </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nohp" class="form-label">No hp</label>
                                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor HP/WA"
                                        required value="<?=$mahasiswa['nohp'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email"
                                        required value="<?=$mahasiswa['email'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap"
                                        required value="<?=$mahasiswa['alamat'] ?>">
                                    </div>
                                    <button type= "submit" name="ubah" class ="btn btn-primary" style="float: right;"> Ubah </button>
                                </form>
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

<?php include 'layout/footer.php'

?>
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

$title = 'Tambah Mahasiswa';

include 'layout/header.php';

// check apakah tombol; tambah ditekan
if (isset($_POST['tambah'])){
    if (create_mahasiswa($_POST) > 0) {
        echo "<script>
                alert('Data Mahasiswa Berhasil Ditambahkan');
                document.location.href = 'mahasiswa.php';
             </script>";
    } else {
        echo "<script>
                alert('Data Mahasiswa Gagal Ditambahkan');
                document.location.href = 'mahasiswa.php';
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
                                <h1>Tambah Data</h1>
                            </div>
                            
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="col-sm-5">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="text" class="form-control" id="nim"  name="nim" placeholder="NIM"
                                    required>
                                </div>
                                <div class="col-sm-5">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap Mahasiswa" 
                                    required>
                                </div>
                                <div class="row">
                                <div class="col-sm-5">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <select name="jurusan" id="jurusan" class="form-control" required>
                                        <option value="">Pilih Jurusan</option>
                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                        <option value="Sistem Informasi">Sistem Informasi</option>
                                        <option value="Komputerisasi Akutansi">Komputerisasi Akutansi</option>
                                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                                    </select>
                                </div>
                                <div class="col-sm-5">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <select name="jk" id="jenis_kelamin" class="form-control"required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-sm-5">
                                    <label for="nohp" class="form-label">No hp</label>
                                    <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor HP/WA"
                                    required>
                                </div>
                                <div class="col-sm-5">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email"
                                    required>
                                </div>
                                <div class="col-sm-5">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap"
                                    required>
                                </div>
                                <div class="col-sm-5">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto" placeholder="Upload Foto Diri..."
                                    required>
                                </div>

                                <button type= "submit" name="tambah" class ="btn btn-primary" style="float: right;"> Tambah </button>
                            </form>
                        </div>
                    </div>
                    <!-- /.row -->
                </section>
            </section>
</div>
<!-- /.content-wrapper -->


<?php include 'layout/footer.php'

?>
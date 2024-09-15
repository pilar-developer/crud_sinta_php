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

$title = "Ubah Buah";
include 'layout/header.php';
// check apakah tombol ubah ditekan
if (isset($_POST['ubah'])){
    if (update_ta($_POST) > 0) {
        echo "<script>
                alert('Data TA Berhasil Diubahkan');
                document.location.href = 'ta.php';
             </script>";
    } else {
        echo "<script>
                alert('Data TA Gagal Diubahkan');
                document.location.href = 'ta.php';
             </script>";
    }
}
// Mengambil id TA dari url
$id = (int)$_GET ['id'];

$ta = select("SELECT * FROM ta WHERE id = $id")[0];
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
                                <h1>Ubah Tugas Akhir</h1>
                            </div>
                            <!-- /.card-header -->
                            
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id"value="<?= $ta['id'] ?>">
                                    <div class="mb-3">
                                        <label for="nota" class="form-label">No. TA</label>
                                        <input type="text" class="form-control" id="nota"  name="nota" placeholder="nota"
                                        required value="<?=$ta['nota'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" 
                                        required value="<?=$ta['judul'] ?>">
                                    </div>
                                    <div class="row">
                                    </div>
                                    <div class="mb-3">
                                        <label for="mahasiswa" class="form-label">Nama Mahasiswa</label>
                                        <input type="text" class="form-control" id="mahasiswa" name="mahasiswa" placeholder="Nama Mahasiswa"
                                        required value="<?=$ta['mahasiswa'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pembimbing" class="form-label">Nama Pembimbing</label>
                                        <input type="text" class="form-control" id="pembimbing" name="pembimbing" placeholder="Nama Pembimbing"
                                        required value="<?=$ta['pembimbing'] ?>">
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


<?php include 'layout/footer.php'

?>
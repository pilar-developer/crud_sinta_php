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

$title = 'Tambah Data TA';

include 'layout/header.php';

// check apakah tombol; tambah ditekan
if (isset($_POST['tambah'])){
    if (create_ta($_POST) > 0) {
        echo "<script>
                alert('Data TA Berhasil Ditambahkan');
                document.location.href = 'ta.php';
             </script>";
    } else {
        echo "<script>
                alert('Data TA Gagal Ditambahkan');
                document.location.href = 'ta.php';
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
                                <div class="mb-3">
                                    <label for="nota" class="form-label">No. TA</label>
                                    <input type="number" class="form-control" name="nota" placeholder="No Tugas Akhir" 
                                    required>
                                </div>
                                </div>
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Judul"
                                    required>
                                </div>
                                <div class="mb-3">
                                    <label for="mahasiswa" class="form-label">Mahasiswa</label>
                                    <input type="text" class="form-control" name="mahasiswa" placeholder="Nama Mahasiswa"
                                    required>
                                </div>
                                <div class="mb-3">
                                    <label for="pembimbing" class="form-label">Pembimbing</label>
                                    <input type="text" class="form-control" name="pembimbing" placeholder="Nama Pembimbing"
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
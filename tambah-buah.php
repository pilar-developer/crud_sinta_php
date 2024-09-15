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

$title = 'Tambah Data Buah';

include 'layout/header.php';

// check apakah tombol; tambah ditekan
if (isset($_POST['tambah'])){
    if (create_buah($_POST) > 0) {
        echo "<script>
                alert('Data Buah Berhasil Ditambahkan');
                document.location.href = 'buah.php';
             </script>";
    } else {
        echo "<script>
                alert('Data Buah Gagal Ditambahkan');
                document.location.href = 'buah.php';
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
                                    <label for="kode" class="form-label">Kode</label>
                                    <input type="text" class="form-control" id="kode"  name="kode" placeholder="Kode"
                                    required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Buah" 
                                    required>
                                </div>
                                <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="jenis" class="form-label">Jenis</label>
                                    <select name="jenis" id="jenis" class="form-control" required>
                                        <option value="">-- Pilih Jenis Buah--</option>
                                        <option value="Impor">Impor</option>
                                        <option value="Lokal">Lokal</option>
                                    </select>
                                </div>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" placeholder="Tanggal Masuk"
                                    required>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Per Kilo"
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
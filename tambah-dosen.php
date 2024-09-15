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

$title = 'Tambah Dosen';

include 'layout/header.php';

// check apakah tombol; tambah ditekan
if (isset($_POST['tambah'])){
    if (create_dosen($_POST) > 0) {
        echo "<script>
                alert('Data Dosen Berhasil Ditambahkan');
                document.location.href = 'dosen.php';
             </script>";
    } else {
        echo "<script>
                alert('Data Dosen Gagal Ditambahkan');
                document.location.href = 'dosen.php';
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
                                    <label for="nidn" class="form-label">NIDN</label>
                                    <input type="text" class="form-control" id="nidn"  name="nidn" placeholder="NIDN"
                                    required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap Dosen" 
                                    required>
                                </div>
                                <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
                                    <select name="mata_kuliah" id="mata_kuliah" class="form-control" required>
                                        <option value="">-- Pilih Mata Kuliah--</option>
                                        <option value="Perancangan & Pemrograman Web">Perancangan & Pemrograman Web</option>
                                        <option value="Mobile Programming">Mobile Programming</option>
                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                        <option value="Multimedia">Multimedia</option>
                                        <option value="Interaksi Manusia & Komputer">Interaksi Manusia & Komputer</option>
                                        <option value="Basis Data">Basis Data</option>
                                        <option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Objek</option>
                                        <option value="Pemahaman Etika Beragama">Pemahaman Etika Beragama</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="kelas" class="form-label">Kelas</label>
                                    <select name="kelas" id="kelas" class="form-control"required>
                                        <option value="">-- Pilih Kelas--</option>
                                        <option value="TI20R1">TI20R1</option>
                                        <option value="TI20R2">TI20R2</option>
                                        <option value="TI20R3">TI20R3</option>
                                        <option value="TI21R1">TI21R1</option>
                                        <option value="TI21R2">TI21R2</option>
                                        <option value="SI21R1">SI21R1</option>
                                        <option value="SI21R2">SI21R2</option>
                                        <option value="MI21">MI21</option>
                                        <option value="KA21">KA21</option>
                                        <option value="TI22R1">TI22R1</option>
                                        <option value="SI22R1">SI22R1</option>
                                    </select>
                                </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email"
                                    required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="ruang" class="form-label">Ruang</label>
                                    <select name="ruang" id="ruang" class="form-control" required>
                                        <option value="">-- Pilih Ruangan --</option>
                                        <option value="Labkom 1">Labkom 1</option>
                                        <option value="Labkom 2">Labkom 2</option>
                                        <option value="Labkom 3">Labkom 3</option>
                                        <option value="Labkom 4">Labkom 4</option>
                                        <option value="L001">L001</option>
                                        <option value="L002">L002</option>
                                        <option value="L003">L003</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nohp" class="form-label">No hp</label>
                                    <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor HP/WA"
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
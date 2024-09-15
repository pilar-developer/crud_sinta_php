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

$title = "Ubah Dosen";
include 'layout/header.php';
// check apakah tombol ubah ditekan
if (isset($_POST['ubah'])){
    if (update_dosen($_POST) > 0) {
        echo "<script>
                alert('Data Dosen Berhasil Diubahkan');
                document.location.href = 'dosen.php';
             </script>";
    } else {
        echo "<script>
                alert('Data Dosen Gagal Diubahkan');
                document.location.href = 'dosen.php';
             </script>";
    }
}
// Mengambil id mahasiswa dari url
$id_dosen = (int)$_GET ['id_dosen'];

$dosen = select("SELECT * FROM dosen WHERE id_dosen = $id_dosen")[0];
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
                                <h1>Ubah Dosen</h1>
                            </div>
                            <!-- /.card-header -->
                            
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id_dosen"value="<?= $dosen['id_dosen'] ?>">
                                    <div class="mb-3">
                                        <label for="nidn" class="form-label">NIDN</label>
                                        <input type="text" class="form-control" id="nidn"  name="nidn" placeholder="NIDN"
                                        required value="<?=$dosen['nidn'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap Dosen" 
                                        required value="<?=$dosen['nama'] ?>">
                                    </div>
                                    <div class="row">
                                    <div class="mb-3 col-6">
                                        <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
                                        <select name="mata_kuliah" id="mata_kuliah" class="form-control" required>
                                        <?php $mata_kuliah= $dosen['mata_kuliah']; ?>
                                            <option value="Perancangan & Pemrograman Web" <?= $mata_kuliah == 'Perancangan & Pemrograman Web'? 'selected' : null ?>>Perancangan & Pemrograman Web</option>
                                            <option value="Mobile Programming"<?= $mata_kuliah == 'Mobile Programming'? 'selected' : null ?>>Mobile Programming</option>
                                            <option value="Rekayasa Perangkat Lunak"<?= $mata_kuliah == 'Rekayasa Perangkat Lunak'? 'selected' : null ?>>Rekayasa Perangkat Lunak</option>
                                            <option value="Multimedia"<?= $mata_kuliah == 'Multimedia'? 'selected' : null ?>>Multimedia</option>
                                            <option value="Interaksi Manusia & Komputer"<?= $mata_kuliah == 'Interaksi Manusia & Komputer'? 'selected' : null ?>>Interaksi Manusia & Komputer</option>
                                            <option value="Basis Data"<?= $mata_kuliah == 'Basis Data'? 'selected' : null ?>>Basis Data</option>
                                            <option value="Pemrograman Berorientasi Objek"<?= $mata_kuliah == 'Pemrograman Berorientasi Objek'? 'selected' : null ?>>Pemrograman Berorientasi Objek</option>
                                            <option value="Pemahaman Etika Beragama"<?= $mata_kuliah == 'Pemahaman Etika Beragama'? 'selected' : null ?>>Pemahaman Etika Beragama</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="kelas" class="form-label">Kelas</label>
                                        <select name="kelas" id="kelas" class="form-control"required>
                                            <?php $kelas= $dosen['kelas']; ?>
                                            <option value="TI20R1"<?= $kelas == 'TI20R1'? 'selected' : null ?>>TI20R1</option>
                                            <option value="TI20R2"<?= $kelas == 'TI20R2'? 'selected' : null ?>>TI20R2</option>
                                            <option value="TI20R3"<?= $kelas == 'TI20R3'? 'selected' : null ?>>TI20R3</option>
                                            <option value="TI21R1"<?= $kelas == 'TI21R1'? 'selected' : null ?>>TI21R1</option>
                                            <option value="TI21R2"<?= $kelas == 'TI21R2'? 'selected' : null ?>>TI21R2</option>
                                            <option value="SI21R1"<?= $kelas == 'SI21R1'? 'selected' : null ?>>SI21R1</option>
                                            <option value="SI21R2"<?= $kelas == 'SI21R2'? 'selected' : null ?>>SI21R2</option>
                                            <option value="MI21"<?= $kelas == 'MI21'? 'selected' : null ?>>MI21</option>
                                            <option value="KA21"<?= $kelas == 'KA21'? 'selected' : null ?>>KA21</option>
                                            <option value="TI22R1"<?= $kelas == 'TI22R1'? 'selected' : null ?>>TI22R1</option>
                                            <option value="SI22R1"<?= $kelas == 'SI22R1'? 'selected' : null ?>>SI22R1</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nohp" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email"
                                        required value="<?=$dosen['email'] ?>">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="ruang" class="form-label">Ruang</label>
                                        <select name="ruang" id="ruang" class="form-control" required>
                                        <?php $ruang= $dosen['ruang']; ?>
                                            <option value="Labkom 1" <?= $ruang == 'Labkom 1'? 'selected' : null ?>>Labkom 1</option>
                                            <option value="Labkom 2" <?= $ruang == 'Labkom 2'? 'selected' : null ?>>Labkom 2</option>
                                            <option value="Labkom 3" <?= $ruang == 'Labkom 3'? 'selected' : null ?>>Labkom 3</option>
                                            <option value="Labkom 4" <?= $ruang == 'Labkom 4'? 'selected' : null ?>>Labkom 4</option>
                                            <option value="L001"<?= $ruang == 'L001'? 'selected' : null ?>>L001</option>
                                            <option value="L002"<?= $ruang == 'L002'? 'selected' : null ?>>L002</option>
                                            <option value="L003"<?= $ruang == 'L003'? 'selected' : null ?>>L003</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nohp" class="form-label">No hp</label>
                                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor HP/WA"
                                        required value="<?=$dosen['nohp'] ?>">
                                    </div>
                                <button type= "submit" name="ubah" class ="btn btn-primary" style="float: right;">Ubah </button>
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
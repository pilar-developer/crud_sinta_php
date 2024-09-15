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

include 'layout/header.php';

// $title = 'Daftar Mahasiswa';

// $data_barang = select("SELECT * FROM barang");

?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Selamat Datang, <?= $_SESSION['nama']; ?></h1>
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
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>1650</h3>
                                    <p>Jumlah Mahasiswa</p>
                                </div>
                                <a class="small-box-footer">Update 2023</a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>450</h3>
                                    <p>Jumlah Dosen</p>
                                </div>
                                <a class="small-box-footer">Update 2023</a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>500</h3>

                                    <p>Jumlah Kelulusan</p>
                                </div>
                                <a class="small-box-footer">Update 2023</a>
                            </div>
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
                                <h3 class="card-title">Matrix Jadwal Kuliah</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="table-responsive">
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Ruang</th>
                                        <th>Kelas</th>
                                        <th>Jam Mata Kuliah</th>
                                        <th>Dosen Pengajar</th>
                                    </tr>
                                    </thead>
                                        <tr>
                                            <td>1</td>
                                            <td>L001</td>
                                            <td>TI21R2</td>
                                            <td>08.00 WIB</td>
                                            <td>Teguh, M,M. Kom</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Labkom 3</td>
                                            <td>SI21R2</td>
                                            <td>08.00 WIB</td>
                                            <td>Roy Amrullah Ritonga, MM, M. Kom</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>L003</td>
                                            <td>SI20R2</td>
                                            <td>08.00 WIB</td>
                                            <td>Achmad Syaefudin, ST, MM, M. Kom</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>L005</td>
                                            <td>TI21R1</td>
                                            <td>13.00 WIB</td>
                                            <td>Inayah, S. Pdi</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>L004</td>
                                            <td>SI22R1</td>
                                            <td>08.00 WIB</td>
                                            <td>Hetty Herawati, M. Kom</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Labkom 1</td>
                                            <td>SI20R2</td>
                                            <td>13.00 WIB</td>
                                            <td>Arif Fahrudin, M. T. I</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Labkom 2</td>
                                            <td>SI23R1</td>
                                            <td>08.00 WIB</td>
                                            <td>Muhamad Arif, M. Kom</td>
                                        </tr>
                                    <tbody>

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

<?php include 'layout/footer.php'; 

?>
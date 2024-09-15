<?php

// Fungsi Menampilkan Data
function select($query)
{
  // Memanggil Koneksi Database
  global $db;

  $result = mysqli_query($db, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// fungsi menambahkan data mahasiswa
function create_mahasiswa($post)
{
    global $db;

    
    $nim        = $post['nim'];
    $nama       = $post['nama'];
    $jurusan    = $post['jurusan'];
    $jk         = $post['jk'];
    $nohp       = $post['nohp'];
    $email      = $post['email'];
    $alamat     = $post['alamat'];


    $query = "INSERT INTO mahasiswa VALUES(null,'$nim', '$nama', '$jurusan', '$jk', '$nohp', '$email', '$alamat')";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// menghapus data mahasiswa
function delete_mahasiswa($id_mahasiswa)
{
    global $db;

    // Query Hapus Data Mahasiswa
    $query = "DELETE FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

// fungsi merubah data mahasiswa
function update_mahasiswa($post)
{
    global $db;

    $id_mahasiswa=strip_tags($post["id_mahasiswa"]);
    $nim=strip_tags($post['nim']);
    $nama=strip_tags($post['nama']);
    $jurusan=strip_tags($post['jurusan']);
    $jk=strip_tags($post['jk']);
    $nohp=strip_tags($post['nohp']);
    $email=strip_tags($post['email']);
    $alamat=strip_tags($post['alamat']);

    $query = "UPDATE mahasiswa SET nim='$nim', nama ='$nama', jurusan = '$jurusan', jk = '$jk', nohp =  '$nohp', email =  '$email', alamat = '$alamat' WHERE id_mahasiswa =$id_mahasiswa";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

// fungsi menambahkan data dosen
function create_dosen($post)
{
    global $db;

    
    $nidn           = $post['nidn'];
    $nama           = $post['nama'];
    $mata_kuliah    = $post['mata_kuliah'];
    $kelas          = $post['kelas'];
    $email          = $post['email'];
    $ruang          = $post['ruang'];
    $nohp           = $post['nohp'];


    $query = "INSERT INTO dosen VALUES(null,'$nidn', '$nama', '$mata_kuliah', '$kelas', '$email', '$ruang', '$nohp')";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi merubah data Dosen
function update_dosen($post)
{
    global $db;

    $id_dosen=strip_tags($post["id_dosen"]);
    $nidn=strip_tags($post['nidn']);
    $nama=strip_tags($post['nama']);
    $mata_kuliah=strip_tags($post['mata_kuliah']);
    $kelas=strip_tags($post['kelas']);
    $email=strip_tags($post['email']);
    $ruang=strip_tags($post['ruang']);
    $nohp=strip_tags($post['nohp']);

    $query = "UPDATE dosen SET nidn='$nidn', nama ='$nama', mata_kuliah = '$mata_kuliah', kelas = '$kelas', email =  '$email', ruang =  '$ruang', nohp = '$nohp' WHERE id_dosen =$id_dosen";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

// Menghapus Data Dosen
function delete_dosen($id_dosen)
{
    global $db;

    // Query Hapus Data Dosen
    $query = "DELETE FROM dosen WHERE id_dosen = $id_dosen";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

// fungsi menambahkan data Buah
function create_buah($post)
{
    global $db;

    
    $kode                   = $post['kode'];
    $nama                   = $post['nama'];
    $jenis                  = $post['jenis'];
    $tanggal_masuk          = $post['tanggal_masuk'];
    $harga                  = $post['harga'];


    $query = "INSERT INTO tabel_buah VALUES(null,'$kode', '$nama', '$jenis', '$tanggal_masuk', '$harga')";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi merubah data Buah
function update_buah($post)
{
    global $db;

    $id_buah=strip_tags($post["id_buah"]);
    $kode=strip_tags($post['kode']);
    $nama=strip_tags($post['nama']);
    $jenis=strip_tags($post['jenis']);
    $tanggal_masuk=strip_tags($post['tanggal_masuk']);
    $harga=strip_tags($post['harga']);

    $query = "UPDATE tabel_buah SET kode='$kode', nama ='$nama', jenis = '$jenis', tanggal_masuk = '$tanggal_masuk', harga =  '$harga' WHERE id_buah =$id_buah";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

// Menghapus Data Buah
function delete_buah($id_buah)
{
    global $db;

    $query = "DELETE FROM tabel_buah WHERE id_buah = $id_buah";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

// fungsi tambah Akun
function create_akun($post)
{
    global $db;

    $nama       =strip_tags($post['nama']);
    $username   =strip_tags($post['username']);
    $email      =strip_tags($post['email']);
    $password   =strip_tags($post['password']);
    $level      =strip_tags($post['level']);

    //enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //query tambah data
    $query = "INSERT INTO akun VALUES(null, '$nama', '$username', '$email', '$password', '$level')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function update_akun($post)
{
    global $db;
    
    $id_akun    =strip_tags($post['id_akun']);
    $nama       =strip_tags($post['nama']);
    $username   =strip_tags($post['username']);
    $email      =strip_tags($post['email']);
    $password   =strip_tags($post['password']);
    $level      =strip_tags($post['level']);

    //enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //query tambah data Akun
    $query = "UPDATE akun SET nama = '$nama', username = '$username', email = '$email', password = '$password', level = '$level' WHERE id_akun = $id_akun";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Menghapus Data Akun
function delete_akun($id_akun)
{
    global $db;

    // Query Hapus Data Akun
    $query = "DELETE FROM akun WHERE id_akun = $id_akun";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}


// fungsi menambahkan Data TA
function create_ta($post)
{
    global $db;

    
    $nota                       = $post['nota'];
    $judul                      = $post['judul'];
    $mahasiswa                  = $post['mahasiswa'];
    $pembimbing                 = $post['pembimbing'];


    $query = "INSERT INTO ta VALUES(null,'$nota', '$judul', '$mahasiswa', '$pembimbing')";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Menghapus Data TA
function delete_ta($id)
{
    global $db;

    // Query Hapus Data TA
    $query = "DELETE FROM ta WHERE id = $id";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function update_ta($post)
{
    global $db;
    
    $id                 =strip_tags($post['id']);
    $nota               =strip_tags($post['nota']);
    $judul              =strip_tags($post['judul']);
    $mahasiswa          =strip_tags($post['mahasiswa']);
    $pembimbing         =strip_tags($post['pembimbing']);


    //query tambah data TA
    $query = "UPDATE ta SET nota = '$nota', judul = '$judul', mahasiswa = '$mahasiswa', pembimbing = '$pembimbing' WHERE id = $id";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
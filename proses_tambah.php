<<<<<<< HEAD
<?php

include('database.php');

if(isset($_POST['submit'])) {
    
//     $nama = $_POST['nama'];
//     $alamat= $_POST['alamat'];
//     $ttl = $_POST['ttl'];
//     $status = $_POST['status'];
if($_POST['nama'] == null) {
    // echo "Nama harus Disi!";
    header('location: tambah_data_penduduk.php?status=null1');
}elseif($_POST['alamat'] == null) {
    // echo "Alamat Harus diisi!";
    header('location: tambah_data_penduduk.php?status=null2');
}elseif($_POST['ttl'] == null) {
    // echo "Tempat, Tanggal lahir harus diisi";
    header('location: tambah_data_penduduk.php?status=null3');
}elseif($_POST['status'] == null) {
    // echo "Pilih status anda saat ini";
    header('location: tambah_data_penduduk.php?status=null4');
}else{
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $status = $_POST['status'];

    $query = mysqli_query($database,"INSERT INTO data_penduduk (nama,alamat,ttl,status) VALUES ('$nama','$alamat','$ttl','$status')");
    if($query) {
        header('Location: home.php?status=berhasil');
    } else {
        header('location: home.php?status=gagal');
    }
}



    
// }elseif($_POST['submit'] === null) {
//     header('location: tambah_data_penduduk.php?status=null');
=======
<?php

include('database.php');

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat= $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $status = $_POST['status'];


    $query = mysqli_query($database,"INSERT INTO data_penduduk (nama,alamat,ttl,status) VALUES ('$nama','$alamat','$ttl','$status')");
    if($query) {
        header('Location: home.php?status=berhasil');
    } else {
        header('location: home.php?status=gagal');
    }
>>>>>>> 3b865f123e8ee9eea9838f274c20b09c26d39eda
}
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
}
<?php

include('database.php');

if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $delete = mysqli_query($database,"DELETE from data_penduduk where id=$id");
    
    if ($delete) {
        header('location:data_penduduk.php?status=berhasil');
    }else {
        header('location:data_penduduk.php?status=gagal');
    }
}
?>
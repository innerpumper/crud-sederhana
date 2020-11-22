<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "crud";

$database = mysqli_connect($server,$user,$pass,$db);

if(!$database) {
    die("Gagal Terhubung! Database tidak ditemukan atau kesalahan Lainnya".mysqli_coonect_error()); 
}

?>
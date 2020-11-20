<<<<<<< HEAD
<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "crud";

$database = mysqli_connect($server,$user,$pass,$db);

if(!$database) {
    die("Gagal Terhubung! Database tidak ditemukan atau kesalahan Lainnya".mysqli_coonect_error()); 
}

=======
<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "crud";

$database = mysqli_connect($server,$user,$pass,$db);

if(!$database) {
    die("Gagal Terhubung! Database tidak ditemukan atau kesalahan Lainnya".mysqli_coonect_error()); 
}

>>>>>>> 3b865f123e8ee9eea9838f274c20b09c26d39eda
?>
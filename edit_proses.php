<?php 
 include('database.php');
  //cek apakah submit telah di masukan
 if(isset($_POST['simpan'])) {

   //input data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $status = $_POST['status'];
      

    //masukan metode query update
    $update = "UPDATE data_penduduk set nama='$nama',alamat='$alamat',ttl='$ttl',status='$status' WHERE id='$id'";
    $query = mysqli_query($database,$update);

    if($query) {
        header('location: data_penduduk.php?status=edited');
    }else {
        die(" Gagal Mengedit");
    }
 }
?>
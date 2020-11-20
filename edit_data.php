<?php

include('database.php');

if(!isset($_GET)) {
    header('location: data_penduduk.php');
} else {
    $id = $_GET['id'];

    $edit = "SELECT * from data_penduduk where id=$id";
    $query = mysqli_query($database,$edit);
    $data = mysqli_fetch_assoc($query);

    if (mysqli_num_rows($query) < 1) {
        die('data tidak ditemukan......');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Penduduk</title>
</head>
<body>
<h3>Form Edit Data Penduduk</h3>

<fieldset>

  <form action="edit_proses.php" method="POST">
     <p>
       <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
     </p>
    <p>
      <label for="">Nama : </label>
        <input type="text" name="nama" value="<?php echo $data ['nama']?>">
    </p>
    <p>
      <label for="">alamat</label>
        <textarea type="text" name="alamat" cols="100" rows="10" value=""><?php echo $data['alamat'] ?></textarea>
        </p>
    <p>
      <label for="">Tempat Tanggal Lahir</label>
      <input type="text" name="ttl" value="<?php echo $data['ttl'] ?>">
    </p>
    <p>
      <label for="">Status</label>
      <?php $stts = $data['status']; ?>
      <label for="">
      <input type="radio" name="status" value="menikah" <?php echo ($stts == 'menikah') ? "checked":"" ?>>menikah</label>
      <label for="">
      <input type="radio" name="status" value="belum menikah" <?php echo ($stts == 'belum menikah') ? "checked":"" ?>>belum menikah</label>
    </p>
     
       <p>
         <input type="submit" name="simpan" value="simpan">
       </p>
</fieldset>

</form>
    
</body>
</html>
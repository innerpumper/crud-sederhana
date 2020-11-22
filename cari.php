<?php 
  include('database.php');
  ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <h3>Penduduk yang sudah terdaftar</h3>

        </header>

        <form action="cari.php" method="post">
    <input type="text" name="search" size="50" autocomplete="off" placeholder="Cari data penduduk......">
    <button type="submit" name="subsearch" value="cari">Cari Data</button>
    </form>
    <table border="2">
      <thead>
        <tr>
        <th>No: </th>
          <th>Nama: </th>
          <th>Alamat: </th>
          <th>TTL: </th>
          <th>Status</th>
          <th>Aksi: </th>
        </tr>
      </thead>
  <?php

  if(!isset($_post['subsearch'])) {
    $cari = $_POST['search'];
    $mysql = "SELECT * From data_penduduk";
    $query = "SELECT * from data_penduduk where
    nama like '%$cari%' or
    alamat like '%$cari%' or
    ttl like '%$cari%' or
    status like '%$cari%'";
    $data = mysqli_query($database, $query);
    $i = 1;
while($penduduk = mysqli_fetch_array($query)) {

echo "<tr>";


echo "<td>".$i++."</td>";       
echo "<td>".$penduduk['nama']."</td>";
echo "<td>".$penduduk['alamat']."</td>";
echo "<td>".$penduduk['ttl']."</td>";
echo "<td>".$penduduk['status']."</td>";

echo "<td>";
echo "<a href='edit_data.php?id=".$penduduk['id']."'>edit</a> | ";
echo "<a href='hapus_data.php?id=".$penduduk['id']."'>hapus</a>";
echo "</td>";

echo "</tr>";
?>
<?php }} ?>






</tbody>
  </table>




</body>
</html>


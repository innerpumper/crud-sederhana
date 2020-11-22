<?php include('database.php'); ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <p>
    <?php 
      if (isset(($_GET['status']))) {
        if($_GET['status']=='berhasil') {
          Echo "Data Berhasil Dihapus";


        }elseif($_GET['status']=='edited') {
          echo "Data berhasil diedit";
        
      }else {
        echo "data gagal dihapus";
      }
    }
    
      
    ?>
    </p>

    <nav>
    <a href="tambah_data_penduduk.php">Tambah Data Penduduk(+) </a>
    </nav>



    <br>
    <form action="data_penduduk.php" method="post">
    <input type="text" name="search" size="50" autocomplete="off" placeholder="Cari data penduduk......">
    <button type="submit" name="cari">Cari Data</button>
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
    

  <tbody border="1">

  <?php
  if(!isset($_POST['cari'])) {
    $query = "SELECT * FROM data_penduduk";
    $data  = mysqli_query($database, $query);
    $i=1;
    while($penduduk = mysqli_fetch_array($data)) {
        
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
 
    ?> <?php }

    ?>

    <?php
  }else {
    $cari = $_POST['search'];
    $query2 = "SELECT * FROM data_penduduk  where
    nama LIKE '%$cari%' OR
    alamat LIKE '$$cari%' OR
    ttl LIKE '%$cari%' OR
    status LIKE '%$cari%'";

    $data2 = mysqli_query($database,$query2);
    $i=1;
    while($penduduk = mysqli_fetch_array($data2)) {
        
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

        echo "</tr>"; }

  } ?>
    

 
  </tbody>
  </table>

<p>Total : <?php echo mysqli_num_rows($data2) ?></p>

  
</body>
</html>
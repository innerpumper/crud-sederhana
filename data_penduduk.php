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
    $data = mysqli_query($database,"SELECT * FROM data_penduduk");
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
 
    }

  ?>
  </tbody>
  </table>

  <p>Total : <?php echo mysqli_num_rows($data) ?></p>
</body>
</html>
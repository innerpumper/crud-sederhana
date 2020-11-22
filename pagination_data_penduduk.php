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
    <form action="cari.php" method="post">
    <input type="text" name="search" size="50" autocomplete="off" placeholder="Cari data penduduk......">
    <button type="submit" name="submitcari">Cari Data</button>
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
  
  
  
  $page = isset($_GET['halaman']) ?(int) $_GET['halaman'] : 1;
  $tampil = 2;
  $mulaitampil = ($page - 1) * $tampil;

    $data = "SELECT * FROM data_penduduk limit $mulaitampil,$tampil";
    $data_baru = mysqli_query($database, "SELECT * From data_penduduk");
    $get_data = mysqli_query($database, $data);
    $jumlah_page = mysqli_num_rows($data_baru);
    $halamanakhir = ceil($jumlah_page/$tampil);
    $i=1;
    while($penduduk = mysqli_fetch_array($get_data)) {
        
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

  <p>Total : <?php echo mysqli_num_rows($get_data) ?>
  <nav>
    <ul>
    <?php if($page>1) {
      $previous = $page -1;
      ?>
    <li><a href="?halaman=<?php echo $previous ?>"> Sebelumnya</a></li>
    <?php }?>
    <li>
    <p>Ini Halaman <?php echo $page ?></p>
    </li>
    <?php if($page < $halamanakhir)  {
      $next = $page +1;
      ?>
    <li>
    <a href="?halaman=<?php echo $next ?>">>>lanjut halaman</a>
    
    <?php } ?>
    </ul>
  </nav>
  </p>
</body>
</html>
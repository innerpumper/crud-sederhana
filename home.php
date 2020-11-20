<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>Data Kependudukan<h2>
        <h3><strong>Kota Palangkaraya</strong></h3>
        </header>
           <p>
              <?php 
              if(isset($_GET['status'])) {
                  if($_GET['status']=='berhasil') {
                    echo "Selamat data berhasil ditambahkan";
                  } else {
                    echo "Data gagal ditambahkan";
                  }
                }
                  

        
              ?>

           
           </p>
        <nav>
        <ul>
        <li><a href="data_penduduk.php">Data Penduduk</a></li>
        <li><a href="tambah_data_penduduk.php"> Tambah Data Penduduk</a></li>
        </ul>
        </nav>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>Data Kependudukan<h2>
        <h3><strong>Kota Palangkaraya</strong></h3>
        </header>
           <p>
              <?php 
              if(isset($_GET['status'])) {
                  if($_GET['status']=='berhasil') {
                    echo "Selamat data berhasil ditambahkan";
                  } else {
                    echo "Data gagal ditambahkan";
                  }
                }
                  

        
              ?>

           
           </p>
        <nav>
        <ul>
        <li><a href="data_penduduk.php">Data Penduduk</a></li>
        <li><a href="tambah_data_penduduk.php"> Tambah Data Penduduk</a></li>
        </ul>
        </nav>
</body>
>>>>>>> 3b865f123e8ee9eea9838f274c20b09c26d39eda
</html>
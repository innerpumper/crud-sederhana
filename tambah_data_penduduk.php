<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Penduduk  - CRUD sederhana</title>
</head>
<body>
    <h2>Tambah Data Penduduk</h2>
    <fieldset>

    <form action="proses_tambah.php" method="POST">
    <?php 
    if(isset($_GET['status'] )) {
        if($_GET['status'] == 'null1') {
            echo "Nama Harus Diisi!";
        }elseif($_GET['status']== 'null2') {
            echo "Alamat harus diisi!";
        }elseif($_GET['status'] == 'null3') {
            echo "Tempat Tanggal Lahir Harus Diisi!";
        }elseif($_GET['status'] == 'null4') {
            echo "Pilih status anda";
        }elseif($_GET['status'] == 'null') {
            echo "Anda belum mengisi formulir";

        }
    }
    ?>
    <p>
    <label for="">Nama : </label>
        <input type="text" name="nama" placeholder="Silahkan isi Nama Penduduk.....">
    </p>


    <label for="">Alamat</label>
    <p>
    
        <textarea name="alamat" cols="100" rows="10" ></textarea>
        
    </p>

    <p>
    <label for="">Tempat Tanggal Lahir</label>
        <input type="text" name="ttl" placeholder="Isi Tempat Tanggal lahir">
    </p>

    <p>
    <label for="">Status</label>
        <input type="radio" name="status" value="menikah">menikah</input>
        <input type="radio" name="status" value="belum menikah">belum menikah</input>
    </p>
    
        
        
        


        <input type="submit" name="submit" value="submit">
    
    </form>

    
    
    
    
    </fieldset>
</body>
</html>
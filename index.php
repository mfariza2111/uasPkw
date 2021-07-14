<?php 
    require ("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <div class="sidebar">
      <header>Menu</header>
      <a href="#" class="active">
        <span>Daftar Buku</span>
      </a>
      <a href="login.php">
        <span>Logout</span>
      </a>
      
    </div>
    <div class="main">
        <h3 class="title">Daftar Buku</h3>
        <a class="btn" href="#example2">Tambah Data</a>
        <a class="btn" href="cetak.php" target="_blank">Cetak Data</a>
        <div class="cssmodal dialog" id="example2">
        <a href="#" class="veil"></a>
            <figure>
                <h2>Input Data</h2>
                <form method="post" action="tambah.php">
                    <label>nama buku</label>
                    <input type="text" id="input" class="Input-text" name="nama_buku" placeholder="Nama Buku">
                    <label>kategori</label>
                    <input type="text" id="input" class="Input-text" name="kategori_buku" placeholder="Kategori">
                    <label>penerbit</label>
                    <input type="text" id="input" class="Input-text" name="penerbit" placeholder="Penerbit">
                    <label>harga</label>
                    <input type="text" id="input" class="Input-text" name="harga" placeholder="Harga">
                    <label>diskon</label>
                    <input type="text" id="input" class="Input-text" name="diskon" placeholder="Diskon">
                    <input type="submit" id="input" class="btn2" name="submit" value="Tambah Data">
                </form>
            </figure>
        </div>
        <table cellspacing = "0">
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Kategori</th>
                <th>Penerbit</th>
                <th>Harga</th>
                <th>Harga Setelah Diskon</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php
                $sql = mysqli_query($connect,"SELECT * FROM buku ORDER BY id DESC");
                if(mysqli_num_rows($sql) != 0){
                    while($row = mysqli_fetch_assoc($sql)){
                      $no = 1;
                      $total = $row["harga"] * ($row["diskon"]/100);
                        echo '
                        <tr>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["nama_buku"].'</td>
                            <td>'.$row["kategori_buku"].'</td>
                            <td>'.$row["penerbit"].'</td>
                            <td>'.$row["harga"].'</td>
                            <td>'.$total.'</td>
                            <td><a href="hapus.php?id='.$row["id"].'"><i class="fas fa-trash"></i></a></td>
                            <td><a href="#example3" onclick="return confirm("Anda yakin akan menghapus data ini?")><i class="fas fa-edit"></i></a></td>
                            <div class="cssmodal dialog" id="example3">
                            <a href="#" class="veil"></a>
                                <figure>
                                    <h2>Input Data</h2>
                                    <form action="update.php" method="post">
                                        <input type="hidden" id="input" class="Input-text" name="id" value="'.$row['id'].' ">
                                        <label>nama buku</label>
                                        <input type="text" id="input" class="Input-text" name="nama_buku" value="'.$row['nama_buku'].' ">
                                        <label>kategori</label>
                                        <input type="text" id="input" class="Input-text" name="kategori_buku" value="'. $row['kategori_buku'] .'">
                                        <label>penerbit</label>
                                        <input type="text" id="input" class="Input-text" name="penerbit" value="'.$row['penerbit'].'">
                                        <label>harga</label>
                                        <input type="text" id="input" class="Input-text" name="harga" value="'.$row['harga'].'">
                                        <label>diskon</label>
                                        <input type="text" id="input" class="Input-text" name="diskon" value="'.$row['diskon'].'">
                                        <input type="submit" id="input" class="btn2" name="submit" value="Update Data">                
                                    </form>
                                </figure>
                            </div>
                        </tr>';
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>
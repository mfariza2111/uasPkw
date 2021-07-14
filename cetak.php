<html>
<head>
    <title>DATA BUKU</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
 
	<center>
 
		<h2>DATA BUKU</h2>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
 <table cellspacing = "0">
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Kategori</th>
                <th>Penerbit</th>
                <th>Harga</th>
                <th>Harga Diskon</th>
            </tr>
            <?php
                $sql = mysqli_query($connect,"SELECT * FROM buku ORDER BY id DESC");
                if(mysqli_num_rows($sql) != 0){
                    while($row = mysqli_fetch_assoc($sql)){
                      $total = $row["harga"] * ($row["diskon"]/100);
                        echo '
                        <tr>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["nama_buku"].'</td>
                            <td>'.$row["kategori_buku"].'</td>
                            <td>'.$row["penerbit"].'</td>
                            <td>'.$row["harga"].'</td>
                            <td>'.$total.'</td>
                        </tr>';
                    }
                }
            ?>
        </table>
	<script>
		window.print();
	</script>
 
</body>
</html>
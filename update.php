<?php

include_once("koneksi.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama_buku = $_POST['nama_buku'];
    $kategori = $_POST['kategori_buku'];
    $penerbit = $_POST['penerbit'];
    $harga = $_POST['harga'];
    $diskon = $_POST['diskon'];

  $q = mysqli_query($connect,"UPDATE buku SET nama_buku = '$nama_buku', kategori_buku = '$kategori', penerbit = '$penerbit', harga = '$harga', diskon = '$diskon' WHERE id = $id");
  
}
    header('Location: index.php');
?>
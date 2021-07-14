<?php

include_once("koneksi.php");

if (isset($_POST['submit'])) {
  $nama_buku = $_POST['nama_buku'];
  $kategori = $_POST['kategori_buku'];
  $penerbit = $_POST['penerbit'];
  $harga = $_POST['harga'];
  $diskon = $_POST['diskon'];

  $q = mysqli_query($connect,"INSERT INTO buku (id, nama_buku, kategori_buku, penerbit, harga, diskon) VALUES ('', '$nama_buku', '$kategori', '$penerbit', '$harga', '$diskon')");
  
}
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
?>
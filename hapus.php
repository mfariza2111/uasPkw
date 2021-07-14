<?php

include_once("koneksi.php");

  $id = $_GET['id'];

  $q = mysqli_query($connect,"DELETE FROM buku WHERE id='$id'");

  header('Location:index.php');
?>
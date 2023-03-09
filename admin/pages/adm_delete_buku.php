<?php

// include '../config/db_config.php';
$idbuku = $_GET['id'];
$sql = mysqli_query($connection, "DELETE FROM `buku` WHERE `id_buku`='$idbuku'");
if ($sql) {
   header('location:../admin/index.php?page=buku');
}

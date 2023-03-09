<?php

$db_host = 'localhost';
$db_user = "root";
$db_password = "";
$db_name = "perpustakaan";

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (mysqli_connect_error()) {
   echo "Error: " . mysqli_connect_error();
}

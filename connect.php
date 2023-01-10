<?php
$hostname="localhost";
$username="root";
$password="";
$database="db_user";
$koneksi= mysqli_connect($hostname , $username , $database) or die ("koneksi ke MYSQL gagal");
mysqli_select_db($database,$koneksi) or die ("Koneksi ke database gagal")
?>
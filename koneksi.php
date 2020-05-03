<?php

$host = "localhost";
$user = "root";
$pass ="";
$db = "dbtilawati";
 
 $koneksi = mysqli_connect($host,$user,$pass,$db);

 if (!$koneksi) {
 	die("Gagal terhubung dengan database : ". mysqli_connect_error() );
 }
?>
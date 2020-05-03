<?php
include 'koneksi.php';


$id = $_GET['id'];


mysqli_query($koneksi,"SELECT FROM coment_status WHERE id='123'");
header("location:select.php");
?>
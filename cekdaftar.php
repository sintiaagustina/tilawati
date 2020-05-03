<?php
include 'koneksi.php';

$nmapguna = $_POST['nama_pengguna'];
$alamat = $_POST['alamat'];
$tlp = $_POST['telp'];
$user = $_POST['username'];
$pw = $_POST['password'];
$ft = $_POST['ft'];

$cpw =$_POST ['confirm_password'];
if ($cpw == $pw) {
    
   $query = "INSERT INTO daftarakun VALUES('".$nmapguna."', '".$alamat."', '".$tlp."', '".$user."', '".$pw."', '".$ft."')";
   $sql = mysqli_query($koneksi, $query);

    header('location:login.php');
}
else {
    header("location:inputdaftar.php?pesan=gagal");
}




?>
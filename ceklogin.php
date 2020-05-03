<?php
include 'koneksi.php';

session_start();

$user = $_POST['username'];
$pass = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from daftarakun where username='$user' and password='$pass'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $pass;

    header('location:index.php?id='.$user);
} else {
    header("location:login.php?pesan=gagal");
}


 

?>
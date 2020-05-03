<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylee.css">
    <title>Login</title>
</head>

<body>
    <div class="box-login">
        <div class="kotak">
        <form action="cekdaftar.php" method="post" class="login-form">
            <div class="login-box">
                <h1>Register</h1>
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Nama" name="nama_pengguna">
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="text" placeholder="Alamat" name="alamat">
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="text" placeholder="Telepon" name="telp">
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="text" placeholder="Nama Pengguna" name="username">
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Kata Sandi" name="password">
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Konfirmasi Kata Sandi" name="confirm_password">
                    <input type="hidden" name="ft">
                </div>
                 <?php 
if(isset($_GET['pesan'])){
	if($_GET['pesan']=="gagal"){
?>
            <div class="alert">
                <?php echo "Kata Sandi tidak sesuai!";?>
            </div>
            <?php
	}
}
?>
                <script type="text/javascript" language="JavaScript">
                    function Konfirmasi() {
                        tanya == confirm("Yakin membuat akun");
                        if (tanya == true) return true;
                        else return false;


                    }</script>

                <input onclick="return konfirmasi()" type="submit" class="btn" value="Buat Akun">


            </div>

        </form>
    </div>
    </div>
</body>

</html>
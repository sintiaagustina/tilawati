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
        <form action="ceklogin.php" method="post" class="login-form">
            <div class="login-box">
                <h1>Login</h1>
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="username" name="username">
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="password" name="password">
                </div>


                <input type="submit" class="btn" value="Sign in">
                <a href="inputdaftar.php" class="daftar-akun">Buat Akun</a>
            </div>
            <?php 
if(isset($_GET['pesan'])){
	if($_GET['pesan']=="gagal"){
?>
            <div class="alert">
                <?php echo "Username dan Password tidak sesuai !";?>
            </div>
            <?php
	}
}
?>

        </form>
    </div>
    </div>
</body>

</html>
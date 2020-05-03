<!DOCTYPE html>
<html>
<head>
	<title> MENU </title>
	<link rel="stylesheet" type="text/css" href="style.CSS">
	<link rel = "stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>

	<div class ="container">
	
	</div>
	<div class="headerr">
		
		 <br> <div class="box1">
   	<br><i><h3 class="admin">.::Admin::.</h3></i>
    </div>
	</div>
	
	<div class="contentt">
 <div class= "col -sm-8">
	<table class = "table table-bordered table-striped">
		<thead>
			<b>CREATE ACCOUNT</b>
			<tr>
				<th>No</th>
				<th>id pengguna</th>
				<th>First Name</th>
				<th>Lates Name</th>
				<th>Password</th>
				<th>Re-Password</th>
				<th>Aksi</th>
			</tr>
		</thead>
<?php
	include "koneksi.php";
	$no= 1;
	$data= mysqli_query($koneksi,"select * from daftarAkun");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d["id_pengguna"];?></td>
			<td><?php echo $d["First_Name"];?></td>
			<td><?php echo $d["Lates_nama"]; ?></td>
			<td><?php echo $d["Password"]; ?></td>
			<td><?php echo $d["Re_Password"]; ?></td>
			<td><a href="edit.php?id=<?php echo $d['First_Name']; ?>"><button class= "btn btn-warning">Edit</button></td>
			<td> <a href="hapuscreate.php?id_pengguna=<?php echo $d['id_pengguna'];?>">
				<button class= "btn btn-danger">Hapus</button></a></td>
		</tr>
		<?php
	}

?>
</table>
</div>
	<td><form action="inputdatacreate.php">
		<button class= "btn btn-primary">Tambah Data</button></td>
	</form>
</td>
</div>
	<div class="menu">
		<center><h3>BUNDA LAUNDRY</h3></center>
		<hr>
		<br><br>
		<a href="admin1.php"><center><img src="user.JPG" width="50px" , height="50px"></center></a><br><br>
		<br><br>
		<a href="home.php"><center><img src="Home.JPG" width="50px" , height="50px"></center><br><br>
   
	</div>



</body>
</html>
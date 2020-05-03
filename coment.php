<?php
include 'koneksi.php';


$query= "SELECT*FROM komentar ORDER BY id_kom";
$hasil=mysql_query($query);
while ($data= mysql_fetch_array($hasil))
{
echo "<h3><a href=komentar.php?id_kom=". $data&#91;'id_kom'&#93;."'>".&data['title']."</a></h3>";
}


?>
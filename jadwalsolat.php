<?php
$data = json_decode(file_get_contents("http://muslimsalat.com/".$_GET['location'].".json?key=APIKEY_KAMU"), TRUE);
$shubuh = $data['items'][0]['fajr'];
$dzuhur = $data['items'][0]['dhuhr'];
$ashar = $data['items'][0]['asr'];
$maghrib = $data['items'][0]['maghrib'];
$isya = $data['items'][0]['isha'];
?>
8. Lalu kamu tambahkan script HTML di bawah ini di bawah script PHP.

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<center><h2>Jadwal Shalat</h2></center>

<table>
  <tr>
    <th>Shalat</th>
    <th>Waktu</th>
  </tr>
  <tr>
    <td>Shubuh</td>
    <td><?php echo $shubuh; ?></td>
  </tr>
  <tr>
    <td>Dzuhur</td>
    <td><?php echo $dzuhur; ?></td>
  </tr>
  <tr>
    <td>Ashar</td>
    <td><?php echo $ashar; ?></td>
  </tr>
  <tr>
    <td>Maghrib</td>
    <td><?php echo $maghrib; ?></td>
  </tr>
  <tr>
    <td>Isya</td>
    <td><?php echo $isya; ?></td>
  </tr>
</table>

</body>
</html>

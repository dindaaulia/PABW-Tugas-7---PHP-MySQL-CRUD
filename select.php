<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
body{
   background: url(hutan.png) no-repeat center center fixed; 
                -webkit-background-size: 100% 100%;
                -moz-background-size: 100% 100%;
                -o-background-size: 100% 100%;
                background-size: 100% 100%;
              }
    
    </style>

</head>
<body>
<div class="container">
<div class="row thumbnail" style="margin-left: 25%;margin-right: 25%; margin-top: 15%;" >
<h2 style="text-align: center;margin-top: -0.5%">Hasil data </h2>
<br style="margin-left: 15px">
<?php
include "connect.php";
$sql = "SELECT id, nama, email, tel, alamat "
     . "FROM phonebook";
$res = mysqli_query($link, $sql);
echo "<table border=1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nama</th>";
echo "<th>Email</th>";
echo "<th>Tel</th>";
echo "<th>Alamat</th>";
echo "<th>Delete Row</th>";
echo "<th>Edit Row</th>";
echo "</tr>";
while($baris = mysqli_fetch_array($res)) {
    $id = $baris['id'];
    echo "<tr>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $baris['nama'] . "</td>";
    echo "<td>" . $baris['email'] . "</td>";
    echo "<td>" . $baris['tel'] . "</td>";
    echo "<td>" . $baris['alamat'] . "</td>";
    echo '<td><a href="delete.php?id='.$id.'">Delete</a></td>'; 
    echo '<td><a href="edit.php?id='.$id.'">Edit</a></td>'; 
    echo "</tr>";
}
echo "</table>";
mysqli_close($link);
echo "</table>";
?>
<br>
    </body>
</html>
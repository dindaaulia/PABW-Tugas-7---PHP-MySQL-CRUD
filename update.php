<?php
include 'connect.php';
$id             = $_POST['id'];
$nama           = $_POST['nama'];
$email          = $_POST['email'];
$phone          = $_POST['phone'];
$alamat         = $_POST['alamat'];
$query="UPDATE phonebook SET nama='$nama',email='$email',tel='$phone',alamat='$alamat' where id='$id'";
mysqli_query($link, $query);
header("location:select.php");
?>
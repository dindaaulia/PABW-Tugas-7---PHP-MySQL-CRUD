<?php

include "connect.php";
$id = $_GET['id'];
$sql = mysqli_query($link, "SELECT * FROM phonebook WHERE id = '$id'");
$row = mysqli_fetch_array($sql);
?>
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
       <h2 style="text-align: center;margin-top: -0.5%">Data diri yang akan di edit</h2>
       <br>
       <form action="update.php" method="POST">
       	        <input type="hidden" value="<?php echo $row['id'];?>" name="id">
                Nama: 
                <input type="text" name="nama" value="<?php echo $row['nama'];?>" style="margin-left: 59px">
                <br>
                Email: 
                <input type="email" name="email" value="<?php echo $row['email'];?>" style="margin-left: 62px">
                <br>
                Phone:
                <input type="tel" name="phone" value="<?php echo $row['tel'];?>" style="margin-left: 56px">
                <br>
                alamat: 
                <input type="text" name="alamat" value="<?php echo $row['alamat'];?>" style="margin-left: 54px">
                <br><br>
				<input type="submit" value="Save Edit!" style="margin-left: 24%">
        </form>
    </body>
</html>
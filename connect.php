<?php

$user = 'user';
$pass = 'rahasia';
$host = '127.0.0.1';
$db   = 'phonebook';
$link = mysqli_connect($host, $user, $pass, $db);
if(mysqli_connect_errno()) {
    echo "Koneksi database gagal dibuat";
    exit;
}
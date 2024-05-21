<?php

$host = 'localhost';
$usn = 'root';
$pwd = '';
$name = 'profil-web';

$connect = mysqli_connect($host, $usn, $pwd, $name);

if (!$connect) {
    die("Koneksi gagal!" . mysqli_connect_error());
}

$get_data = "SELECT * FROM article";
$get_result = $connect->query($get_data);
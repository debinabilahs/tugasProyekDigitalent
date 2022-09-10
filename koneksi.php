<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_jwd";

$koneksi = mysqli_connect($server, $user, $password, $nama_database);

if(!$koneksi){
    die("Koneksi Gagal!" . mysqli_connect_error());
}
?>
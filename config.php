<?php

$server = "localhost";
$user = "root";
$password = "admin";
$nama_database = "db_pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
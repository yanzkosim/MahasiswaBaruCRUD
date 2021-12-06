<?php

$server = "localhost";
$user = "id18042071_root"; //id18042071_root
$password = "D59@j#4ia})uM#qi"; //D59@j#4ia})uM#qi
$nama_database = "id18042071_pendaftaran_siswa"; //id18042071_pendaftaran_siswa

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
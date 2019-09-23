<?php

$server = "localhost";
$user = "id10941330_root";
$password = "Kodok24!!";
$nama_database = "id10941330_xi_rpl_2";

$db = mysqli_connect($server, $user, $password, $nama_database);
  
if(!$db){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
  }
echo "Koneksi berhasil";

?>
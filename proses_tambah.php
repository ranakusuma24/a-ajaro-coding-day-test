<?php

include("koneksi.php");

// cek apakah tombol TAMBAH sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $no = $_POST['no'];
    $nama = $_POST['nama'];
 

    // buat query
    $sql = "INSERT INTO banjar1 (no,nama) VALUE ('$no', '$nama')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
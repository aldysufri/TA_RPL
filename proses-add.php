<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $gambar=$_POST['gambar'];
    $jenis=$_POST['jenis'];
    $status=$_POST['status']; 
    $asal=$_POST['asal'];
    $tujuan=$_POST['tujuan'];
    $harga=$_POST['harga'];

    // buat query
    $sql = "INSERT INTO bus (gambar,jenis, status, asal, tujuan, harga) 
    VALUES ('$gambar','$jenis', '$status', '$asal', '$tujuan', '$harga')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: halaman_admin.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: halaman_admin.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_bus=$_POST['id_bus'];
    $gambar=$_POST['gambar'];
    $jenis=$_POST['jenis'];
    $status=$_POST['status']; 
    $asal=$_POST['asal'];
    $tujuan=$_POST['tujuan'];
    $harga=$_POST['harga'];

    // buat query update
    $sql = "UPDATE bus SET gambar='$gambar', jenis='$jenis', status='$status', asal='$asal', tujuan='$tujuan', harga='$harga' WHERE id_bus=$id_bus";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman halaman_admin.php
        header('Location: halaman_admin.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
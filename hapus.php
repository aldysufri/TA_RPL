<?php

include("koneksi.php");

if( isset($_GET['id_bus']) ){

    // ambil id dari query string
    $id_bus = $_GET['id_bus'];

    // buat query hapus
    $sql = "DELETE FROM bus WHERE id_bus=$id_bus";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: halaman_admin.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
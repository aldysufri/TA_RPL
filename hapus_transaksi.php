<?php
// include database connection file
include_once("koneksi.php");

// Get id from URL to delete that user
$id_transaksi = $_GET['id_transaksi'];

// Delete user row from table based on given id
 $sql = "DELETE FROM transaksi WHERE id_transaksi=$id_transaksi";
    $query = mysqli_query($koneksi, $sql);
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:transaksi.php");
?>

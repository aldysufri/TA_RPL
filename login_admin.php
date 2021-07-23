<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);

	
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$dta = mysqli_fetch_assoc($login);

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");
	
}else{
	header("location:admin.php?pesan=gagal");
}



?>
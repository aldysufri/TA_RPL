<!DOCTYPE html>
<html>

<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Form Registrasi</title>
</head>

<body>
	<?php 
	if(isset($_GET['status'])){
		if($_GET['status']=="sukses"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
    <div class="container">
        <h2 align="center">Form Registrasi</h2>
        <form action="simpan-pendaftaran.php" method="post">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" class="form-control" placeholder="Masukan Username" />
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" class="form-control" rows="5" placeholder="Masukan Alamat"></textarea>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan Password" />
            </div>
            <button type="button" onclick="history.back();" class="btn btn-danger">Kembali</button>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
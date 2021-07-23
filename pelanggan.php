<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>DATA PELANGGAN</title>
</head>

<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="halaman_admin.php">PO.ASTORE JAYA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="pelanggan.php">Data Pelanggan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout_admin.php" tabindex="-1" aria-disabled="true">Logout</a>
      </li>
    </ul>
  </div>
</nav>

    <header>
        <center><h3>DATA PELANGGAN</h3></center>
    </header>

    <table class="table table-dark">
    <thead>
        <tr align="center">
            <th scope="col">Id_transaksi</th>
            <th scope="col">Id_bus</th>
            <th scope="col">Mulai_sewa</th>
            <th scope="col">Selesai_sewa</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM transaksi ";
        $query = mysqli_query($koneksi, $sql);

            while($user_data = mysqli_fetch_array($query)) {   ?>      
                <tr>
                <td align='center'><?=$user_data['id_transaksi']?></td>
                <td align='center'><?=$user_data['id_bus']?></td>
                <td align='center'><?=$user_data['mulai_sewa']?></td>
                <td align='center'><?=$user_data['selesai_sewa']?></td>
                <td align='center' width='85px'><a class="btn btn-success" href="konfirmasi.php?id_transaksi=<?php echo $user_data['id_transaksi']; ?>">Konfirmasi Pesanan</a></td>
       
            </tr>      
            
            <?php }?>

    </tbody>
    </table>
        <a class="link btn btn-primary" href="halaman_admin.php">kembali</a>
    <p class="m-3 text-left">Total: <?php echo mysqli_num_rows($query) ?> pelanggan menunggu konfirmasi pesanan.</p>

    </body>
</html>
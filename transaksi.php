<html>
    <head>
    <title>ASTORE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>
</html>
    <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="halaman_user.php">PO. ASTORE JAYA</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="transaksi.php">Riwayat Transaksi</a>
      </li>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout_user.php" tabindex="-1" aria-disabled="true">Logout</a>
      </li>
    </ul>
  </div>
</nav>
    <header>    
    <h2 align='center' line-height='50%'>HALAMAN TRANSAKSI</h2>
    <table class="table table-striped">
  <thead>
    <tr align='center'>
      <th scope="col">ID_TRANSAKSI</th>
      <th scope="col">ID_BUS</th>
      <th scope="col">JENIS</th>
      <th scope="col">MULAI_SEWA</th>
      <th scope="col">SELESAI_SEWA</th>
      <th scope="col">HARGA</th>
       <th scope="col">HAPUS</th>
       <th scope="col">BAYAR</th>
    </tr>
  </thead>

    <?php  
     include("koneksi.php");
     $sql = "SELECT 
     A.id_transaksi, A.mulai_sewa, A.selesai_sewa,
     B.id_bus, B.jenis, B.harga FROM transaksi A INNER JOIN bus B
     ON A.id_bus= B.id_bus";
    $query = mysqli_query($koneksi, $sql);
    while($user_data = mysqli_fetch_array($query)) {   ?>      
        <tr>
        <td align='center'><?=$user_data['id_transaksi']?></td>
        <td align='center'><?=$user_data['id_bus']?></td>
        <td align='center'><?=$user_data['jenis']?></td>
        <td align='center'><?=$user_data['mulai_sewa']?></td>
        <td align='center'><?=$user_data['selesai_sewa']?></td>
        <td align='center'><?=$user_data['harga']?></td>
        <td align='center' width='85px'><a class="btn btn-danger" href="hapus_transaksi.php?id_transaksi=<?php echo $user_data['id_transaksi']; ?>">Hapus</a></td>
        <td align='center' width='85px'><a class="btn btn-primary" href="bayar.php?id_transaksi=<?php echo $user_data['id_transaksi']; ?>">Bayar</a></td>

    </tr>      
    
    <?php }?>

    </table>
    <nav align='center'>
    <td align='center' width='85px'><a class="btn btn-success" href="halaman_user.php" role="button"><=Kembali Ke Beranda</a></td>
    </nav>
    </body>
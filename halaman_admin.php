<!DOCTYPE html>
<html lang="en">

<head>
  <title>PO. ASTORE JAYA</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="halaman_admin.php">PO.ASTORE JAYA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
      <a class="m-2 btn btn-success" href="add.php" role="button">[+] Tambah Data Baru</a>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" name="cari" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <br>
  <h2 align='center' line-height='50%'>DATA PO.ASTORE JAYA</h2>
  <br>

  <form action="halaman_user.php" method="get">

    <?php  
     include_once("koneksi.php");
     if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
       
    }
    ?>

    <table class="table table-striped">
      <thead>
        <tr align='center'>
          <th scope="col">ID</th>
          <th scope="col">GAMBAR</th>
          <th scope="col">JENIS</th>
          <th scope="col">ASAL</th>
          <th scope="col">TUJUAN</th>
          <th scope="col">STATUS</th>
          <th scope="col">HARGA</th>
          <th scope="col">EDIT</th>
          <th scope="col">HAPUS</th>
        </tr>
      </thead>


      <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $result = mysqli_query($koneksi, "SELECT * FROM bus WHERE jenis LIKE '%".$cari."%'");				
        }else{
            $result = mysqli_query($koneksi,"SELECT * FROM bus");		
        }
    
     include_once("koneksi.php");
    
    while($user_data = mysqli_fetch_array($result)) {   ?>
      <tr>
        <td align='center'><?=$user_data['id_bus']?></td>
        <td align='center'><img src="image/<?php echo $user_data["gambar"];?>"
            style='width:auto; height:100px; padding: 10px 0px 10px 0px'></td>
        <td align='center'><?=$user_data['jenis']?></td>
        <td align='center'><?=$user_data['asal']?></td>
        <td align='center'><?=$user_data['tujuan']?></td>
        <td align='center'><?=$user_data['status']?></td>
        <td align='center'><?=$user_data['harga']?></td>
        <td align='center' width='85px'><a class="btn btn-primary"
            href="edit.php?id_bus=<?php echo $user_data['id_bus']; ?>" role="button">Edit</a></td>
        <td align='center' width='85px'><a class="btn btn-danger"
            href="hapus.php?id_bus=<?php echo $user_data['id_bus']; ?>" role="button">Hapus</a></td>

      </tr>
      <?php }?>
    </table>
    <!-- <nav align='center'>
    <td align='center' width='85px'><a class="btn btn-success" href="add.php" role="button">[+] Tambah Data Baru</a></td>
    </nav> -->
</body>

</html>
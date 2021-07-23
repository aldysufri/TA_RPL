
<html>
    <head>
    <title>PO. ASTORE JAYA</title>
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" name= "cari" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>
    <h2 align='center' line-height='50%'>DAFTAR BUS PO.ASTORE JAYA</h2>
    <br>
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
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  
    <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $result = mysqli_query($koneksi, "select * from bus where jenis like '%".$cari."%'");				
        }else{
            $result = mysqli_query($koneksi,"select * from bus");		
        }
    
     include_once("koneksi.php");
    
    while($user_data = mysqli_fetch_array($result)) {   ?>      
        <tr>
        <td align='center'><?=$user_data['id_bus']?></td>
        <td align='center'><img src="image/<?php echo $user_data["gambar"];?>" style='width:auto; height:100px; padding: 10px 0px 10px 0px'></td>
        <td align='center'><?=$user_data['jenis']?></td>
        <td align='center'><?=$user_data['asal']?></td> 
        <td align='center'><?=$user_data['tujuan']?></td> 
        <td align='center'><?=$user_data['status']?></td>
        <td align='center'><?=$user_data['harga']?></td>   
        <td align='center' width='85px'><a class="btn btn-primary" href="pesan.php?id_bus=<?php echo $user_data['id_bus']; ?>" role="button">Sewa</a></td>

    </tr>   
    <?php }?>
    </table>
    </body>
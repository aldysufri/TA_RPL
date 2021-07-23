<html>
<head>    
    <title>ASTORE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
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
<br>
    <h2 align='center' line-height='50%'>Halaman Transaksi</h2>

    <div class="card-body">
    <form action="pesan.php" method="post" class="form_login">
        <div class="form-group">
            <label for="formGroupExampleInput">ID TRANSAKSI</label>
            <input type="text" name="id_transaksi" class="form-control" id="formGroupExampleInput" placeholder="Masukkan ID Transaksi....">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">ID BUS</label>
            <input type="text" name="id_bus" class="form-control" id="formGroupExampleInput" placeholder="Masukkan ID Bus yang yang sudah tersedia....">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">MULAI PINJAM</label>
            <input type="text" name="mulai_sewa" class="form-control" id="formGroupExampleInput" placeholder="===Tanggal-Bulan-Tahun===">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">SELESAI PINJAM</label>
            <input type="text" name="selesai_sewa" class="form-control" id="formGroupExampleInput" placeholder="===Tanggal-Bulan-Tahun===">
        </div>
        <!-- <a type="submit" name="Submit" class="btn btn-success" value="Sewa" role="button">Sewa</a> -->
        <input type="submit" name="Submit" class="btn btn-success" value="Sewa">
    </form>

</div>
    

    <?php

    // Check If form submitted, insert form data into users table.
            // include database connection file
            include("koneksi.php");
    if(isset($_POST['Submit'])) {
        $id_transaksi = $_POST['id_transaksi'];
        $id_bus = $_POST['id_bus'];
        $mulai_sewa = $_POST['mulai_sewa'];
        $selesai_sewa = $_POST['selesai_sewa'];
        // include database connection file
        include("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO transaksi (id_transaksi, id_bus, mulai_sewa,selesai_sewa) 
        VALUES('$id_transaksi','$id_bus', '$mulai_sewa', '$selesai_sewa')");

        // Show message when user added
        echo "Book added successfully. <a href='transaksi.php'>View Users</a>";
        header("Location: transaksi.php");
    }
    ?>
</body>
</html>

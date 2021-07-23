<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_bus']) ){
    header('Location: halaman_admin.php');
}

//ambil id dari query string
$id_bus = $_GET['id_bus'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM bus WHERE id_bus=$id_bus";
$query = mysqli_query($koneksi, $sql);
$bussi = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

$status = $bussi['status'];

?>

<!DOCTYPE html>

<html>
    <head>
    <title>ADMIN EDIT DATA</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
<br>
    <h2 align='center' line-height='50%'>ADMIN EDIT DATA</h2>
    <br>

    <form action="proses-edit.php" method="POST">
        <fieldset>
        <input type="hidden" name="id_bus" value="<?php echo $bussi['id_bus'] ?>" />           
        <div class="m-1 form-group row">
        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
            <select class="form-control" id="gambar" name="gambar">
                    <option>elf.png</option>
                    <option>mini.png</option>
                    <option>junior.png</option>
                    <option>medium.png</option>
                    <option>star_big.png</option>
                </select>            
            </div>
        </div>
        <div class="m-1 form-group row">
        <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
            <div class="col-sm-10">
            <select class="form-control" id="jenis" name="jenis">
                    <option>elf</option>
                    <option>mini</option>
                    <option>junior</option>
                    <option>medium</option>
                    <option>star_big</option>
                </select>            
            </div>
        </div>
        <fieldset class="form-group">
        <div class="m-1 row">
            <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="Ready" <?php echo ($status == 'Ready') ? "checked": "" ?>>
                        <label class="form-check-label" for="radio">Ready</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="Proses" <?php echo ($status == 'Proses') ? "checked": "" ?>>
                        <label class="form-check-label" for="radio">Proses</label>
                    </div>
                </div>
        </div>
        </fieldset>          
        <div class="m-1 form-group row">
        <label for="asal" class="col-sm-2 col-form-label">Asal</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="asal" name="asal" value="<?php echo $bussi['asal'] ?>" placeholder="Contoh: Semarang">
            </div>
        </div>       
        <div class="m-1 form-group row">
        <label for="tujuan" class="col-sm-2 col-form-label">Tujuan</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="tujuan" name="tujuan" value="<?php echo $bussi['tujuan'] ?>" placeholder="Contoh: Yogyakarta">
            </div>
        </div>  
        <div class="m-1 form-group row">
        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $bussi['harga'] ?>" placeholder="Contoh: 200.000">
            </div>
        </div>          
        <button type="submit" class="m-1 btn btn-success" name="simpan">Simpan Data</button>
        </fieldset>
    </form>
    </body>
</html>

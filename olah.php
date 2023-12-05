<!doctype html>
<!-- Agar saat ditekan edit data sebelum diedit muncul dan ditekan tambah data kosong-->
<?php
include 'connect.php';
$noMenu = "";
$jenis = "";
$namaMenu = "";
$harga = "";
$kategori = "";
if(isset($_GET['edit'])){
    $noMenu = $_GET['edit'];
    $query = "SELECT * from menu where noMenu='$noMenu'";
    $sql = mysqli_query($konek,$query);
    $data = mysqli_fetch_array($sql);
    $noMenu = $data['noMenu'];
    $jenis = $data['jenis'];
    $namaMenu = $data['namaMenu'];
    $harga = $data['harga'];
    $kategori = $data['kategori'];
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <title>olah</title>
  </head>
  <body>

      <!--figure untuk membuat tulisan judul-->
      <figure class="mt-3">
        <blockquote class="blockquote">
          <p>Selamat Datang di Kelola Data</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          <cite title="Source Title">Kelola Data Menu</cite>
        </figcaption>
      </figure>

      
      
    <!--form untuk membuat form pengisian data-->
    <form action="proses.php" method="post">

    <div class="mb-3 row">
    <label for="noMenu" class="col-sm-2 col-form-label">No Menu</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="noMenu" name="noMenu" value="<?php echo $noMenu; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $kategori; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="namaMenu" class="col-sm-2 col-form-label">Nama Menu</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="namaMenu" name="namaMenu" value="<?php echo $namaMenu; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
    <div class="col-sm-10">
        <select name="jenis" id="jenis" class="form-control" >
            <option value="Makanan" <?php if($jenis == "Makanan") echo "selected"; ?>>Makanan</option>
            <option value="Minuman" <?php if($jenis == "Minuman") echo "selected"; ?>>Minuman</option>
        </select>
    </div>
    </div>
        <?php
        if(isset($_GET['edit'])){
            echo"<button type='submit' class='btn btn-primary'name='btnProses' value='edit'>Simpan Perubahan</button>";
        }else{
            echo"<button type='submit' class='btn btn-primary'name='btnProses' value='tambah'>Tambah Data</button>";
        }
        ?>

    </div>
    </form>

    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </body>
</html>
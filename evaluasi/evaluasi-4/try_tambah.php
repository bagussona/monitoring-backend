<?php
session_start();
if (empty($_SESSION['username'])) {
	header("Location: login_page/login.php");
} else {
?>

<?php include "materi/referensi.php";
$tbh = new DataSantri();
if(isset($_POST['tombol_tambah'])){
    $nama_santri = $_POST['nama'];
    $divisi_santri = $_POST['divisi'];
    $alamat = $_POST['asal'];

    $add_status = $tbh->create($nama_santri, $divisi_santri, $alamat);
    if($add_status){
      echo "<font color='#ff0000'>Berhasil menambahkan data!</font>";
      header("Refresh:3;url=index.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="best.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <form method="post" action="">
          <div class="header">
            <h1>create!</h1>
          </div>
          <div class="group">
            <input type="text" name="nama" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Nama Santri</label>
          </div>
          <div class="group">
            <input type="text" name="divisi" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Divisi</label>
          </div>
          <div class="group">
            <input type="text" name="asal" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Asal</label>
          </div>
          <div class="btn-box">
            <button class="btn btn-submit" type="submit" name="tombol_tambah">submit</button>
            <!-- <button class="btn btn-cancel" type="button">cancel</button> -->
          </div>
        </form>
      </div>
<?php
}
?>

</body>
</html>
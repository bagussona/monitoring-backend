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
    header('Location: index.php');
    }
}
?>

<html>
    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" href="my.css">
    </head>
    <body>
    <div class="container">
    <div class="card-body">
    <h3>Tambah Data Santri</h3><br>
        <form method="post" action="">
            <label for="nama">Nama Santri</label><br>
            <input type="text" name="nama" class="form-control" id="nama"><br>
                    <label for="divisi">Divisi</label><br>
                    <input type="text" name="divisi" class="form-control" id="divisi"><br>
                            <label for="asal">Alamat</label><br>
                            <textarea class="form-control" name="asal" id="asal"></textarea><br>
                                    <label for="asal"></label><br>
                                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
            </form>
        </div>
    </div>
</body>
</html>
<?php
}
?>
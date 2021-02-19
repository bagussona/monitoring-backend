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
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Santri</h3>
            </div>
    <div class="card-body">
        <form method="post" action="">
            <div class="form-group row">
                    <label for="nama">Nama Santri</label>
                    <div class="nama">
                    <input type="text" name="nama" class="form-control" id="nama">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="divisi">Divisi</label>
                    <div class="divisi">
                    <input type="text" name="kelas" class="form-control" id="divisi">
                    </div>
            </div>
                <div class="form-group row">
                    <label for="alamat">Alamat</label>
                    <div class="asal">
                    <textarea class="form-control" name="asal" id="asal"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal"></label>
                    <div class="asal">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>
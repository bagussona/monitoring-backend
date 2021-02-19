<?php include ("materi/referensi.php");
$tbh = new DataSantri();
if(isset($_GET['id'])){
    $id = $_GET['id']; 
    $data_santri = $tbh->get_by_id($id);
}
else
{
    header('Location: index.php');
}

if(isset($_POST['tombol_update'])){
    $id = $_POST['id'];
    $nama_santri = $_POST['nama'];
    $divisi = $_POST['divisi'];
    $alamat = $_POST['alamat']; 
    $status_update = $tbh->update($id,$nama_santri,$divisi,$alamat);
    if($status_update)
    {
        header('Location:index.php');
    }
}
?>
<html>
    <head>
        <link rel="stylesheet" href="my.css">
        <title>Update</title>
    </head>
    <body>
    <div class="container">
    <div class="card-body">
        <h3>Update Data Siswa</h3><br>
            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $data_santri['id']; ?>"/><br>
                <label for="nama">Nama Santri</label><br>
                <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $data_santri['nama']; ?>"><br>
                    <label for="divisi">Divisi</label><br>
                    <input type="text" value="<?php echo $data_santri['divisi']; ?>" name="divisi" class="form-control" id="divisi"><br>
                        <label for="alamat">Alamat</label><br>
                        <textarea class="form-control" name="alamat" id="alamat"><?php echo $data_santri['asal']; ?></textarea><br>
                            <label for="alamat"></label><br>
                            <input type="submit" name="tombol_update" value="Update">
            </form>
        </div>
    </div>
    </body>
</html>
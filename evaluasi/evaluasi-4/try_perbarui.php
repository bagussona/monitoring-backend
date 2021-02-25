<?php
session_start();
if (empty($_SESSION['username'])) {
	header("Location: login_page/login.php");
} else {
?>

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
    $alamat = $_POST['asal']; 
    $status_update = $tbh->update($id,$nama_santri,$divisi,$alamat);
    if($status_update)
    {
        echo "<font color='#ff0000'>Berhasil Update!</font>";
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
            <h1>update!</h1>
          </div>
          <input type="hidden" name="id" value="<?php echo $data_santri['id']; ?>"/>
          <div class="group">
            <input type="text" name="nama" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Nama Santri: <?php echo $data_santri['nama']; ?> > </label>
          </div>
          <div class="group">
            <input type="text" name="divisi" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Divisi: <?php echo $data_santri['divisi']; ?> > </label>
          </div>
          <div class="group">
            <input type="text" name="asal" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Asal: <?php echo $data_santri['asal']; ?> > </label>
          </div>
          <div class="btn-box">
            <button class="btn btn-submit" type="submit" name="tombol_update">update</button>
            <!-- <button class="btn btn-cancel" type="button">cancel</button> -->
          </div>
        </form>
      </div>
<?php
}
?>

</body>
</html>
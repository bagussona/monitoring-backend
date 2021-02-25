<?php
session_start();
if (empty($_SESSION['username'])) {
	header("Location: login_page/login.php");
} else {
?>

<?php include "materi/referensi.php";
$tbh = new DataSantri();
if(isset($_POST['tombol_post'])){
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $isi = $_POST['isi'];
    $image = $_POST['image'];
    $date = date("Y-m-d");


    $add_status = $tbh->createPost($judul, $kategori, $isi, $image, $date);
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
    <link rel="stylesheet" href="post.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <form action="" method="post">
    <div class="header">
            <h1>Post!</h1>
          </div>
    <div class="group">
            <input type="text" name="judul" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Judul</label>
          </div>
     <div class="group">
            <input type="text" name="kategori" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Kategori</label>
          </div>
      <div class="group">
            <input type="text" name="image" required="required"></input><span class="highlight"></span><span class="bar"></span>
            <label>image</label>
      <div class="group">
            <textarea type="textarea" name="isi" rows="5" required="required"></textarea><span class="highlight"></span><span class="bar"></span>
            <label>Isi Post..</label>
            <!-- <input type="file" name="image" value=""> -->
            <!-- <button class="btn btn-submit" type="submit" name="tombol_post">Post</button> -->
          </div>
      <div class="btn-box">
            <button class="btn btn-submit" type="submit" name="tombol_post">Post</button>
            <a href="index.php"><button class="btn btn-cancel" type="button">cancel</button></a>
          </div>
        </form>
      </div>

<?php
}
?>

</body>
</html>
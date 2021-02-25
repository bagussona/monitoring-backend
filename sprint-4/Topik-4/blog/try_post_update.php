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
    $postID = $tbh->get_by_postID($id);
}
else
{
    header('Location: data_post.php');
}

if(isset($_POST['tombol_post'])){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $isi = $_POST['isi']; 
    $image = $_POST['image']; 
    $status_update = $tbh->updatePost($id,$judul,$kategori,$isi,$image);
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
    <link rel="stylesheet" href="post.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <form action="" method="post">
    <div class="header">
            <h1>Update Post!</h1>
          </div>
          <input type="hidden" name="id" value="<?php echo $postID['id']; ?>"/>
    <div class="group">
            <input type="text" name="judul" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Judul: <?php echo $postID['judul_post']; ?> ></label>
          </div>
     <div class="group">
            <input type="text" name="kategori" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Kategori: <?php echo $postID['kategori_post']; ?> ></label>
          </div>
      <div class="group">
            <input type="text" name="image" required="required"></input><span class="highlight"></span><span class="bar"></span>
            <label>Image: <?php echo $postID['img_post']; ?> ></label>
      <div class="group">
            <textarea type="textarea" name="isi" rows="5" required="required"></textarea><span class="highlight"></span><span class="bar"></span>
            <label>Isi: <?php echo $postID['isi_post']; ?> ></label>
            <!-- <input type="file" name="image" value=""> -->
            <!-- <button class="btn btn-submit" type="submit" name="tombol_post">Post</button> -->
          </div>
      <div class="btn-box">
            <button class="btn btn-submit" type="submit" name="tombol_post">Update</button>
            <a href="index.php"><button class="btn btn-cancel" type="button">cancel</button></a>
          </div>
        </form>
      </div>

<?php
}
?>

</body>
</html>
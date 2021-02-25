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
    $data_user = $tbh->get_by_id($id);
}
else
{
    header('Location: index.php');
}

if(isset($_POST['tombol_update'])){
    $id = $_POST['id'];
    $username = $_POST['user'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword']; 
    $status_update = $tbh->update($id,$username,$password,$repassword);
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
          <input type="hidden" name="id" value="<?php echo $data_user['id']; ?>"/>
          <div class="group">
            <input type="text" name="user" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Username: <?php echo $data_user['username']; ?> > </label>
          </div>
          <div class="group">
            <input type="password" name="password" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Password: <?php echo $data_user['password']; ?> > </label>
          </div>
          <div class="group">
            <input type="password" name="repassword" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Re-Password: <?php echo $data_user['password']; ?> > </label>
          </div>
          <div class="btn-box">
            <button class="btn btn-submit" type="submit" name="tombol_update">update</button>
            <a href="index.php"><button class="btn btn-cancel" type="button">cancel</button></a>
            <!-- <button class="btn btn-cancel" type="button">cancel</button> -->
          </div>
        </form>
      </div>
<?php
}
?>

</body>
</html>
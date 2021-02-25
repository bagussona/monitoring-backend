<?php include ("../materi/referensi.php");
$tbh = new DataSantri();
if(isset($_POST['daftar'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cfr_password = $_POST['re_password'];

    if ($password == $cfr_password) {
      $add_status = $tbh->register($username, $password);
        if($add_status){
            echo "<font color='#ff0000'>Berhasil Membuat akun!"."<br>"."Anda akan kembali ke halaman login!</font>";
            header("Refresh:3;url=try_login.php");
      }
    }else {
      echo "<font color='#ff0000'>Password && Konfirmasi password harus sesuai!"."<br>"."Ulangi yaa!</font>";
      header("Refresh:3;url=try_register.php");
    }
    // $add_status = $tbh->create($username, $password);
    // if($add_status){
    //   echo "Berhasil Membuat akun!";
    //   header("Refresh:3;url=login.php");
    // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../best.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <form method="post" action="">
          <div class="header">
            <h1>daftar!</h1>
          </div>
          <div class="group">
            <input type="text" name="username" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Username</label>
          </div>
          <div class="group">
            <input type="password" name="password" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Password</label>
          </div>
          <div class="group">
            <input type="password" name="re_password" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Re-Password</label>
          </div>
          <div class="btn-box">
            <button class="btn btn-submit" type="submit" name="daftar">daftar!</button>
          </div>
        </form>
      </div>
</body>
</html>
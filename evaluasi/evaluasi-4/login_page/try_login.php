<?php
session_start();
if (!empty($_SESSION['username'])) {
	header("Location: ../index.php");
} else {
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
        <form method="post" action="control.php">
          <div class="header">
            <h1>login!</h1>
          </div>
          <div class="group">
            <input type="text" name="username" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Username</label>
          </div>
          <div class="group">
            <input type="password" name="password" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Password</label>
          </div>
          <div class="btn-box">
            <button class="btn btn-submit" type="submit" name="login">login!</button><br>
            <label for="atau"></label><br>
            <a href="try_register.php"><button class="btn btn-cancel" type="button">daftar</button></a>
          </div>
        </form>
      </div>
<?php
}
?>

</body>
</html>
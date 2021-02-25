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
    <link rel="stylesheet" href="css/my.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="MethodPost">
            <form action="actioon_login.php" method="post">
            <h2 class="HeaderPost" id="HeaderPost"> Method _POST->login</h2>
            <p class="pPost" id="usPost">Username: </p>
            <input type="text" name="username" id="username" placeholder="masukkan username..">
            <p class="pPost" id="pwPost">Password: </p>
            <input type="password" name="password" id="password" placeholder="masukkan password..">
            <input type="submit" value="submit"><br>
            <a href="logout.php"> <p class="back">kembali..</p></a>
            <p>Belum punya akun? <a href="register.php">Daftar disini..</a></p>
            </form>
        </div>
<!-- <break> -->
<?php
}
?>
</body>
</html>
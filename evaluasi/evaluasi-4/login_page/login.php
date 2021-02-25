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
    <link rel="stylesheet" href="main.css">
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="formLogin">
            <h2>Method _POST -> Login</h2><br><br>
            <form action="control.php" method="post">
            <br><label for="username">Username:</label><br>
                <input type="text" name="username" id="username" placeholder="masukkan username"><br><br>
            <label for="password">Password:</label><br>
                <input type="password" name="password" id="password" placeholder="masukkan password"><br><br>
            <input type="submit" value="login"><br><br>
            <p>Belum punya akun? <a href="register.php">Daftar disini..</a></p>
            </form>
        </div>
    </div>
<?php
}
?>
</body>
</html>
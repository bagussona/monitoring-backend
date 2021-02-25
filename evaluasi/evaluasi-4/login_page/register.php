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
    <div class="formRegister">
            <h2>Method _POST -> Register</h2><br><br>
            <form action="" method="post">
            <br><label for="username">Username:</label><br>
                <input type="text" name="username" id="username" placeholder="masukkan username"><br><br>
            <label for="password">Password:</label><br>
                <input type="password" name="password" id="password" placeholder="masukkan password"><br><br>
            <label for="cfr_password">Re-Password:</label><br>
                <input type="password" name="cfr_password" id="cfr_password" placeholder="konfirmasi password"><br><br>
            <input type="submit" value="daftar"><br><br>
            <p>Sudah punya akun? <a href="login.php">Login..</a></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>
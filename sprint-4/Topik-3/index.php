<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>
    <h1>User Login Database</h1>
        <form action="AuthController.php" method="post">
        <label for="username">Nama</label>
        <input type="text" name="username" id="username" placeholder="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="password">
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
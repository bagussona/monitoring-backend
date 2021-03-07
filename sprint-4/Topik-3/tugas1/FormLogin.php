<?php
include 'koneksi.php'; // panggil perintah koneksi database 

if(!isset($_SESSION['username'] )== 0) { // cek session apakah kosong(belum login) maka alihkan ke index.php
    header('Location: index.php');
}

if(isset($_POST['login'])) { // mengecek apakah form variabelnya ada isinya
    $username = $_POST['username']; // isi varibel dengan mengambil data username pada form
    $password = $_POST['password']; // isi variabel dengan mengambil data password pada form

    try {
        $sql = "SELECT * FROM user WHERE username = :username AND password = :password"; // buat queri select
        $stmt = $conn->prepare($sql); 
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute(); // jalankan query

        $count = $stmt->rowCount(); // mengecek row
        if($count == 1) { // jika rownya ada 
            $_SESSION['username'] = $username; // set sesion dengan variabel username
            header("Location: index.php"); // lempar variabel ke tampilan index.php
            return;
        }else{
            echo "Anda tidak dapat login";
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
</head>
<body>
    <h1>User Login Database</h1>
    <form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name="username">
        <label for="">Password</label>
        <input type="password" name="password">
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
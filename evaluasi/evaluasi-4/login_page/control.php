<?php include 'koneksi.php';
$pdo = pdo_connect_mysql();

    // memulai session
    session_start();

    // mengambil isian dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $stmt = $pdo->prepare("SELECT * FROM user WHERE username = :username AND password = :password"); // buat queri select
        // $stmt = prepare($sql); 
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute(); // jalankan query


        $count = $stmt->rowCount(); // mengecek row
        if($count == 1) { // jika rownya ada 
            $_SESSION['username'] = $username; // set sesion dengan variabel username
            header("Location: ../index.php"); // lempar variabel ke tampilan index.php
            return;
        }else{
            echo "#####################################"."<br>";
            echo "Username atau Password anda salah. Silahkan periksa lagi.." ."<br>";
            echo "Anda akan redirect kembali ke halaman login setelah 5 detik.." ."<br>";
            echo "#####################################"."<br>";
            header("Refresh:5;url=try_login.php");
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }


?>
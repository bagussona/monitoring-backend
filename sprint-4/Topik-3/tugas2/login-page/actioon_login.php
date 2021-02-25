<?php include 'fungsi.php';
$pdo = pdo_connect_mysql();
    // variable pendefinisian kredensial
    // $usernamelogin = 'bagus';
    // $passwordlogin = 'awsd123';

    // memulai session
    session_start();

    // mengambil isian dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $stmt = $pdo->prepare("SELECT * FROM user WHERE name = :username AND password = :password"); // buat queri select
        // $stmt = prepare($sql); 
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':password', $password);
        $stmt->execute(); // jalankan query


        $count = $stmt->rowCount(); // mengecek row
        if($count == 1) { // jika rownya ada 
            $_SESSION['username'] = $username; // set sesion dengan variabel username
            header("Location: ../index.php"); // lempar variabel ke tampilan index.php
            return;
        }else{
            echo "Username atau Password anda salah. Silahkan periksa lagi..";
            echo "Anda akan di redirect kembali ke halaman login setelah 5 detik..";
            header("Refresh:5; Location: ../login.php");
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }


?>
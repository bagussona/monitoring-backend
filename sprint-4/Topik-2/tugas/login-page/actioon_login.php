<?php
    // variable pendefinisian kredensial
    $usernamelogin = 'bagus';
    $passwordlogin = 'awsd123';

    // memulai session
    session_start();

    // mengambil isian dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // pengecekan kredensial login
    if ($username == $usernamelogin && $password == $passwordlogin) {
        session_start();
        $_SESSION['username'] = $usernamelogin;
        // $_SESSION['password'] = $passwordlogin;
        header("Location: ../index.php");
    } 
    else {
        header("Location: login.php");
   }
?>
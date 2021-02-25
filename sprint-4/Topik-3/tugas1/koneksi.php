<?php
session_start(); // ini adalah kode untuk memulai session
$host = "localhost";
$username = "bagus";
$password = "awsd123";

try{
    $conn = new PDO("mysql:host=$host; dbname=sprint_4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "berhasil terkoneksi ke database";
    return $conn;
}catch (PDOException $e){
    echo "ERROR : " .$e->getMessage();
}
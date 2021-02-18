<?php

class AuthController {

   private  $host       = 'localhost',
            $dbname     = 'sprint_4',
            $user       = 'user',
            $password   = 'password';

   public function __construct() {
      try {
         $connect = $this->connect = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
      } catch (PDOException $e) {
         echo $e->getMessage()."\n"."Baris ke-".$e->getLine()."\n";
      }
   }

   public function login($username, $password) {
      $query   = "SELECT * FROM user WHERE username = '$username'";
      $check   = $this->connect->query($query);
      $result  = $check->fetch(PDO::FETCH_OBJ);

    // CEK DATA USER
      if (!$result) { // <=== JIKA DATA USER TIDAK ADA
         return [
            "status" => "error",
            "msg"    => "Username anda salah !"
         ];
      }

      $fix     = password_verify($password, $result->password); // <=== CEK PASSWORD USER
      if (!$fix) { // <=== JIKA PASSWORD SALAH
         return [
            "status" => "error",
            "msg"    => "Password anda salah !"
         ];
      }

      return [ // <=== JIKA AUTENTIKASI SUKSES
            "status" => "success",
            "msg"    => "Login berhasil !"
      ];
   }
}
<?php
// $servername = "localhost";
// $username = "bagus";
// $password = "awsd123";

// // Create connection
// $conn = new mysqli($servername, $username, $password, "lights_life_company");

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected successfully";



// ##########################

$servername = "localhost";
$username = "bagus";
$password = "Baguzt3aa";
$dbname = "lights_life_company";

try {
    $conn = new PDO("mysql:host=$servername;$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }




?>
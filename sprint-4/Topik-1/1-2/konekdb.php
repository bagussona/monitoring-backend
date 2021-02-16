<?php
$servername = "localhost";
$username = "bagus";
$password = "awsd123";
$dbname = "bagus_tb_bebansibudi";

try {
    $conn = new PDO("mysql:host=$servername;$dbname", $username, $password);

    $sth = $conn->prepare("SELECT * FROM bagus_tb_bebansibudi.tb_all_barang");
    $sth->execute();
    
    /* Fetch all of the remaining rows in the result set */
    print("Fetch all of the remaining rows in the result set:\n");
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    // Get the total number of contacts, this is so we can determine whether there should be a next and previous button
    // $tb_barang = $sth->query('SELECT COUNT(*) FROM tb_all_barang')->fetchColumn();

    print_r($result);

    $conn = $dbh->prepare("SELECT * FROM tb_allbarang");
    $conn->execute();   
    $result = $conn->fetchAll(PDO::FETCH_ASSOC);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }





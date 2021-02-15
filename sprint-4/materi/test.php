<?php
$servername = "localhost";
$username = "bagus";
$password = "awsd123";
$dbname = "lights_life_company";

try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    foreach($dbh->query('SELECT employee.id, user, address, kode_pos from employee JOIN address ON address.id = address_id') as $row) {
        // print_r($row);
        foreach ($row as $key => $value) {
            // print_r($value);
            echo "$key => $value";
        }
        echo "<br>";
        echo "\n";
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

// try {
//     $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     foreach($dbh->query('SELECT * from divisi') as $row) {
//         print_r($row);
//     }
//     $dbh = null;
// } catch (PDOException $e) {
//     print "Error!: " . $e->getMessage() . "<br/>";
//     die();
// }




?>
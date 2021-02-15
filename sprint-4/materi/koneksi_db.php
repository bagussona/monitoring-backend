<?php
try {
    $dbh = new PDO('mysql:host=localhost;$bagus, $awsd123; dbname=lights_life_company');
    foreach($dbh->query('SELECT * FROM employee') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
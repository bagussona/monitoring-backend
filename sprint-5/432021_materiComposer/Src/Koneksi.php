<?php

namespace Src;
use PDO;

class Koneksi{
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'bagus';
    $DATABASE_PASS = 'Baguzt3aa';
    $DATABASE_NAME = 'sprint_4';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
        // echo $exception;
    }
}

}
?>
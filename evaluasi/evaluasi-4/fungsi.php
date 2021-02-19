<?php

class KonekDatabase{
    
    protected $DATABASE_HOST = 'localhost';
    protected $DATABASE_USER = 'bagus';
    protected $DATABASE_PASS = 'awsd123';
    protected $DATABASE_NAME = 'evaluasi_4';

    function pdo_connect_mysql() {
    try {
    	$conn = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}

    public function Create()
    {
        # code...
    }
}

function template_header($title) {
    echo <<<EOT
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>$title</title>
            <link href="css/style.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="css/all.css">
        </head>
        <body>
        <nav class="navtop">
            <div>
                <h1>Data Barang</h1>
                <a href="index.php">Home</a>
                <a href="read.php">Inventory</a>
                <a href="login-page/logout.php">Logout</a>
            </div>
        </nav>
    EOT;
    }
    function template_footer() {
    echo <<<EOT
        </body>
    </html>
    EOT;
    }
    ?>
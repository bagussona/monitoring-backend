<?php
require __DIR__ .'/vendor/autoload.php';
use GuzzleHttp\Client;

// $client = new GuzzleHttp\Client();
// $res = $client->request('GET', 'https://api.pondokprogrammer.com/api/student_login', ['auth' => ['bagus', 'bagus123']]);
// echo $res->getStatusCode();
// echo $res->getHeader('content-type')[0];
// echo $res->getBody();

// $request = new \GuzzleHttp\Psr7\Request('GET', 'https://api.pondokprogrammer.com/api/student_login');
// $promise = $client->sendAsync($request)->then(function ($response){
//     echo 'I Completed! ' . $response->getBody();
// });
// $promise->wait();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/my.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="header">
<h1>Login-Page</h1>
</div>
    <div class="login-page">
    <form action="indexnya.php" method="post">
        <div class="group">
            <p for="username">Username:</p>
            <input type="email" name="username">
            <p for="password">Password</p>
            <input type="password" name="password">
            <input type="submit" name="login" value="login">
        </div>
    </form>
    </div>
</div>
</body>
</html>
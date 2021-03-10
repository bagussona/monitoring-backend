<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

// $client = new Client([
//     'base_uri' => 'https://api.pondokprogrammer.com/api/student_login', 'timeout => 2.0',
// ]);

$client = new Client();

// $client = new GuzzleHttp\Client(['base_uri' => 'https://api.pondokprogrammer.com/api/student_login']);
// $response = $client->request('POST', 'https://api.pondokprogrammer.com/api/student_login');



$res = $client->request('POST', 'https://api.pondokprogrammer.com/api/student_login', [
    'form_params' => ['email' => 'bagussona87@gmail.com', 
                'password' => 'Baguzt3aa']]);
// $url, ['Authorization' => 'bagussona87@gmail.com', 'Baguzt3aa@'
// echo $res->getStatusCode();
// echo $res->getHeader('content-type')[0];
// echo $res->getBody();
$dcd = json_decode($res->getBody(), true);
// var_dump($dcd);
// echo $dcd;
$token = $dcd['token'];

var_dump($token);
// var_dump($dcd['token']);

#######
// Absensi <<<<


$response = $client->request('POST', 'https://api.pondokprogrammer.com/api/class/qr?class_id=117', [
    'headers' => ['Authorization' => "bearer $token"]
    ]);

echo $class = $response->getBody();

// var_dump($response);
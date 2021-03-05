<?php

require_once __DIR__ . '/vendor/autoload.php';

use Src\Koneksi;
use Carbon\Carbon;

$konek = new Koneksi();
$konek->pdo_connect_mysql();


printf("Now: %s \n", Carbon::now());

printf("Right now in Jakarta is %s \n", Carbon::now('Asia/Jakarta'));
echo Carbon::now()->locale('id_ID')->isoFormat('LLLL')."\n";
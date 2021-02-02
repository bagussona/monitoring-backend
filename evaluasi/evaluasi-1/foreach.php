<?php

// $buku = ["javascript","php","html","css"];

// foreach ($buku as $halaman => $isibuku) {
//     echo $halaman."\n";
// }

// $buku2 = [1 => "javasript",2 => "php",3 => "html",4 => "css"];
$buku2 = [
    'hal.1' => "javasript",
    'hal.2' => "php",
    'hal.3' => "html",
    'hal.4' => "css"
];
// foreach ($buku2 as $halaman => $isibuku) {
//     echo $halaman. "=>" .$isibuku."\n";
// }

// foreach ($buku2 as $halaman => $value) {
//     echo $halaman;
// }

foreach ($buku2 as $hal => $value) {
    echo $hal . "\n";
}
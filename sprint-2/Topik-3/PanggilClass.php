<?php
require 'lat_trapesium.php';



echo "Hitung Luas Trapesium" . "\n";
echo "Masukkan Panjang1 Trapesium : ";
$Panjang1 = trim(fgets(STDIN));
echo "Masukkan Panjang2 Trapesium : ";
$Panjang2 = trim(fgets(STDIN));
echo "Masukkan Tinggi Trapesium : ";
$Tinggi = trim(fgets(STDIN));

try {
    $result = CheckErrTrapesium($Panjang1, $Panjang2, $Tinggi);
    $calc = new Trapesium();
    $calc::hitungLuas($Panjang1, $Panjang2, $Tinggi);
} catch (ErrTrapesium $error) {
        echo "Error: {$error->getMessage()}";
}
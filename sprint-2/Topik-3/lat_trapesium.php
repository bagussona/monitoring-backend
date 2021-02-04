<?php

//Trapesium
class ErrTrapesium extends Exception{}
function CheckErrTrapesium($P1, $P2, $T){
    if ($P1 <= 1 && $P2 <= 1 && $T <= 1) {
        throw new ErrTrapesium('Panjang1 & Panjang2 & Tinggi harus diisi dan tidak boleh bernilai minus apalagi 0 ' . "\n");
    } elseif ($P1 <= 1 && $P2 <= 1){
        throw new ErrTrapesium('Panjang1 & Panjang2 harus diisi dan tidak boleh bernilai minus apalagi 0 '."\n"); 
    } elseif ($P1 <= 1){
        throw new ErrTrapesium('Panjang1 tidak boleh bernilai minus dan 0 '."\n");
    } elseif ($P2 <= 1){
        throw new ErrTrapesium('Panjang2 tidak boleh bernilai minus dan 0 ' . "\n");
    } elseif ($T <= 1){
        throw new ErrTrapesium('Tinggi tidak boleh bernilai minus dan 0 ' . "\n");
    }
}

class Trapesium{
    public $Panjang1;
    public $Panjang2; 
    public $Tinggi; 

    public static function hitungLuas($P1, $P2, $T){
        echo "Hasil :" . (($P1 + $P2) *$T / 2) . "\n"; 
        echo "\n";
    }
}

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

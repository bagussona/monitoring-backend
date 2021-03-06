<?php

//Persegi
class ErrPersegi extends Exception{}
function CheckErrPersegi($P, $L){
    if ($P <= 1 && $L <= 1) {
        throw new ErrPersegi('Panjang & Lebar harus diisi dan tidak boleh minus apalagi 0 ' . "\n");
    } elseif ($L <= 1){
        throw new ErrPersegi('Lebar tidak boleh minus dan 0 '. "\n");
    } elseif ($P <= 1) {
        throw new ErrPersegi('Panjang tidak boleh minus dan 0 ' . "\n");
    }
}

class Persegi{
    public $Panjang;
    public $Lebar;

    public static function hitungLuas($P, $L){
        echo "Hasil = " . ($P * $L);
        echo "\n";
    }
}

echo "Hitung Luas Persegi" . "\n";
echo "Masukkan Panjang persegi : ";
$Panjang = trim(fgets(STDIN));
echo "Masukkan Lebar persegi : ";
$Lebar = trim(fgets(STDIN));

try {
    $result = CheckErrPersegi($Panjang, $Lebar);
    $calc = new Persegi();
    $calc::hitungLuas($Panjang, $Lebar);
} catch (ErrPersegi $error) {
        echo "Error: {$error->getMessage()}";
}


//Segitiga
class ErrSegitiga extends Exception{}
function CheckErrSegitiga($A, $T){
    if ($A <= 1 && $T <= 1) {
        throw new ErrSegitiga('Alas & Tinggi harus diisi dan tidak boleh bernilai minus apalagi 0 ' . "\n");
    } elseif ($A <= 1){
        throw new ErrSegitiga('Alas tidak boleh bernilai minus dan 0 '."\n");
    } elseif ($T <= 1) {
        throw new ErrSegitiga('Tinggi tidak boleh bernilai minus dan 0 ' . "\n");
    }
}

class Segitiga{
    public $Alas;
    public $Tinggi;

    public static function hitungLuas($A, $T){
        echo "Hasil = " . ($A * $T)/2;
        echo "\n";
    }
}

echo "Hitung Luas Segitiga" . "\n";
echo "Masukkan Alas Segitiga : ";
$Alas = trim(fgets(STDIN));
echo "Masukkan Tinggi Segitiga : ";
$Tinggi = trim(fgets(STDIN));

try {
    $result = CheckErrSegitiga($Alas, $Tinggi);
    $calc = new Segitiga();
    $calc::hitungLuas($Alas, $Tinggi);
} catch (ErrSegitiga $error) {
        echo "Error: {$error->getMessage()}";
}


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

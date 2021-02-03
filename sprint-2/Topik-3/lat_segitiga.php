<?php

//Segitiga
class ErrSegitiga extends Exception{}
function CheckErrSegitiga($A, $T){
    if ($A === "" && $T === "") {
        throw new ErrSegitiga('Alas & Tinggi harus diisi dan tidak boleh 0 ' . "\n");
    } elseif ($A === ""){
        throw new ErrSegitiga('Alas tidak boleh 0 '."\n");
    } elseif ($T === "") {
        throw new ErrSegitiga('Tinggi tidak boleh 0 ' . "\n");
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

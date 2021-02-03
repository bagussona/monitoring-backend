<?php

//Persegi
class ErrPersegi extends Exception{}
function CheckErrPersegi($P, $L){
    if ($P === "" && $L === "") {
        throw new ErrPersegi('Panjang & Lebar harus diisi dan tidak boleh 0 ' . "\n");
    } elseif ($L === ""){
        throw new ErrPersegi('Lebar tidak boleh 0 '."\n");
    } elseif ($P === "") {
        throw new ErrPersegi('Panjang tidak boleh 0 ' . "\n");
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

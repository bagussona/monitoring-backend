<?php

class Persegi{
    public $Panjang;
    public $Lebar;

    public static function hitungLuas($P, $L){
        echo ($P * $L) . "\n";
        echo "\n";
    }
}
echo "Hitung Luas Persegi" . "\n";
echo "Masukkan Panjang persegi : " . "\n";
$Panjang = trim(fgets(STDIN));
echo "Masukkan Lebar persegi : ";
$Lebar = trim(fgets(STDIN));

    $calc = new Persegi();
    $calc::hitungLuas($Panjang, $Lebar);


class Segitiga{
    public $Alas;
    public $Tinggi;

    public static function hitungLuas($A, $T){
        echo ($A * $T / 2) . "\n";
        echo "\n";
    }
}
echo "Hitung Luas Segitiga" . "\n";
echo "Masukkan Alas Segitiga : " . "\n";
$Alas = trim(fgets(STDIN));
echo "Masukkan Tinggi Segitiga : ";
$Tinggi = trim(fgets(STDIN));

    $calc = new Segitiga();
    $calc::hitungLuas($Alas, $Tinggi);




class Trapesium{   
    public $Tinggi;     
    public $Panjang1;
    public $Panjang2;    
    
    public static function hitungLuas($P1, $P2, $T){
         echo (($P1 + $P2) *$T / 2) . "\n";   
         echo "\n";   
         }    
}

echo "Hitung Luas Trapesium" . "\n";
echo "Masukkan Panjang-1 Trapesium : ";
$Panjang1 = trim(fgets(STDIN));
echo "Masukkan Panjang-2 Trapesium : ";
$Panjang2 = trim(fgets(STDIN));
echo "Masukkan Tinggi Trapesium : ";
$Tinggi = trim(fgets(STDIN));
    
        $calc = new Trapesium();
        $calc::hitungLuas($Panjang1, $Panjang2, $Tinggi);

?>





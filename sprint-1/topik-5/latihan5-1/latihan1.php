<?php require 'functions.php';
// function //calcRectangleArea(int $p = 5, int $l = 5){
//     //return($p * $l);
// }
?>

<?php
echo "Hitung Luas Persegi! \n";
echo "Masukkan nilai lentgh(panjang) = ";
$p = trim(fgets(STDIN));
echo "Masukkan nilai width(lebar) = ";
$l = trim(fgets(STDIN));

echo "hitung luas persegi = " . calcRectangleArea($p , $l) . "\n";

?>
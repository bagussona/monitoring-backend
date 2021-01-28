<?php
$rumus= function (int $a = 5, int $t = 5){
     return(1/2 * $a * $t);
 }
?>

<?php
echo "Hitung Luas Segitiga! \n";
echo "Masukkan nilai base(alas) = ";
$a = trim(fgets(STDIN));
echo "Masukkan nilai height(tinggi) = ";
$t = trim(fgets(STDIN));

echo "hitung luas segitiga = " . $rumus($a , $t) . "\n";

?>
<?php
$rumus = function (int $p1 = 5, int $p2 = 5, int $t = 5){
    return round(1 / 2 * ($p1+$p2) * $t);
}
?>

<?php
echo "Hitung Luas Trapesium! \n";
echo "Masukkan nilai panjang 1 = ";
$p1 = trim(fgets(STDIN));
echo "Masukkan nilai panjang 2 = ";
$p2 = trim(fgets(STDIN));
echo "Masukkan nilai tinggi = ";
$t = trim(fgets(STDIN));

echo "hitung luas trapesium = \n" . $rumus($p1 , $p2, $t) . "\n";

?>
<?php
$rumus = function (int $r = 5, int $rr = 5){
    return round(22 / 7 * $r * $rr);
}
?>

<?php
echo "Hitung Luas Lingkaran! \n";
echo "Masukkan nilai jari-jari = ";
$r = trim(fgets(STDIN));
echo "Masukkan nilai jari-jari = ";
$rr = trim(fgets(STDIN));

echo "hitung luas lingkaran = " . $rumus($r , $rr) . " <- sudah dibulatkan" . "\n";

?>
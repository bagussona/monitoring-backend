<?php
function numberDivision(int $dividend, int $divisor): float
{
    if ($divisor === 0) {        
        throw new Exception('Pembagi tidak boleh 0 '."\n");
    }

    $quotient = $dividend / $divisor;
    return $quotient;
}

$result = null;     // Deklarasi variabel $result
$angka = 5;         // Input Angka
$pembilang = 2;     // Angka Pembilang

try {
    $result = numberDivision($angka, $pembilang);
    echo "$angka * $pembilang = " . $result . "\n";
} catch (Exception $e) {
    echo "Error pada ".__FILE__." baris ke : ". $e->getLine()."\n";
    echo $e->getMessage();
}
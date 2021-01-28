<?php

$array = [];

echo "Masukkan jumlah nilai array = ";
$jumlah_nilai = trim(fgets(STDIN));

for ($i=1; $i <= $jumlah_nilai; $i++) { 
    echo "Nilai ke $i = ";
    $nilai = trim(fgets(STDIN));
    $array[] = $nilai;
}

echo "Array = [";
foreach ($array as $value) {
    echo "$value, ";
}
echo "] \n";
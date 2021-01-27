<?php
$nilai_santri = array(5, 9, 6, 7, 9, 8, 10, 7, 8);
$i = [];
if(isset($i[1])) echo $i[1];
$jml = count($nilai_santri); //jumlah array

//var_dump($nilai_santri);
//print_r($nilai_santri);
//echo count($nilai_santri);

//MEAN
echo "Dit: Carilah mean! \n" . "Nilai rata-rata santri adalah : " . array_sum($nilai_santri) / $jml . "\n";
echo "\n";

sort($nilai_santri);
 $median = round($jml / 2);
 $ambilindextengah = $nilai_santri[$median-1]; 

//MEDIAN
echo "Dit: Carilah median! \n" . "Nilai median santri adalah : " . $ambilindextengah . "\n";
echo "\n";

    // echo $jml;
    // echo $ambilindextengah;
    // echo $median;
    // print_r ($nilai_santri);


//MODUS
echo "Dit: Carilah modus! \n" . "Modus nya adalah : " . "kodenyablmwkwk". "\n";
echo "\n";

 //BELUM SKIP DULU!

error_reporting(0);

$tertinggi = max($nilai_santri);
for ($i=0; $i <= $jml; $i++){
    echo $nilai_santri[$i] . " ";
}
echo "Dit: Carilah nilai tertinggi! \n" . "Nilai tertinggi adalah : " . $tertinggi . "\n";
echo "\n";

echo "\n";
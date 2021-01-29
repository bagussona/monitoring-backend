<?php
$nilai_santri = array(5, 9, 6, 7, 9, 8, 10, 7, 8);
$i = [];
$jml = count($nilai_santri); //jumlah array

//var_dump($nilai_santri);
//print_r($nilai_santri);
//echo count($nilai_santri);

//MEAN
echo "Dit: Carilah mean! \n" . "Nilai rata-rata santri adalah : " . array_sum($nilai_santri) / $jml . "\n";
echo "\n";

rsort($nilai_santri);
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

$modus = array_count_values($nilai_santri);
// print_r(max($modus));c
echo "Dit: Carilah modus! \n" . "Modus nya adalah : " . "\n";
foreach ($modus as $key => $value) {
    if ($value == max($modus)) {
        $max = $value;
    }else {
        continue;
    }
    echo " Nilai ".$key . " ada ". $max. "\n";
}

echo "\n";



// error_reporting(0);


// Nilai Tertinggi

// $tertinggi = max($nilai_santri);

$nilai_tertinggi = array_slice($nilai_santri, 0, 3);
echo "Dit: Carilah nilai tertinggi! \n";
foreach ($nilai_tertinggi as $hasil => $val){
    echo "Nilai tertinggi adalah : " . $nilai_tertinggi[$hasil] . "\n";
}
print_r ($nilai_tertinggi);

echo "\n";


// Nilai Terendah

// $terendah = min($nilai_santri);
sort($nilai_santri);
$nilai_terendah = array_slice($nilai_santri, 0, 3);
echo "Dit: Carilah nilai terendah! \n";
foreach ($nilai_terendah as $hasil => $val){
    echo "Nilai terendah adalah : " . $nilai_terendah[$hasil] . "\n";
}
print_r ($nilai_terendah);

echo "\n";
<?php

// function selectionValue($arr1, $arr2) {
  
// }

// function selectionValue($arr, $collection){
//     explode("," $arr, 2);
// }


//$string = "5,9,5,6,5,6,0,1,5,9,4,6,6,0,5,6"; <-- contoh inputan


// $arr = [];
echo "Masukkan jumlah nilai = ";
$anuCollect = trim(fgets(STDIN));
// for ($i=1; $i <= $anuCollect; $i++) { 
//     echo "Nilai ke $i = ";
//     $collection = trim(fgets(STDIN));
//     $arr[] = $collection;
// print_r(str_split($anuCollect));
$hasil_array = str_split($anuCollect);
$sort=[];
$i=0;

print_r($hasil_array);
foreach ($hasil_array as $key => $value) {
    if ($value == 0) {
        $i++;
        continue;
    }else {
        $sort[$i][]=$value;
    }
}
// print_r($sort);
foreach ($sort as $key => $value) {
    sort($sort[$key]);
    print_r($value);
    // $sort[0][0];
}
// sort($sort[0]);
// sort($sort[1]);
// print_r($sort);
//     // var_dump($collection);
//     // var_dump($arr);

//     // $string = $collection;
// }

// echo $string;

// echo "Array = [";
// foreach ($arr as $val) {
//     echo "$val, ";
// }
// echo "] \n";

// echo "di bagi";
// sort($arr);
// print_r(array_chunk($arr, 5));



// echo "sudah di sortir";
// uksort($arr, "cmp");

// foreach ($arr as $key => $value) {
//     echo "$key: $value\n";
// }
// print_r($arr);

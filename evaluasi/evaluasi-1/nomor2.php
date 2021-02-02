<?php
// function selectionValue($arr, $collection){
//     explode("," $arr, 2);
// }

//$string = "5,9,5,6,5,6,0,1,5,9,4,6,6,0,5,6"; <-- contoh inputan

echo "Masukkan jumlah nilai array = ";
$anuCollect = trim(fgets(STDIN));
// for ($i=1; $i <= $anuCollect; $i++) { 
//     echo "Nilai ke $i = ";
    // $collection = trim(fgets(STDIN));
    $arr[] = str_split($anuCollect);

    // var_dump($collection);
    // var_dump($arr);
    // $string = $collection;
// }
// echo $string;
$arr_sort = [];
$i = 0;
foreach ($arr as $key => $value) {
    // echo $value . " ";
    // print_r($value);
    if ($value == 0) {
        $i++;
        continue;
    }else {
        $arr_sort[$i][] = $value;
    }
    print_r($arr_sort);
}
echo "\n";

// echo "di pecah array nya jadi:";
// foreach ($seperatel as $key => $value) {
//     print_r ($key);
// }
// echo "\n";
// sort($arr);
// print_r(array_chunk($arr, 3));



// echo "sudah di sortir";
// uksort($arr, "cmp");

// foreach ($arr as $key => $value) {
//     echo "$key: $value\n";
// }
// print_r($arr);

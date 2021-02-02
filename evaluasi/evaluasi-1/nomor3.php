<?php

// $students1 = [
//   [
//     'name' => "Udin",
//     'nik'  => "T001",
//     'jurusan' => "Programmer",
//     'divisi' => "Backend",
//     'Usia' => 74,
//   ],
//   [
//     'name' => "Umair",
//     'nik'  => "T002",
//     'jurusan' => "Multimedia",
//     'divisi' => "Graphic Design",
//     'Usia' => 19
//   ]
// ];

$students1 = [];
$i = 0;
// foreach ($students1 as $key => $value) {
//     if ($value) {
//         # code...
//     }
// }


echo "Mau masukkin berapa data = ";
$jumlah_input = trim(fgets(STDIN));
// for ($i=1; $i <= $anuCollect; $i++) { 
//     echo "Nilai ke $i = ";
    // $collection = trim(fgets(STDIN));

for ($i=1; $i <= $jumlah_input; $i++){
    echo "Input data yang ke $i" . "\n";
echo "Input nama : ";
$anuCollect = trim(fgets(STDIN));
$students1[$i]['name'] = $anuCollect;
echo "Input nik : ";
$anuCollect = trim(fgets(STDIN));
$students1[$i]['nik'] = $anuCollect;
echo "Input jurusan : ";
$anuCollect = trim(fgets(STDIN));
$students1[$i]['jurusan'] = $anuCollect;
echo "Input divisi : ";
$anuCollect = trim(fgets(STDIN));
$students1[$i]['divisi'] = $anuCollect;
echo "Input usia : ";
$anuCollect = trim(fgets(STDIN));
$students1[$i]['usia'] = $anuCollect;
echo "\n";
}
print_r($students1);

// foreach ($students1 as $usia => $value) {
//         $usia
// }

function sort_MINAT($students1, $data_type, $cari)
{
    $sort = [];
    foreach ($students1 as $key => $value) {
        if ($value[$data_type] == $cari) {
            $sort[] = $value;
        }
    }
    return $sort;
}

echo "Sort Data Santri berdasar MINAT 'BACKEND' : \n";

// print_r(search_divisi($students, 'division', 'PHP Backend'));
$sort = sort_MINAT($students1, 'divisi', 'Backend');
foreach($sort as $key => $value){
    echo "[$key]";
    foreach ($value as $k => $val) {
    echo " $k => $val " . "\n";
    }
    echo "\n";
}


function sort_UMUR($students1, $data_type, $cari)
{
    $sort = [];
    foreach ($students1 as $key => $value) {
        if ($value[$data_type] < $cari) {
            $sort[] = $value;
        }
    }
    return count($sort);
}

echo "Santri yang berumur kurang dari 25 : ". sort_UMUR($students1, 'usia', '25') . "\n";


function sort_palMuda($students1){
    $sort = [];
    foreach ($students1 as $key => $value) {
        $sort[$students1[$key]['usia']] = $value;
    }
    ksort($sort);

    return $sort[array_key_first($sort)];
}
$pm = sort_palMuda($students1);
echo "Santri paling muda adalah " . $pm['name'] . "\n";
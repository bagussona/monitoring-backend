<?php

$students = [
    [
        'id' => 'IT-001',
        'name' => 'Ridwan',
        'division' => 'PHP Backend',
        'age' => 25,
    ],
    [
        'id' => 'IT-010',
        'name' => 'Achmad',
        'division' => 'Java for Android',
        'age' => 23,
    ],
    [
        'id' => 'IT-005',
        'name' => 'Yusuf',
        'division' => 'ReactJS',
        'age' => 22,
    ],
    [
        'id' => 'IT-002',
        'name' => 'Arief',
        'division' => 'PHP Backend',
        'age' => 21,
    ],
    [
        'id' => 'IT-004',
        'name' => 'Dayat',
        'division' => 'React Native',
        'age' => 21,
    ],
    [
        'id' => 'IT-017',
        'name' => 'Lutfi',
        'division' => 'ReactJS',
        'age' => 18,
    ],
];

function sort_NIK($students, $data_type)
{
    $sort = [];

    foreach ($students as $key => $val) {
        $sort[$students[$key][$data_type]] = $val;
    }
    ksort($sort);

    foreach ($sort as $key => $val) {
        $hasil[] = $val;
    }
    return $hasil;
}

function sort_MINAT($students, $data_type, $cari)
{
    $sort = [];
    foreach ($students as $key => $value) {
        if ($value[$data_type] == $cari) {
            $sort[] = $value;
        }
    }
    return $sort;
}

function sort_UMUR($students, $data_type, $cari)
{
    $sort = [];
    foreach ($students as $key => $value) {
        if ($value[$data_type] < $cari) {
            $sort[] = $value;
        }
    }
    return count($sort);
}

function sort_MEANUMUR($students)
{
    $jumlah = 0;
    foreach ($students as $key => $val) {
        $jumlah += $val['age'];
    }
    return (int)($jumlah / count($students));
}

function palingmuda($students)
{
    $urutan = [];
    foreach ($students as $key => $value) {
        $urutan[$students[$key]['age']] = $value;
    }
    ksort($urutan);

    return $urutan[array_key_first($urutan)];
}

echo "Sort Data Santri berdasar NIK : \n";

// print_r(sort_NIK($students, 'id'));
$sort = sort_NIK($students, 'id');
foreach($sort as $key => $value){
    echo "[$key]";
    foreach ($value as $k => $val) {
    echo " $k => $val ";
    }
    echo "\n";
}

echo "Sort Data Santri berdasar NAMA : \n";

// print_r(sort_array($students, 'name'));
$sort = sort_NIK($students, 'name');
foreach($sort as $key => $value){
    echo "[$key]";
    foreach ($value as $k => $val) {
    echo " $k => $val ";
    }
    echo "\n";
}

echo "Sort Data Santri berdasar MINAT 'BACKEND' : \n";

// print_r(search_divisi($students, 'division', 'PHP Backend'));
$sort = sort_MINAT($students, 'division', 'PHP Backend');
foreach($sort as $key => $value){
    echo "[$key]";
    foreach ($value as $k => $val) {
    echo " $k => $val ";
    }
    echo "\n";
}

echo "Santri yang berumur kurang dari 25. :". sort_UMUR($students, 'age', '25') . "\n";

echo "Rata-rata umur santri :". sort_MEANUMUR($students) . "\n";


$santri = palingmuda($students);
echo "Santri paling muda adalah " . $santri['name'] . "\n";
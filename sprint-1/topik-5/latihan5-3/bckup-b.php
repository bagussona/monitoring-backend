<?php
function sort_NIK($students, $jenis){
    $sorter = [];

    foreach ($students as $key => $value){
     $sorter[$students[$key][$jenis]] = $value;
    }
    ksort($sorter);

    foreach ($sorter as $key => $value) {
        $hasil[] = $value;
    }
    return $hasil;
}
?>
echo "soal a \n";
print_r(sort_NIK($students , "id"));
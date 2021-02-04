<?php
$databook = [
        [
            'Judul' => "Bahasa Indonesia",
            'ISBN' => "ISBN-001"
        ],
        [
            'Judul' => "Pendidikan Agama Islam",
            'ISBN' => "ISBN-002"
         ],
         [
            'Judul' => "Matematika",
            'ISBN' => "ISBN-003"
         ],
         [
            'Judul' => "Bahasa Sunda",
            'ISBN' => "ISBN-004"
         ],
        ];
    
    // print_r($databook);








    
echo "
################################################
##          Halo Selamat Datang di            ##
##                MyPerpus                    ##
################################################";
echo "\n \n";

echo "Berikut daftar buku yang kami miliki" . "\n";

    echo "Daftar Buku : " . "\n \n";
    foreach($databook as $key => $value) { 
        echo $key . "\n";
        foreach ($value as $key => $list_buku) {
            echo $key . " => " . $list_buku . "\n";
        }
        echo "\n";
        }


function sort_Peminjaman($databook, $data_type, $cari)
{
    $sort = [];
    foreach ($databook as $key => $value) {
        if ($value[$data_type] == $cari) {
            $sort[] = $value;
        }
    }
    return $sort;
}

echo "Mau Pinjam Buku?" . "\n";
// echo "Ketikkan JUDUL?" . "\n";
// $input1 = trim(fgets(STDIN));
echo "Tulis Judul Buku yang mau dipinjam?" . "\n";
$input2 = trim(fgets(STDIN));

$sort = sort_Peminjaman($databook, 'Judul', (string)$input2);
echo "Selamat anda telah berhasil meminjam buku " . "\n";
foreach($sort as $key => $value){
    // print_r($value);
    // echo "$key => $value ";
    foreach ($value as $val) {
    echo "$val ";
    }
    echo "\n";
}
<?php

class MyPerpus{
    public $databook = ['BI' => 
        [
            'Judul' => "Bahasa Indonesia",
            'ISBN' => "ISBN-001"
        ],
        'PAI' =>
        [
            'Judul' => "Pendidikan Agama Islam",
            'ISBN' => "ISBN-002"
         ],
         'MTK' =>
         [
            'Judul' => "Matematika",
            'ISBN' => "ISBN-003"
         ],
         'BS' =>
         [
            'Judul' => "Bahasa Sunda",
            'ISBN' => "ISBN-004"
         ],
        ];

    
    
    // print_r($databook);

    public function menu_Buku()
    {
    echo "Berikut daftar buku yang kami miliki" . "\n \n";
    foreach($this->databook as $key => $value) { 
        echo "=>" . $key . "\n";
        foreach ($value as $keys => $list_buku) {
            echo $keys . " => " . $list_buku . "\n";
        }
        echo "\n";
        }
    }

    public function Pinjam($data_type, $cari)
    {
    echo "Selamat anda telah berhasil meminjam buku " . "\n";
    foreach ($this->databook as $value) {
        foreach($value as $keys => $val){
            if ($value[$data_type] == $cari) {
                echo "$val ";
                }
        }
    }
    }

    // public function sort_Kembali($data_type, $cari)
    // {
    // echo "Selamat anda telah berhasil mengembalikan buku " . "\n";
    // foreach ($this->databook as $value) {
    //     foreach($value as $keys => $val){
    //         if ($value[$data_type] == $cari) {
    //             echo "$val \n";
    //             }
    //     }
    // }
    // }
}



// $MyPerpusMenu->menu_Buku($databooks);


echo "
################################################
##          Halo Selamat Datang di            ##
##                MyPerpus                    ##
################################################";
// echo "\n \n";

// echo "Pilih Menu" . "\n" . "1. Daftar buku" . "\n" . "2. Kembalikan buku" . "\n";
echo "\n \n";
// echo "Silahkan pilih berdasar angka : \n";

// $pilih_Menu = trim(fgets(STDIN));

// if ($pilih_Menu == 1) {
$MyPerpusMenu = new MyPerpus();
echo $MyPerpusMenu->menu_Buku();

echo "Mau Pinjam Buku?" . "\n";
echo "Tulis Judul Buku yang mau dipinjam?" . "\n";
$input2 = trim(fgets(STDIN));
echo "\n \n";
$MyPerpusMenu->Pinjam('Judul', (string)$input2);

// }

// if($pilih_Menu == 2) {
//     $MyPerpusMenu = new MyPerpus();
//     echo $MyPerpusMenu->menu_Buku();

//     echo "Mau Kembalikan Buku?" . "\n";
//     echo "Tulis Judul Buku yang mau dikembalikan?" . "\n";
    
//     $input2 = trim(fgets(STDIN));
//     $MyPerpusMenu->sort_Kembali('Judul', (string)$input2);
// }else {
//     echo "ELSE";
// }
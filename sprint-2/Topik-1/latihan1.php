<?php

class MyPerpus{
    public $databook = [
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

    public function menu_Buku()
    {
    echo "Berikut daftar buku yang kami miliki" . "\n \n";
    foreach($this->databook as $key => $value) { 
        echo "=>" . $key . "\n";
        foreach ($value as $key => $list_buku) {
            echo $key . " => " . $list_buku . "\n";
        }
        echo "\n";
        }
    }

}

// print_r($databook);

// $MyPerpusMenu->menu_Buku($databooks);


echo "
################################################
##          Halo Selamat Datang di            ##
##                MyPerpus                    ##
################################################";
echo "\n \n";

echo "Pilih Menu" . "\n" . "1. Daftar buku" . "\n" . "2. Kembalikan buku" . "\n";
echo "\n \n \n";
echo "Silahkan pilih berdasar angka : \n";

$pilih_Menu = trim(fgets(STDIN));

if ($pilih_Menu == 1) {
    $MyPerpusMenu = new MyPerpus();
echo $MyPerpusMenu->menu_Buku();
} elseif ($pilih_Menu == 2) {
    // $MyPerpusMenu = new MyPerpus();
    // echo $MyPerpusMenu->menu_Buku();
    echo "2";
}else {
    echo "ELSE";
}



echo "Mau Pinjam buku? \n";

echo "Ketik Judul buku yang mau dipinjam?";
$input1 = (string)trim(fgets(STDIN));

echo "Ketik No ISBN nya";
$input2 = (string)trim(fgets(STDIN));

$MyPerpusBuku = new MyPerpus();
echo $MyPerpusBuku->sort_BUKU($databook, $input1, $input2);


    // echo "Mau Pinjam Buku yang mana?";
    // $greetings = trim(fgets(STDIN));
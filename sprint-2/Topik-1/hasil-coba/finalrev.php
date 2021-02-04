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

    public function menu_Buku(){
    // echo "Berikut daftar buku yang kami miliki" . "\n \n";
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
    echo "\n";
    echo "Buku harus dikembalikan 7hari setelah peminjaman";
    }

    function menu_BukuTerpinjam($data_type, $cari){
    $sort = [];
    foreach ($this->databook as $key => $value) {
        $sort[$value[$data_type]] = $val;
    }
        unset($data_type[$cari]);

    foreach ($sort as $key => $val) {
        $hasil[] = $val;
    }
    return $hasil;
}


}

echo "
################################################
##          Halo Selamat Datang di            ##
##                MyPerpus                    ##
################################################";
echo "\n \n";

echo "Berikut daftar buku yang kami miliki" . "\n";
$MyPerpusMenu = new MyPerpus();
echo $MyPerpusMenu->menu_Buku();

echo "Mau Pinjam Buku?" . "\n";
echo "Tulis Judul Buku yang mau dipinjam?" . "\n";
$input2 = trim(fgets(STDIN));
echo "\n \n";
$MyPerpusMenu->Pinjam('Judul', (string)$input2);
echo "\n \n";

// var_dump($databook);
// $input3 = trim(fgets(STDIN));
// $MyPerpusMenu = new MyPerpus();

echo "Mau Pinjam Buku lagi?" . "Y/n" . "\n";
$input1 = trim(fgets(STDIN));


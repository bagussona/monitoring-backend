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

    public function menu_BukuTerpinjam($data_type, $cari){
        // echo "Berikut daftar buku yang kami miliki" . "\n \n";
        $BookList = [];
            foreach ($this->databook as $keys => $list_buku) {
               if ($list_buku[$data_type] == $cari){
                   unset($list_buku[$cari]);
               }
                else {
                   $BookList[] = $list_buku;
               }
               print_r($BookList);
            }

            return $BookList;
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
$MyPerpusMenu->menu_Buku();

echo "Mau Pinjam Buku?" . "\n";
echo "Tulis Judul Buku yang mau dipinjam?" . "\n";
$input2 = trim(fgets(STDIN));
echo "\n \n";
$MyPerpusMenu->Pinjam('Judul', (string)$input2);
echo "\n \n";

echo "Berikut sisa buku yang kami miliki" . "\n";
// $MyPerpusMenu = new MyPerpus();
$MyPerpusMenu->menu_BukuTerpinjam('Judul', $input2);

echo "\n \n \n";
echo "Mau Kembalikan Buku?" . "Y/n" . "\n";
$input1 = trim(fgets(STDIN));
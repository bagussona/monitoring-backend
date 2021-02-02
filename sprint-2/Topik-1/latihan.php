<?php
class MyPerpus
{
    protected $d_buku = [
        'ISBN001' => "Bahasa Indonesia",
        'ISBN002' => "Buku Matematika",
        'ISBN003' => "Buku IPA",
        'ISBN004' => "Buku IPS",
    ];

    public function Pinjam($d_buku, $input){
        echo "Kamu meminjam " . $d_buku . $input;
    }

    // protected function Kembalikan()
    // {
    //     $miAyam = boil($ingredients);   
    //     return $miAyam;
    // }
}

// $peminjam = new MyPerpus();
// $peminjam->Pinjam($d_buku, 'ISBN001');

// class GeraiMiAyamBakso extends GeraiMiAyam
// {
//     protected $topping = 'bakso';

//     public function cook(): MiAyamBakso
//     {

//         $miAyamBakso = $this->applyTopping($miAyam);
//         return $miAyamBakso;
//     }
//     protected function applyTopping($miAyam)
//     {
//         return $miAyam + $this->topping;
//     }
// }
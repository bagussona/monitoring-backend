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
        'ISBN' => "ISBN-001"
     ],
    ];

// print_r($databook);

function ListBuku($databook){
    echo "Daftar Buku : " . "\n";
    foreach($databook as $key => $value) { 
        foreach ($value as $menu => $list_buku) {
            echo $menu . " => " . $list_buku . "\n";
        }
        echo "\n";
        }
    }
}
$myperpus = new MyPerpus();
$myperpus->ListBuku($databook);
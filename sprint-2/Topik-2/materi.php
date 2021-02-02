<?php

class Santri{
    public $name;
    public $address;

    public static function menampilkan($name = "siapa ini", $address = "dimana ini")
    {
        echo "Hello " . $name . " " . "dari" . " " . $address;
    }
    public function __construct($name, $address){
        echo "Hello " . $name . " " . "dari" . " " . $address;
    }
}



$greeting = new Santri("Bagus", "Jalan"); //__construct
$greeting::menampilkan("Bagus", "Garut"); //static
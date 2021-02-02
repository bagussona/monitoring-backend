<?php

class Santri{
    public $name;
    public $hei;
    public $address;


    function greeting($name, $address){
        echo "Hello " . $name . " " . "dari" . " " . $address;
    }

    function sapa($hei){
        echo "Hello " . $hei;
    }
}

$santri = new Santri();
$santri->sapa("Bagus", "Garut");

?>
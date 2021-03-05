<?php
namespace Pembagian;

class Bagi{
    public function __construct($n1, $n2)
    {
        $division = $n1 / $n2;
        echo $division;
    }
}
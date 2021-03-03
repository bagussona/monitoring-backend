<?php
namespace Pengurangan;

class Kurang{
    public function __construct($n1, $n2)
    {
        $subtract = $n1 - $n2;
        echo $subtract;
    }
}
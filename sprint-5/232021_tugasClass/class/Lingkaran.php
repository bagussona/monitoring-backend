<?php
namespace calcLingkaran;

class Lingkaran
{
    public function __construct($r)
    {
        $calc = 3.14 * $r * $r;
        echo round($calc);
    }
}


// $test = trim(fgets(STDIN));
// $prt = new Lingkaran($test);
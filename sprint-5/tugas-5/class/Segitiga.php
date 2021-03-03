<?php
namespace calcSegitiga;

class LuasSegitiga
{
    public function __construct($a, $t)
    {
        $calc = $a * $t / 2;
        echo $calc;
    }
}

class KelSegitiga
{
    public function __construct($a, $t)
    {
        $calcs = $a + (2 * $t);
        echo $calcs;
    }
}


// $test = trim(fgets(STDIN));
// $test2 = trim(fgets(STDIN));
// $prt = new LuasSegitiga($test, $test2);

// $prt = new KelSegitiga($test, $test2);
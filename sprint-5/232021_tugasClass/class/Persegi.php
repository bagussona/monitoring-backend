<?php
namespace calcPersegi;

class LuasPersegi
{
    public function __construct($p, $l)
    {
        $calc = $p * $l;
        echo round($calc);
    }
}

class KelPersegi
{
    public function __construct($p, $l)
    {
        $calcs = 2 * $p + 2 * $l;
        echo round($calcs);
    }
}


// $test = trim(fgets(STDIN));
// $test2 = trim(fgets(STDIN));
// $prt = new LuasPersegi($test, $test2);

// $prt = new KelPersegi($test, $test2);
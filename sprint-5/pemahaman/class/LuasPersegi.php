<?php namespace LuasPersegi;

class Persegi {
    static function luas($p, $l) {
        $calc = $p * $l;
        echo round($calc);
    }

    static function keliling($p, $l) {
        $calcs = 2 * $p + 2 * $l;
        echo round($calcs);
    }
}

?>
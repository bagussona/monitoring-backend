<?php
function numberDivision(int $dividend, int $divisor): float
{
    if ($divisor === 0) {        
        throw new Exception('Pembagi tidak boleh 0 '."\n");
    }

    $quotient = $dividend / $divisor;
    return $quotient;
}
numberDivision(5, 3);
numberDivision(5, 0);
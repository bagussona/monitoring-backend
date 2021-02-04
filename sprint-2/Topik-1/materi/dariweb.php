<?php
class GeraiMiAyam
{
    /**
     * Bahan-bahan masakan penyusun mi ayam
     * @var array
     */
    protected $ingredients = [
        'mi', 'sawi', 'ayam', 'garam', 'rempah',
    ];

    /**
     * Terima pesanan dari pembeli
     * @return MiAyam
     */
    public function order(): MiAyam
    {
        $miAyam = $this->cook();

        return $miAyam;
    }

    /**
     * Memasak mi ayam
     * @return MiAyam
     */
    protected function cook(): MiAyam
    {
        // rebus bahan-bahan
        $miAyam = boil($ingredients);
        
        return $miAyam;
    }
}


class GeraiMiAyamBakso extends GeraiMiAyam
{
    /**
     * Topping sajian
     */
    protected $topping = 'bakso';

    public function cook(): MiAyamBakso
    {
        // rebus bahan-bahan
        // $miAyam = boil($this->ingredients);

        // beri tambahan bakso pada sajian
        $miAyamBakso = $this->applyTopping($miAyam);

        return $miAyamBakso;
    }

    protected function applyTopping($miAyam)
    {
        return $miAyam + $this->topping;
    }
}
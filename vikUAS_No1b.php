<?php

class BangunRuang
{

    private $PHI = 3.14;function kelilingPersegi($sisi)
    {
        $EMPAT = 4;
        return $EMPAT *  $sisi;
    
    }

}

$bangunRuang = new BangunRuang();
echo 'Keliling Persegi: '. $bangunRuang->kelilingPersegi(9);
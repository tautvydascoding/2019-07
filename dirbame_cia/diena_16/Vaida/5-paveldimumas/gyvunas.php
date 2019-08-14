<?php


// UZDUOTIS 1.0:
// sukurti klase 'Gyvunas' su kintamaisiais:
// public 'svoris', private 'pusryciai', protected 'ligos'

// UZDUOTIS 4
// klaseje 'Gyvunas' sukurti f-jas:
// public printPusryciai()


class Gyvunas
{
    public $svoris = 'svoris';
    private $pusryciai = 'pusryciai';
    protected $ligos = 'ligos';


    public function getPusryciai($pusryciai){
        $this->pusryciai = $pusryciai;

    public function printPusryciai($pusryciai){
         return $this->pusryciai = $pusryciai;
    }
}

}

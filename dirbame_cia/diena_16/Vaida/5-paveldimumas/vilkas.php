<?php


// UZDUOTIS 2.0:
// sukurti VILKO OBJEKTA ir
// pabandyti isvesti visa info apie Vilka:
// tipas
// svoris,
// ligos     // klaida
// pusryciai // klaida

// UZDUOTIS 3
// klaseje 'Vilkas' sukurti f-jas:
// public printLigos()
// public printPusryciai() // neveiks



include_once('gyvunas.php');


class Vilkas extends Gyvunas
{
    public $tipas ="tipas";


    public function getLigos($ligos){
        $this->ligos = $ligos;
    }
    public function printLigos($ligos){
        return $this->ligos = $ligos;

    }
}

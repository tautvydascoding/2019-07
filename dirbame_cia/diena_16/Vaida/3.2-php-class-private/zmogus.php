<?php

// UZDUOTIS 1:
// sukurti  klase: 'zmogus'

// zmogus turi:
// private ugis,
// private vardas
// public f-ja 'getManoUgis()'
// public f-ja 'getManoVardas()'
// public f-ja 'setManoUgis($x)'
// public f-ja 'setManoVardas($x)'
// * kintamojo paemimas f-je:    $this->vardas

class Zmogus
{
    private $vardas = 'bevardis';
    private $ugis = -1;

//pasileis, kai naudosi "=new Zmogus()"
function __construct($v , $u) {
    $this->vardas = $v;
    $this->ugis = $u;

}

    public function getManoVardas() {
        return $this->vardas;
    }

    public function setManoVardas($vardas) {
        $this->vardas = $vardas;
    }
    public function getManoUgis() {
        return $this->ugis;
    }

    public function setManoUgis($ugis) {
        $this->ugis = $ugis;
    }

}



// UZDUOTIS 2.1
// susikurti  objektus: Monika

// UZDUOTIS 2.2
// Atspasudinti varda ir ugi naudojant
// f-ja 'manoUgis()'
// f-ja 'manoVardas()'


// UZDUOTIS 3:
// susikurti konstruktoriu

// UZDUOTIS 3.1:
// susikurti  objektus: Monika, Tadas, Jurgis (naudojant konstruktoriu)


/**
 *
 */
?>

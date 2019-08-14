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


// Sukuriam klasę:
class Zmogus{
    private $vardas = 'bevardis';
    private $ugis = 0;

    // Konstruktoriaus kūrimas, automatiškai pasileidžiantifunkcija, kuri pasileis kainaudosim new Zmogus()
    function __construct($a , $b){
        $this->vardas = $a;
        $this->ugis = $b;
    }

    public function getManoUgis(){
        return $this->ugis;
    }
    public function getManoVardas(){
        return $this->vardas;
    }
    public function setManoUgis($x){
        $this->ugis = $x;
    }
    public function setManoVardas($x){
        $this->vardas = $x;
    }
}
// Funkcijos, kurios prasideda su get visada turi return!
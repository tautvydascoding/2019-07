<?php
// UZDUOTIS 1:
// sukurti  klase: 'zmogus'
class Zmogus {
    private $ugis = 180;
    private $vardas = "Tomas";
    function getManoUgis() {
        return $this->ugis;
    }
    function getManoVardas() {
        return $this->vardas;
    }
    function setManoUgis($x) {
        $this->ugis = $x;
    }
    function setManoVardas($x) {
        $this->vardas = $x;
    }
}
// zmogus turi:
// private ugis,
// private vardas
// public f-ja 'getManoUgis()'
// public f-ja 'getManoVardas()'
// public f-ja 'setManoUgis($x)'
// public f-ja 'setManoVardas($x)'
// * kintamojo paemimas f-je:    $this->vardas


// UZDUOTIS 2.1
// susikurti  objektus: Monika

// UZDUOTIS 2.2
// Atspasudinti varda ir ugi naudojant
// f-ja 'manoUgis()'
// f-ja 'manoVardas()'


// UZDUOTIS 3:
// susikurti konstruktoriu

class Person {
    private $name = '';
    private $ugis = 0;
    function __construct($name, $ugis) {
        $this->name = $name;
        $this->ugis = $ugis;
    }
    function setPerson($new_name, $new_ugis) {
        $this->name = $new_name;
        $this->ugis = $new_ugis;
    }
    function getPerson() {
        echo $this->name . " " . $this->ugis;
    }
}



// UZDUOTIS 3.1:
// susikurti  objektus: Monika, Tadas, Jurgis (naudojant konstruktoriu)

<?php

// uzduotis
// 1) sukurti klase ,, mokykla" su kintamaisiais:
// miesas
// adresas
// darbSk (privatus)
class Mokykla
{
    public $miestas = 'miestas';
    public $adresas = 'adres';
    private $darbSk = 0;
    public function setDarbSk($darbSk) {
        $this->darbSk = $darbSk;
    }
    public function getDarbSk() {
        return $this->darbSk ;
    }
}

// 2)
// sukurti pora objektu mokyklos
// 3)
// priimti i darba pora darbuotoju
// 3.1)
// pasitikrinti ar pavyko padidinti darbuotoju sk.
/**
 *
 */

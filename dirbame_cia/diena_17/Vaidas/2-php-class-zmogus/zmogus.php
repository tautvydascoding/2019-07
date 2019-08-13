<?php

// / UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: public ugis, public vardas
// f-ja 'einu()', kuri daro echo "Einu einu..."

                        /**
                         *
                         */
                        // class Zmogus
                        // {
                        //     //pirma priskiriam defoultines reiksmes:
                        //     public $vardas = 'bevardis';
                        //     public $ugis = '-1';
                        //
                        //     // pagal nutylejima v-sos f-jos yra public
                        //     function einu() {
                        //         echo "einu einu";
                        //     }
                        //
                        //
                        // }

/**
 *
 */
class Zmogus
{
    private $vardas = 'bevardis'; //pradines reiksmes sukurimas - inicializacija
    private $ugis = '-1'; // taip pat sukuriampradine reiksme

//konstruktorius yra automatiskai pasileidzianti funkcija kai naudosim "= new Zmogus"
    function __construct($v, $u) {
        $this->vardas = $v;
        $this->ugis = $u;

    }

    public function getManoVardas() {
        return $this->vardas;
    }
    public function getManoUgis() {
        return $this->ugis;
    }
    public function setManoVardas($x) {
        $this->vardas = $x;
    }
    public function setManoUgis($x) {
        $this->ugis = $x;
    }
}

//     public function getManoUgis() {
//         echo $this->vardas;
//         echo $this->ugis;
// }

    // public f-ja 'getManoUgis()'
    // public f-ja 'getManoVardas()'
    // public f-ja 'setManoUgis($x)'
    // public f-ja 'setManoVardas($x)'
    // * kintamojo paemimas f-je:    $this->vardas
//

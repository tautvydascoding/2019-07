<?php
// UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: public ugis, public vardas
// f-ja 'einu()', kuri daro echo "Einu einu..."

class Zmogus{
    public $ugis = 0; // Priskirti default reikšmes
    public $vardas = 'bevardis'; // Priskirti default reikšmes
    // Funkcijomsnebūtinanurodytitipo, bet pagal nutylėjimą joms priskiriamas public tipas
    function einu(){
        echo "Einu einu...";
    }
}


<?php

//sukurti klase Mokykla su kintamaisiais: miestas, adresas, darbSk(privatus)



class Mokykla
{
    public $miestas = 'miestas'; //priskirti kintamajam tipa public ar private
    public $adresas = 'adresas';

    private $darbSk = 0;

    //private priskyrimas prie public
    public function setDarbSk($darbSk){
        $this->darbSk = $darbSk;
    }
    //paemimas
    public function getDarbSk(){
        return $this->darbSk;
    }
}
















?>

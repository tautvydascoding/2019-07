<?php

class Mokykla
{
    public $miestas = "miestas";
    public $adresas = "adresas";
    private $darbSk = -1;
    public function setDarbSk($darbSk) {
        $this->darbSk=$darbSk;
    }
    // public function setDarbSk($darbSk) {
    //         $this->darbSk=$darbSk;
    //     }
    function __construct($m , $a,  $darbSk ) {
        $this->miestas = $m;
        $this->adresas = $a;
        $this->darbSk = $darbSk;
    }


public function getDarbSk() {
     return $this->darbSk;
}
}

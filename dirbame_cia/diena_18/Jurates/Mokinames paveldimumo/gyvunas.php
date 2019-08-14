<?php
// UZDUOTIS 1.0:
// sukurti klase 'Gyvunas' su kintamaisiais:
// public 'svoris', private 'pusryciai', protected 'ligos'

// UZDUOTIS 4
// klaseje 'Gyvunas' sukurti f-jas:
// public printPusryciai()

class Gyvunas{
    public $svoris = 0;
    private $pusryciai = 'tuscia';
    protected $ligos = 'nera Duomenu';
    public function getSvoris(){
        return $this->svoris;
    }
    public function setLigos($ligos){
        $this->ligos = $ligos;
    }
    public function setPusryciai($pusryciai){
        $this->pusryciai = $pusryciai;
    }
    public function printPusryciai(){
        return $this->pusryciai;
    }
}

// Paveldi visus public ir protected duomenis
// Public galima is karto pasiekti, o private ir protected galima pasiekti tik su public funkcijomis
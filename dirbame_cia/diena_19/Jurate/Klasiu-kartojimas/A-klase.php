<?php
class A{
    private $vardas = 'tuscia';
    public $plaukųSpalva = 'tekstas';
    protected $sirdiesYda = 'nera';

    public function getSirdiesYda(){
        return $this->sirdiesYda;
    }

    public function getVardas(){
        return $this->vardas;
    }

}

// Sesijos pvz
// session_start();
// $_SESSION['masyvas'] = "Masyvo elementas";
<?php
// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki

include_once('zmogus.php');
class Vyras  extends Zmogus {
    private $testosteronas = 6122;
    public function setTestosteronas($testosteronas){
        $this->testosteronas = $testosteronas;
    }
    public function getTestosteronas(){
        return $this->testosteronas;
    }

    public function printVyroDuomenys(){
        return $this->ugis . $this->pusryciai . $this->turtas;
    }
}

// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:
// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas
// kur gausite klaida? Kurio kintamojo neiseina atspausdinti?
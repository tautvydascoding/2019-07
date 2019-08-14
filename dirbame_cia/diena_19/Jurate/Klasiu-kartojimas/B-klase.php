<?php
include_once('A-klase.php');
class B extends A{
    // Šita neveikia, nes sie duomenys yra private ir private pduomenų negali
    // public function getSirdiesYda(){
    //     return $this->sirdiesYda;
    // }

    // // Šita veikia
    // public function getVardas(){
    //     return $this->vardas;
    // }
}
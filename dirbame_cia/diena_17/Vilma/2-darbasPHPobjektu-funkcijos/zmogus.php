<?php
class Zmogus
{
    private $vardas ='bevardis';
    private $ugis =-1;
    //automatiškai pasileidžianti funkcija, kai naudosi "=new Zmogus"
    function __construct($v, $u) {
        $this->vardas =$v;
        $this->ugis=$u;
    }
    // function __construct($v = "bevardis2", $u = -11) {
    //     $this->vardas =$v;
    //     $this->ugis=$u;
    // }

    public function getManoUgis() {
        return $this->ugis;
        echo $this->ugis;}
    public function getManoVardas() {
        return $this->vardas;
        echo $this->vardas;}
    public function setManoUgis($x) {
            $this->ugis=$x;}
    public function setManoVardas($y) {
            $this->vardas=$y;}
}

<?php
// class Zmogus{
//     public $vardas = 'vardas';
//     public $ugis = 0;
// function einu(){
//     echo "$vardas: einu einu...";
// }
// };

class Zmogus{
    function __construct($v,$u){ // reikia dvieju "underscore" >>>_ _
        $this->vardas = $v;
        $this->ugis = $u;
    }
    private $vardas = 'vardas';
    private $ugis = 0;
    public function getManoUgis(){
        // echo $this->ugis;
        return $this->ugis;
    }
    public function getManoVardas(){
        // echo $this->vardas;
        return $this->vardas;
    }
    public function setManoUgis($x){
    $this->ugis = $x;
    return $x;
}
    public function setManoVardas($z){
    $this->vardas = $z;
    return $z;
}
}

/**
 *
 */




 ?>

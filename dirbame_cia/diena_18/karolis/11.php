<?php
class mokykla{
    public $adresas = "";
    private $darbsk = 0;
    public $miestas = "";
    function __construct($m,$a,$s){
        $this->miestas = $m;
        $this->adresas = $a;
        $this->darbsk = $s;
}
    public function setMiestas($m){
        $this->miestas = $m;
}
    public function setAdresas($a){
        $this->adresas = $a;
}
    public function setSkaicius($s){
        $this->darbsk = $s;
}
    public function getSkaicius(){
        return $this->darbsk;

    }
}

 ?>

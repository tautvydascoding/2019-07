<?php
include('z.php');
class A implements Z{
    public $svoris = 100;
    function setSvoris($x){
    $this->svoris = $x;
    }
    function getSvoris(){
        return $this->svoris;
    }
}

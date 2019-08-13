<?php
include_once('Interface-Z.php');
class A implements Z{
    protected $svoris = 100;
    public function setSvoris($x){
        $this->svoris = $x;
    }
    public function getSvoris(){
        return $this->svoris;
    }
}
<?php
include_once('z.php');
class A implements Z {
    public $svoris = 0;
    public function setSvoris($x){
        $this->svoris = $x;
    }
    public function getSvoris(){
        return $this->svoris;
    }
}

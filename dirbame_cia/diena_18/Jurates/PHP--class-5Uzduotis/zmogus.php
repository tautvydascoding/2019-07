<?php
class Zmogus {
    public $ugis = 0;
    private $pusryciai = '';
    protected $turtas = 'namas';

    public function setPusryciai($pusryciai){
        $this->pusryciai = $pusryciai;
    }

    public function getPusryciai(){
        return $this->pusryciai;
    }
}
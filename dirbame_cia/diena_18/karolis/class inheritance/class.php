<?php
class Zmogus {
    public $ugis = 0;
    private $pusryciai = 'aa';
    protected $turtas = 'namas';
    public function printzmogausduomenys(){
        echo $this->pusryciai;
    }
}
class Vyras  extends Zmogus {
    private $testosteronas = 6122;
    public function settestosteronas($x){
        $this->testosteronas = $x;
    }
    public function gettestosteronas(){
        echo $this->testosteronas;
    }
    public function printVyroDuomenys(){
        echo $this->ugis;
        echo $this->turtas;
        // echo $this->pusryciai;
    }
}

 ?>

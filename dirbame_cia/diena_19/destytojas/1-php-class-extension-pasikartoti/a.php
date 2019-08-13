<?php
class A {
    public $plaukuSpalva = 'red';

    private $name = 'Tomas';
    protected $sirdiesYda = true;
    public function getName(){
        return $this->name;
    }
}

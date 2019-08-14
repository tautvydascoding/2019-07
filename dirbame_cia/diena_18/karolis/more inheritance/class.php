<?php
class A{
    private $name = "name";
    public $spalva = "color";
    protected $sirdis = "heart";
    function getName(){
        return $this->name;
    }
    function getSpalva(){
        return $this->spalva;
    }
    function getSirdis(){
        return $this->sirdis;
    }
}
class B extends A{

}
 ?>

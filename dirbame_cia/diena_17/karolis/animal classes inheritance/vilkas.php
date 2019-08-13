<?php
include('gyvunas.php') ;
class vilkas extends gyvunas{
    public $tipas = "aaaaaaaaaaaaaa";
    public function printLigos(){
        return $this->ligos;
    }
    public function printPusryciai(){
        return $this->pusryciai;
    }

}
 ?>

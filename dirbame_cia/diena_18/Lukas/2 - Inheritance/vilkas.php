<?php include_once("gyvunas.php");


class Vilkas extends Gyvunas {
    public $tipas = 'tipas';
    function printLigos() {
        echo $this->ligos;
    }
    // function printPusryciai() {
    //     echo $this->pusryciai;
    // }
}

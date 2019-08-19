<?php
include_once('gyvunai.php');
class Vilkas extends Gyvunas
    {   public $tipas = 'tipas';
        public function printLigos() {
                    return $this->ligos;
                    }
        public function printPusryciai() {
                    return $this->pusryciai;
                    }

    }

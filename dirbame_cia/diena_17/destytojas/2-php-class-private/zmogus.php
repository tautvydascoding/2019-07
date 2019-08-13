<?php

class Zmogus
{
     private $vardas = 'bevardis';
     private $ugis = -1;

     // automatiskai pasileis, kai naudosi "= new Zmogus()"
     function __construct($v , $u  ) {
         $this->vardas = $v;
         $this->ugis = $u;
     }

     public function getManoVardas() {
         return $this->vardas;
     }
     public function setManoVardas($vardas) {
           $this->vardas = $vardas;
     }
}

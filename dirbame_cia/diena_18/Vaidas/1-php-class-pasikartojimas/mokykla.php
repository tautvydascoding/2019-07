<?php

class Mokykla
{
     public $miestas = 'miestas';
     public $adresas = 'adresas';
     private $darbSk = 0;


     // function __construct($v , $u , $d ) {
     //     $this->miestas = $v;
     //     $this->adresas = $u;
     //     $this->darbSk = $d;
     // }

     public function setDarbSk($darbSk) {
         // su  $this islipam is funkcijos:
         $this->darbSk = $darbSk;
     }
     public function getDarbSk() {
         return $this->darbSk;
     }
}

<?php

// uzduotis is 18d nr 1
// sukurti A ir B klases
// B paveldi A
// A turi 3-ris kintamuosius
// nenaudojant objekto B ir echo komnadu klaseje A,
//  isvesti i ekrana visas kintamuju reiksmes

include_once('b.php');
 $objektas = new B();

 echo $objektas->plaukuSpalva . '<br />';
 // echo $objektas->sirdiesYda . '<br />';
echo $objektas->getSirdiesYda();
echo $objektas->getName();

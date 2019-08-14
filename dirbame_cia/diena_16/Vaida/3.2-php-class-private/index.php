<?php

require_once('zmogus.php');

// $Monika = new Zmogus();
$Monika = new Zmogus("Monikaite", 165);
$Kestas = new Zmogus("Kestas", 200);
$Antanas = new Zmogus("Antanas Jonas", 170);



//print_r($Monika); //test

// echo $Monika->vardas; //error, nes privati reiksme


// echo "vardas:" . $Monika->getManoVardas();

//
// $Monika->setManoVardas('Monika');
//
echo "vardas: " . $Monika->getManoVardas();
echo "<hr/>";
//
// $Monika->setManoUgis(168);
echo "ugis: " . $Monika->getManoUgis();
//----------
echo "<hr/>";
echo "vardas: " . $Kestas->getManoVardas();
echo "<hr/>";
echo "ugis: " . $Kestas->getManoUgis();






?>

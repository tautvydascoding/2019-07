<?php
require_once('Zmogus.php');

// UZDUOTIS 2.1
// Susikurti  objektą: Monika
$Monika = new Zmogus("Monika", 160);
$Tadas = new Zmogus("Tadas", 180);
$Jurgis = new Zmogus("Jurgis", 190);

// UZDUOTIS 2.2
// Atspasudinti varda ir ugi naudojant f-ja 'manoUgis()'
echo $Monika->getManoUgis() . "<hr>";

// f-ja 'manoVardas()', jeigu norim išvysti vardo reikšmę reikia rašyti echo
echo $Monika->getManoVardas() . "<hr>";

// Keičiam privataus kintamojo reikšmę
$Monika->setManoVardas('Monika');
echo "vardas: " . $Monika->getManoVardas() . "<br/><hr>";

// UZDUOTIS 3:
// susikurti konstruktoriu
// UZDUOTIS 3.1:
// susikurti  objektus: Monika, Tadas, Jurgis (naudojant konstruktoriu)
echo $Tadas->getManoVardas() . " ";
echo $Tadas->getManoUgis() . "<br/><hr>";

echo $Jurgis->getManoVardas() . " ";
echo $Jurgis->getManoUgis() . "<br/><hr>";



// Jeigu funkcijoje yra parašyta echo ir tu po to vėl kviesdamas funkciją parašai echo, tada duomenys susimaišys vietomis ir tavo nustatytas vardas bus primiau nei parašytas tekstas "Vardas: "
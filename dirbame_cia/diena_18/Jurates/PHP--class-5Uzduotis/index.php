<?php
include_once('vyras.php');
// UZDUOTIS 0.
// susikurti objekta VYRAS
$Tomas = new Vyras();

// Patikrinam ar prieina prie private reikšmės
echo $Tomas->getTestosteronas() . "<hr>";

// pakeičiam private reikšmę
$Tomas->setTestosteronas(8000);
// Išspausdinam pakeistą private reikšmę
echo $Tomas->getTestosteronas() . "<hr>";

// echo $Tomas->printVyroDuomenys(); patikrinam kokius duomenis gauname 2 UŽZDUOTIS

// UZDUOTIS 3 (atspausdinti kintamaji, kurio neleido 2 uzdavinys)
// klases viduje (atspekite kurios) sukurti f-ja, kuri prieina prie privataus kintamojo . ir ji atspausdina

$Tomas->setPusryciai('Čili troškinys');
echo $Tomas->getPusryciai() . "<hr>";
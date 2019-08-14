<?php
include_once('vilkas.php');

// UZDUOTIS 2.0:
// sukurti VILKO OBJEKTA ir
// pabandyti isvesti visa info apie Vilka:
// tipas
// svoris,
// ligos     // klaida
// pusryciai // klaida
// UZDUOTIS 3
// klaseje 'Vilkas' sukurti f-jas:
// public printLigos()
// public printPusryciai() // neveiks 

$SibiroVilkas = new Vilkas();
$SibiroVilkas->tipas = 'Sibirnis Vilkas';
echo $SibiroVilkas->getVilkoTipas() . "<hr>";

$SibiroVilkas->svoris = 20;
echo $SibiroVilkas->getSvoris() . "<hr>";

$SibiroVilkas->setLigos('Dantų uždegimas');
echo $SibiroVilkas->printLigos() . "<hr>";

$SibiroVilkas->setPusryciai('Triušiukas');
echo $SibiroVilkas->printPusryciai() . "<hr>";
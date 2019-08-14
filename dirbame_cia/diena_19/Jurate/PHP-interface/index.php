<?php
include_once('A-klase.php');
// Kuo skiriasi abstrakti klasė nuo klasės? Klausimas darbo pokalbyje

// UZDUOTIS 1:
// sukurti interface 'Z'
// kuris turi f-jas:
//   setSvoris($x)
//   getSvoris()



// UZDUOTIS 2:
// sukurti klase 'A'
// kuri turi kintamaji:  svoris =100

// UZDUOTIS 2.2:
//   klase 'A' turi panaudoti interface 'Z'

// UZDUOTIS 3:
// susikurti objekta klases A

// UZDUOTIS 3.2:
// 1. atspausdinti svori
// 2. pakeisti svori i 90
// 3. atspausdinti svori

$objektasA = new A();

// Atspausdinam svorį
echo $objektasA->getSvoris() . "<hr>";

// Pakeičiam svorį
$objektasA->setSvoris(50);

// Atspausdinam pakeistą svorį
echo $objektasA->getSvoris();

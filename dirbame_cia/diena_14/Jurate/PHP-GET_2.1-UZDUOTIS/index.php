<?php
// Savarankiška užduotis #2.1
// $x = $_GET['nameIT'];
// echo $x;

// Savarankiška užduotis #2.1.2
//  susikurti masyva- preke1: kaina, pavadinimas, kiekis
$preke1 = [200, "Nokia 3310", "12 vnt."];

// $numeris = $_GET['x']; is URL adreso 
// echo "numeris: $numeris <br />";
// echo $preke1[$numeris] . "<hr />";

// 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :?x=1
// ATS: Nokia 3310

// 4. Narsykles adrese  pakeisti ?x=0
// ATS: 200

// 4. Narsykles adrese  pakeisti ?x=2
// ATS: 12 vnt.

// 5.===============sunkesnis====================
 // A) susikurti dar 2 masyvus  preke2, prek3
$preke2 = [100, "Vaikiškas Dviratis", "10 vnt."];
$preke3 = [500, "Dviratis", "50 vnt."];

 // B) susikurti masyva 'visosPrekes'
 // C) sudeti visas prekes i masyva 'visosPrekes'
 $visosPrekes = [$preke1, $preke2, $preke3];

 // 6. parasyti PHP koda:
 $numeris = $_GET['x'];
 $manoPreke =  $visosPrekes[$numeris];
 print_r($manoPreke);
 echo "<hr />";
// 7. pasileisti Narsykleje si puslapi
// 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti : ?x=0
// ATS: Array ( [0] => 200 [1] => Nokia 3310 [2] => 12 vnt. )

// 4. Narsykles adrese  pakeisti ?x=1
// ATS: Array ( [0] => 100 [1] => Vaikiškas Dviratis [2] => 10 vnt. )

// 4. Narsykles adrese  pakeisti ?x=2
// ATS: Array ( [0] => 500 [1] => Dviratis [2] => 50 vnt. )
<?php
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas
// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina
// 3 budai nuotraukoms
// printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
// printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);

$preke1 = ['Telefonas', 'portfolio-01.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '500 €'];
$preke2 = ['Plansetinis kompiuteris', 'portfolio-02.jpg', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '800 €'];
$preke3 = ['Nesiojamas kompiuteris', 'portfolio-03.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2000 €'];
$prekiuInfo = [];

// Sukeliam visus mini masyvus i pagrindini masyva
$prekiuInfo[0] = $preke1;
$prekiuInfo[1] = $preke2;
$prekiuInfo[2] = $preke3;

// print_r($prekiuInfo);
include('prekes.php');


foreach ($prekiuInfo as $preke) {
    include_once('prekes.php');
}

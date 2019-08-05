
<?php


// UZDUOTIS 2 --------------
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas

// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina


   // 3 budai nuotraukoms
    // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
    // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);


$visosPrekes = [];
$preke1 = ["paspirtukas", "img1.jpg", "elektrinis", 390];
$preke2 = ["riedlente", "img2.jpg", "vaikiska", 35];
$preke3 = ["rieduciai", "img3.jpg", "vyriski", 40];
$preke4 = ["dviratis", "img4.jpg", "moteriskas", 150];

$visosPrekes[0] = $preke1;
$visosPrekes[1] = $preke2;
$visosPrekes[2] = $preke3;
$visosPrekes[3] = $preke4;

for ($i=0; $i < 3; $i++) {

    printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");

}

echo "<br />";






























 ?>

<?php




 // UZDUOTIS 1.0
 // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
 // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
 // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
//
$d1 = ["Jonas", "Jonaitis", 2015, "Inspektorius"];
$d2 = ["Ona", "Onute", 1980, "sekretore"];
$d3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];

 // D. sukurti masyva 'visiDarbuotojai'
 $visiDarbuotojai = [];

 // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
 $visiDarbuotojai[0] = $d1;
 $visiDarbuotojai[1] = $d2;
 $visiDarbuotojai[2] = $d3;

 echo "<BR />";
 print_r( $visiDarbuotojai ); // test
 echo "<BR />";

 // UZDUOTIS 1.0
 // isvesti visa informacija apie pirma darbuotoja
 // (NEnaudojant FOR cikla)
 echo $visiDarbuotojai[1][0]; // vardas
 echo $visiDarbuotojai[1][1]; // pav
 echo $visiDarbuotojai[1][2]; // data
 echo $visiDarbuotojai[1][3]; // pareigos
 echo "<br>";

 // UZDUOTIS 1.1
 // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
 echo "Pirmo isvedimas su FOR ciklu: <hr>";
 for ($i=0; $i < 4; $i++) {
     echo $visiDarbuotojai[1][$i] . "<br>";
 }
 // UZDUOTIS 1.2
 // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
echo "Visu darbuotoju vardai: <hr />";
 for ($i=0; $i < 3; $i++) {
     echo $visiDarbuotojai[$i][0] . " ";
 }
 echo "<hr />";

 // UZDUOTIS 1.3
 // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
echo "informacija apie visus (vienas FOR): <br />";
for ($i=0; $i < 3; $i++) {
    echo $visiDarbuotojai[$i][0] . " "; // vardas
    echo $visiDarbuotojai[$i][1] . " "; // pav
    echo $visiDarbuotojai[$i][2] . " "; // data
    echo $visiDarbuotojai[$i][3] . "<br>"; // pareigos

}
echo "<hr />";
 // UZDUOTIS 1.4
 // isvesti visa informacija apie kiekviena  darbuotoja
 // (naudojant DU FOR ciklus)
 echo "viskas su  FOR FOR <hr />";
 for ($i=0; $i < 3; $i++) {
     for ($k=0; $k < 4; $k++) {
         echo $visiDarbuotojai[$i][$k] . " ";  // 00, 01, 02, 03
     }
     echo "<br>";
 }

 // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
 // 1.5) surasti jauniausia darbuotoja
 $didziausiaData = -999;
 $nr = -999;
 for ($i=0; $i < 3; $i++) {
     if( $visiDarbuotojai[$i][2] > $didziausiaData) {
         $didziausiaData = $visiDarbuotojai[$i][2];
         $nr = $i;
     }
 }
 echo "Jauniausias: $didziausiaData <br>";
 echo $visiDarbuotojai[$nr][0] . $visiDarbuotojai[$nr][1];

 // 1.6) surasti seniausia darbuotoja
 $maziausiaData = 999999;
 $nr = 0;
 for ($i=0; $i < 3; $i++) {
     if( $visiDarbuotojai[$i][2] < $maziausiaData) {
         $maziausiaData = $visiDarbuotojai[$i][2];
         $nr = $i;
     }
 }
 echo "<br> Vyriausias: $maziausiaData <br>";
 echo $visiDarbuotojai[$nr][0] . $visiDarbuotojai[$nr][1];
 // 1.6) apskaiciuoti darbuotoju amziaus vidurki

// UZDUOTIS 2 --------------
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas

// 2.A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// butu gerai, jei kainos butu nuo 10 iki 200 eur (ivairios)
// 2.B. i masyva visosPrekes, ideti "preke" masyva
// 2.C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach(PHP kalba)) ir bootstrap dizaina

// nuotrauka (javascript kalbai)
// let x = "<img src='img/1.jpg' alt='medziginis fotelis'>";

// 2  budai nuotraukoms (PHP kalbai)
// printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
// printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);



// PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
// 3.1 surikiuoti prekes pagal kaina didejanciai
// 3.2 atrinkti prekias iki 100 eur
// sukurti visu prekiu masyvo kopija: i ja sudeti prekias iki 100 naudojant for arba foreach( PHP f-ja)
// 3.3 suapvalinti prekiu kainas , kad nebutu centu  google convert variable into integer

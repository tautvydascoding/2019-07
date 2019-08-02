<?php
// UZDUOTIS 1.0
// A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
$darbuotojas1 = ['Jonas', 'Jonaitis', 1980, 'Inspektorius'];

// B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
$darbuotojas2 = ['Ona', 'Onute', 1999, 'Sekretore'];

// C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
$darbuotojas3 = ['Kestas', 'Kerta', 2020, 'Pavaduotojas'];

// D. sukurti masyva 'visiDarbuotojai'
$visiDarbuotojai = [];

// E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
$visiDarbuotojai[0] = $darbuotojas1;
$visiDarbuotojai[1] = $darbuotojas2;
$visiDarbuotojai[2] = $darbuotojas3;

// print_r($visiDarbuotojai);

// UZDUOTIS 1.0
// isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla)
print_r($visiDarbuotojai[0]);
echo "<br>";

// UZDUOTIS 1.1
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
for ($i=0; $i < count($visiDarbuotojai); $i++) {
    echo "<br>";
    echo $visiDarbuotojai[0][$i];
}

// UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
for ($i=0; $i < count($visiDarbuotojai); $i++) {
    echo "<br>";
    echo $visiDarbuotojai[$i][0];
}
echo "<br>";

// UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
for ($i=0; $i < count($visiDarbuotojai); $i++) {
    echo "<br>";
    echo $visiDarbuotojai[0][$i] . " ";
    echo $visiDarbuotojai[1][$i] . " ";
    echo $visiDarbuotojai[2][$i] . " ";
}
echo "<br>";

// UZDUOTIS 1.4
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
for ($i=0; $i < count($visiDarbuotojai); $i++) {
    for ($a=0; $a < count($visiDarbuotojai); $a++) {
        echo "<br>";
        echo $visiDarbuotojai[$a][$i];
    }
}
echo "<br>";

// PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
// 1.5) surasti jauniausia darbuotoja
$didziausiaData = -999; //pabandyti isspresti sita uzdavini be sio kintamojo
$nr = -999;
for ($i=0; $i < count($visiDarbuotojai); $i++) { 
    if($visiDarbuotojai[$i][2] > $didziausiaData){
        $didziausiaData = $visiDarbuotojai[$i][2];
        $nr = $i;
    }
}
echo "Jauniausias darbuotojas: " . $didziausiaData . " ";
echo $visiDarbuotojai[$nr][0] . $visiDarbuotojai[$nr][1];
echo "<br>";

// 1.6) surasti seniausia darbuotoja
$maziausiaData = 99999999;
$nr1 = 99999999;
for ($i=0; $i < count($visiDarbuotojai); $i++) { 
    if($visiDarbuotojai[$i][2] < $maziausiaData){
        $maziausiaData = $visiDarbuotojai[$i][2];
        $nr1 = $i;
    }
}
echo "Vyriausias darbuotojas: " . $maziausiaData . " ";
echo $visiDarbuotojai[$nr1][0] . $visiDarbuotojai[$nr1][1];
echo "<br>";

// 1.6) apskaiciuoti darbuotoju amziaus vidurki
$a = $visiDarbuotojai[0][2];
$b = $visiDarbuotojai[1][2];
$c = $visiDarbuotojai[2][2];

$vidurkis = ($a + $b + $c) / 3;
echo (round($vidurkis));
?>
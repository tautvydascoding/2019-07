<?php

echo "Sveiki sveiki <br/>";

print("Einasi gerai <br/>");


$m = ["Tomas", "Tomauskas", 1998];
print_r($m);
print ("<br/>");
var_dump( $m);
print ("<br/>");
$autos = [
    ["Audi","A6",2004],
    ["BMW","X5",2010],
    ["Volvo","S70",2005],
    ["Seat","Toledo",1999],
    ["Craislser","Voager",1997],
];
print_r($autos);
print ("<br/>");

for ($i=0; $i < count($autos); $i++){
    echo $autos[$i] [0]."<br>";
}

// UZDUOTIS 1.0
// A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
// B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
// C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
// D. sukurti masyva 'visiDarbuotojai'
// E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus


$darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
$darbuotojas2 = ["Ona", "Onute", 1980, "sekretore"];
$darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];
$visiDarbuotojai = [$darbuotojas1, $darbuotojas2, $darbuotojas3];

print_r($visiDarbuotojai);

// UZDUOTIS 1.0
// isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla)
// UZDUOTIS 1.1
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
// UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
// UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
// UZDUOTIS 1.4
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)

print_r($visiDarbuotojai[0]);
print ("<br/>");

for ($i=0; $i < 4; $i++){
    echo $visiDarbuotojai[0] [$i]."<br>";
}

echo "Visu darbuotoju vardai: <br>";
for ($i=0; $i < count($visiDarbuotojai); $i++) {
    echo $visiDarbuotojai[$i] [0]."<br>";
};
echo "Visi darbuotojai: <br>";
for ($i=0; $i < 3; $i++) {
    echo $visiDarbuotojai[$i] [0]." ";
    echo $visiDarbuotojai[$i] [1]." ";
    echo $visiDarbuotojai[$i] [2]." ";
    echo $visiDarbuotojai[$i] [3]."<br>";
}
echo "Visi darbuotojai dar 1 karta: <br>";
for ($i=0; $i < 3; $i++) {
    for ($j=0; $j< 4; $j++) {
        echo $visiDarbuotojai[$i] [$j]." ";
    }
    echo"<br> ";
};
// PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
// 1.5) surasti jauniausia darbuotoja
// 1.6) surasti seniausia darbuotoja
// 1.6) apskaiciuoti darbuotoju amziaus vidurki

$didziausiaData = -999;
$nr = -999;
for ($i=0; $i < 3; $i++) {
    if ( $visiDarbuotojai[$i] [2] > $didziausiaData) {
        $didziausiaData = $visiDarbuotojai[$i] [2];
        $nr = $i;
    }

}
echo "Jauniausias:  $didziausiaData <br> ";


$maziausiaData = 9999;
$nr1 = 0;
for ($i=0; $i < 3; $i++) {
    if ( $visiDarbuotojai[$i] [2] < $maziausiaData) {
        $maziausiaData = $visiDarbuotojai[$i] [2];
        $nr1 = $i;
    }

}
echo "Vyriausias:  $maziausiaData <br> ";


// 1.6) apskaiciuoti darbuotoju amziaus vidurki

// for ($i=0; $i < 3; $i++) {
//     if ( $visiDarbuotojai[$i] [2] > $didziausiaData) {
//         $didziausiaData = $visiDarbuotojai[$i] [2];
//         $nr = $i;
//     }
//
// }
// echo "Jauniausias:  $didziausiaData <br> ";
//












 ?>

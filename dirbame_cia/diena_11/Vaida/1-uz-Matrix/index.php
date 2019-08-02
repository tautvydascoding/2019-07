
<?php


// UZDUOTIS 1.0
// A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
// B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
// C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
// D. sukurti masyva 'visiDarbuotojai'
// E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus


$visiDarbuotojai = [];
$darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
$darbuotojas2 = ["Ona", "Onute", 1980, "sekretore"];
$darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];

$visiDarbuotojai[0] = $darbuotojas1;
$visiDarbuotojai[1] = $darbuotojas2;
$visiDarbuotojai[2] = $darbuotojas3;

// UZDUOTIS 1.0
// isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla)


                 // stul eil
echo $visiDarbuotojai[1][0];  //vardas
echo $visiDarbuotojai[1][1]; //pav
echo $visiDarbuotojai[1][2]; //data
echo $visiDarbuotojai[1][3]; //pareigos
                    //i //k
echo "br";


// UZDUOTIS 1.1
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)

echo "Pirmo isvedimas su FOR ciklu: <br>";
for ($i=0; $i < 4 ; $i++) {
    echo $visiDarbuotojai[1][$i] . " ";

}

// UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)

echo "Visu darbuotoju tik vardai: <hr />";

for ($i=0; $i < 3; $i++) {
                // vis zmones visi duomeys
    echo $visiDarbuotojai[$i][0] . " ";
}
echo "<hr />";

// UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)

echo "Informacija apie kiekviena darbuotoja: <br>";

for ($i=0; $i < 3; $i++) {
    echo $visiDarbuotojai[$i][0] . " ";  //vardas
    echo $visiDarbuotojai[$i][1] . " ";  //pav
    echo $visiDarbuotojai[$i][2] . " ";   //data
    echo $visiDarbuotojai[$i][3] . "<br>";  //pareigos
}
echo "<hr />";

// / UZDUOTIS 1.4
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)


echo "viskas su FOR FOR <hr />";
for ($i=0; $i < 3; $i++) {
    for ($k=0; $k < 4; $k++) {
        echo $visiDarbuotojai[$i][$k] . " ";   //00, 01, 02, 03
    }
    echo "<br />";
}

// PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
// 1.5) surasti jauniausia darbuotoja


$didziausiaData = -9999;
$nr = -999;
for ($i=0; $i < 3 ; $i++) {
    if ($visiDarbuotojai[$i][2] > $didziausiaData) {
        $didziausiaData = $visiDarbuotojai[$i][2];
        $nr = $i;
    }
}

echo "Jauniausias: $didziausiaData <br>";
echo $visiDarbuotojai[$nr][0] . $visiDarbuotojai[$nr][1];


// 1.6) surasti seniausia darbuotoja
// 1.6) apskaiciuoti darbuotoju amziaus vidurki


$maziausiaData = 9999;
$nr = 0;
for ($i=0; $i < 3 ; $i++) {
    if ($visiDarbuotojai[$i][2] > $maziausiaData) {
        $maziausiaData = $visiDarbuotojai[$i][2];
        $nr = $i;
    }
}

echo "<br> Vyriausias: $maziausiaData <br>";
echo $visiDarbuotojai[$nr][0] . $visiDarbuotojai[$nr][1];


































 ?>

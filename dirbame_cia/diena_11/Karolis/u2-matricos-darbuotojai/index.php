
<?php

$darbuotojas1=["Jonas","Jonaitis",1980,"Inspektorius"];
$darbuotojas2=["ona","onute",1977,"sekretore"];
$darbuotojas3=["kestas","kerta",2001,"pavaduotojas"];
$visiDarbuotojai=[];
$visiDarbuotojai[0]=$darbuotojas1;
$visiDarbuotojai[1]=$darbuotojas2;
$visiDarbuotojai[2]=$darbuotojas3;

// <!-- // UZDUOTIS 1.0
// // isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla) -->

print_r( $visiDarbuotojai[0]  );
 // echo "<h2>$visiDarbuotojai[0][0] </h2>";
 // echo "<h2>$visiDarbuotojai[0][1] </h2>";
 // echo "<h2>$visiDarbuotojai[0][1] </h2>";
echo "<br>";
//<!-- // UZDUOTIS 1.1
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla) -->
for ($i = 0; $i <= 3; $i++) {
    echo $visiDarbuotojai[0][$i] . " " ; // pavadinima
    // echo $darbuotojas1[$i][2]  .  "<br>"; // metai
}
echo "<hr />";
//<!-- // UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla) -->
for ($i = 0; $i < 3; $i++) {
    echo $visiDarbuotojai[$i][0]   . "<br>";
}
echo "<hr />";
echo "<h2> FOR</h2>";
//<!-- // UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla) -->
for ($i = 0; $i < 3 ; $i++){
    echo $visiDarbuotojai[$i][0] . " ";
    echo $visiDarbuotojai[$i][1] . " ";
    echo $visiDarbuotojai[$i][2] . " ";
    echo $visiDarbuotojai[$i][3] . "<br>";
}
echo "<hr />";
echo "<h2> FOR FOR</h2>";
// //<!-- // UZDUOTIS 1.4
// // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus) -->
for ($i = 0; $i <= 2 ; $i++){
    for ($k = 0 ; $k < 4 ; $k++){
        echo $visiDarbuotojai[$i][$k] . " ";
    }
    echo "<br>";
}
//
echo "<hr />";
echo "<h3>Jauniausias:</h3>";
//<!-- // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
// 1.5) surasti jauniausia darbuotoja
$didz = -9999;
$nr = -9999;
for ( $i = 0 ; $i < 3 ; $i++){
    if ( $visiDarbuotojai[$i][2] > $didz ){
        $didz = $visiDarbuotojai[$i][2];
        $nr = $i;
    }
}
echo "<br>Jauniausias: $didz <br>";
echo $visiDarbuotojai[$nr][0] . " " . $visiDarbuotojai[$nr][1];

echo "<hr />";
echo "<h3>Vyriausias</h3>";
// 1.6) surasti seniausia darbuotoja
$maziausias = 9999;
$nr1 = 0;
for ( $i = 0 ; $i < 3 ; $i++){
    if ( $visiDarbuotojai[$i][2] < $maziausias ){
        $maziausias = $visiDarbuotojai[$i][2];
        $nr1 = $i;
    }
}
echo "<br>Vyriausias: $maziausias <br>";
echo $visiDarbuotojai[$nr1][0] . " " . $visiDarbuotojai[$nr1][1];
// 1.6) apskaiciuoti darbuotoju amziaus vidurki -->



?>

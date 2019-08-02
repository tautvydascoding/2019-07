
<?php

// =================svarbus patarimai===================:
// ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
// FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
// matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
// matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
// matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
// matricos ilgis daznai skiriasi nuo plocio.
//  pvz.:
 // for ( i < eiluciuSkaicius)
 //    for ( k < stulpeliuSkaicius)
 // =================// =================// ========

 echo "Sveiki sveikai <br />";
 echo "<br />";


     // UZDUOTIS 1.0
     // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
     $darbuotojas1 = ["Jonas", "Jonaitis", 1998, "Inspektorius"];

     // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
     $darbuotojas2 = ["Ona", "Onute", 1980, "sekretore"];

     // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
     $darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];

     // D. sukurti masyva 'visiDarbuotojai'
     $visiDarbuotojai = [];

     // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
     $visiDarbuotojai[0] = $darbuotojas1;
     $visiDarbuotojai[1] = $darbuotojas2;
     $visiDarbuotojai[2] = $darbuotojas3;

     // UZDUOTIS 1.0
     // isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla)
     echo "<br />";
     print_r($darbuotojas1);
     echo "<br />";
     print_r($visiDarbuotojai);
     echo "<br />";
      echo "<br />";

     echo $visiDarbuotojai [1][0];
     echo $visiDarbuotojai [1][1];
     echo $visiDarbuotojai [1][2];
     echo $visiDarbuotojai [1][3];
     echo "<br />";
     echo "<br />";


             // UZDUOTIS 1.1
     // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
echo "Pirmo isvedimas su for ciklu: <hr />";
     for ($i=0; $i < 4; $i++) {
         echo $visiDarbuotojai[1][$i];
    }
    echo "<br />";

     // UZDUOTIS 1.2
     // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
     echo "Visu darbuotoju vardai: <hr />";
     for ($i=0; $i < 3; $i++) {
         echo $visiDarbuotojai[$i][0] . "<br>";
     }

     echo "<br />";
     echo "<hr />";


     // UZDUOTIS 1.3
     // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)

 echo "Informacija apie visus darbuotojus su vienu for ciklu: <hr />";
     for ($i=0; $i < 3; $i++) {
         echo $visiDarbuotojai[$i][0] . " ";
         echo $visiDarbuotojai[$i][1] . " ";
         echo $visiDarbuotojai[$i][2] . " ";
         echo $visiDarbuotojai[$i][3] . "<br /> ";
     }

 echo "<hr />";
     // UZDUOTIS 1.4
     // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
echo "Informacija apie visus darbuotojus su dviem for ciklais: <hr />";

     for ($i=0; $i < 3; $i++) {
         for ($k=0; $k < 4; $k++) {
             echo $visiDarbuotojai[$i][$k] . " ";
             }
 echo "<br />";
}
echo "<br />";


     // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
     // 1.5) surasti jauniausia darbuotoja
$didziausiaData = -999;
$nr = -999;
for ($i = 0; $i < 3; $i++) {
    if ($visiDarbuotojai[$i][2] > $didziausiaData) {
        $didziausiaData = $visiDarbuotojai[$i][2];
        $nr = $i;
    }
}
echo "Jauniausias: $didziausiaData <br />";
echo $visiDarbuotojai[$nr][0] . $visiDarbuotojai[$nr][1];
echo "<br />";
echo "<br />";

     // 1.6) surasti seniausia darbuotoja
 $maziausiaData = 999999;
 $nr = 999999;
 for ($i = 0; $i < 3; $i++) {
     if ($visiDarbuotojai[$i][2] < $maziausiaData) {
         $maziausiaData = $visiDarbuotojai[$i][2];
         $nr = $i;
     }
 }
 echo "Vyriausias: $maziausiaData <br />";
 echo $visiDarbuotojai[$nr][0] . $visiDarbuotojai[$nr][1];
echo "<br />";
echo "<br />";


     // 1.6) apskaiciuoti darbuotoju amziaus vidurki

echo "<br />";








 ?>

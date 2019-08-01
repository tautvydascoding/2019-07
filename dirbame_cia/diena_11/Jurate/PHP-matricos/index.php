<?php
// išvedimo/spausdinimo būdai:
echo "Labas rytas <br>";
print("Sveiki <br>");

// spausdina masyvus, moka spausdinti objektus, tekstus, numerius:
// print_r daugiausiai skirtas dirbti su masyvais
$m = ['Tomas', 'Tomaitis', 1994, 19.49];
print_r($m);
print_r("<br> Labas rytas vėl <br>");

// profesionali spausdinimo komanda, duoda išsamią informaciją, kaip print_r komanda, tik dar išspausdina kintamųjų tipus:
var_dump("Masyvas: ", $m);

// Matricos (masyvas esantis masyve):
$autos = [];
$audi = ['Audi', 'A3', 2008];
$volvo = ['Volvo', 'S60', 2015];

// Įdedam į tuščią masyvą AUTOS sukurtus 2 automobilių masyvus
$autos[0] = $audi;
$autos[1] = $volvo;

// Paimam iš pagrindinio masyvo informaciją apie automobilius
$audiMetai = $autos[0][2]; // atsakymas 2008
$volvoPavadinimas = $autos[1][0]; // atsakymas Volvo

// Norim pakeisti informaciją:
// Pakeičiam Audi automobilio modelį iš A3 į A4
$autos[0][1] = "A4";

// Taisyklingos matricos turi būti su vienodu skaičiumi stulpelių ir eilučių
// Masyve yra 3 stulpeliai(3 masyvai) ir 3 eilutės(vidiniuose 3 masyvuose yra po 3 reikšmes)


// Kuriam matricą (2 būdas, trumpesnis):
$automobiliai = [
                $bmw = ['BMW', 'X5', 2015], // [0]
                $ford = ['Ford', 'Fiesta', 2010] // [1]
];

echo "<br>";
echo "<br>";
print_r($automobiliai);
echo "<br>";

// Išsivedimas su for ciklu

for ($i=0; $i < count($automobiliai); $i++) {
    echo $automobiliai[$i][0] . "<br>"; //pavadinimas
    echo $automobiliai[$i][2] . "<br>"; //metai
}

// dvigubi ciklai
for ($i=0; $i < count($automobiliai); $i++) {
    for ($k=0; $k < count($automobiliai); $k++) {
        echo $automobiliai[$i][$k] . "<br>"; //pavadinimas
        echo $automobiliai[$i][$k] . "<br>"; //metai
    }
}
?>
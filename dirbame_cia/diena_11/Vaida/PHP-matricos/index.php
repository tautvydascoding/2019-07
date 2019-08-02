

<?php



// stringai

    echo "Sveiki <br />";
    print ("Einasi gerai <br />");

    $m = ["Tomas, Jortautas", 1995];
    print_r( $m );
    print_r( "Jokubo istorijos <br />");

    //issamus spausdinimas
    var_dump( $m ); // kaip print_r tik tipais


    $autos = [
            ["AUDI", "A6", 2004],   // [0] stalcius
            ["BMW", "X6", 2010]     // [1] stalcius
        ];

//ARBA kitas budas

    $autos = [];
    $autos1 = ["AUDI", "A6", 2004];
    $autos2 = ["BMW", "X4", 2010];
    $autos[0] = $autos1;
    $autos[1] = $autos2;


// pasitikrinimas
    echo "<BR />";
    print_r( $autos );


//issivedimas su for ciklu
for ($i=0; $i < count($autos); $i++) {
    echo $autos[$i][0] . "<br>"; //pavadinimas
    echo $autos[$i][2] . "<br>"; //metai


}



// UZDUOTIS 1.0
// A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
// B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
// C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
// D. sukurti masyva 'visiDarbuotojai'
// E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus


$visiDarbuotojai = [];
$darbuotojas1: ["Jonas", "Jonaitis", 1980, "Inspektorius"];
$darbuotojas2: ["Ona", "Onute", 1980, "sekretore"];
$darbuotojas3: ["Kestas", "Kerta", 2001, "pavaduotojas"];

$visiDarbuotojai[0] = $darbuotojas1;
$visiDarbuotojai[1] = $darbuotojas2;
$visiDarbuotojai[2] = $darbuotojas3;

// UZDUOTIS 1.0
// isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla)


print_r( $darbuotojas1 );





 ?>

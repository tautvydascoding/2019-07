<?php



// susikurti asocc. masyva
$autoData = [
                "vardas" => "Audi",
                "metai" => 2009,
                "kaina" => 6000
            ];

// atspausdinti su foreach ciklu
foreach ($autoData    as $key => $value) {
    echo $key . "<br />";  // vardas,  metai, kaina
    echo $value  . "<br />"; // audi, 2009, 6000
}
// pakeisti metus
$autoData["metai"] = 2008;

// pasitikrinti
echo "testuoju:" . $autoData["metai"] . "<br />";
echo "testuoju:  {$autoData['metai']}    <br />" ;
print_r(  $autoData );
var_dump(  $autoData );
die( "paskutiniai zodziai..");
echo "labas"; // niekada nesuveiks

// papildyti masyva stalciumi: "modelis"  pvz "A6"
// $autoData[0] = "A6";
$autoData["modelis"] = "A6";

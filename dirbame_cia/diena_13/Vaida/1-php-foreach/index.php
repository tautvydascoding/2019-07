<?php


//susikurti asocc masyva

$autoData = [
            "vardas" => "Audi",
            "metai" => 2009,
            "kaina" => 6000
            ];

//atspaudinti su foreach ciklu

foreach ($autoData as $auto) {
    echo "automoblis  $auto . <br />";
}

// foreach ($variable as $key => $value) {
//     echo $key;  //vardas, metai, kaina
//     echo $value; // audi, 2009,6000
// }

echo "<hr />";
//
// //pakeisti metus
//
$autoData["metai"] = 2015;

// PASITIKRINIMAS keliais budais
echo $autoData["metai"] . "<br />";

echo "testuoju:" . $autoData["metai"] . "<br />";
echo "testuoju: . {$autoData['metai']} . <br />";
print_r( $autoData );
var_dump( $autoData );


echo "<hr />";

// echo "pakeisti metai: $autoData['metai'] . <br />"; neis atspaudint


//papildyti masvyva stalciumi: "modelis" pvz "A6"
// $autoData

$autoData["modelis"]="A6";
echo $autoData["modelis"] . "<br />";

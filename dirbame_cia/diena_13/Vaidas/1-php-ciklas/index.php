<?php

//sukurti asocc. masyva
$autoData = [
                "vardas" => "Audi",
                "metai" => 2009,
                "kaina" => 6000
];

//atspausdinti su foreach ciklu

foreach ($autoData as $key => $value) {
    echo $key . "<br />";   //vardas, metai, kaina
    echo $value . "<br />"; //audi, 2009, 600
}


// pakeisti metus

// $autoData = 2008; // blogai, istrynem masyva visai.

$autoData["metai"] = 2008;

//pasitikrinti
echo "testuoju:" . $autoData["metai"] . "<br />";
//arba geriau taip:
echo "testuoju: {$autoData['metai']} <br />";

print_r($autoData);
var_dump($autoData);

die("paskutiniai zodziai...");
echo "labas"; // niekada daugiau nesuveiks niekas po die...



//papildyti masyva stalciumi:"modelis", pvz "A6"

// $autoData[0] = "A6"; // senovinis budas
$autoData

 ?>

<?php
$autoData = [
    "name" => "Audi",
    "year" => 2009,
    "price" => "8000$"
];

// Atspausdinam su foreach ciklu viska informaciją esančią masyve
foreach ($autoData as $value) {
    echo $value . " ";
}

// Pakeičiam automobilio metus
$autoData['year'] += 2;
echo "<br/>" . $autoData['year'] . "<br/>";
echo "testuoju: {$autoData['year']} <br/>";

// Papildome masyvą dar vienu stalčiumi: 'modelis' => 'A6';
$autoData['model'] = 'A6';
echo "<br/>";
echo "<hr>";

foreach ($autoData as $parameter) {
    echo $parameter . " ";
}
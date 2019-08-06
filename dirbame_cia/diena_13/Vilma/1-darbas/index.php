<?php
$vardas = "Petras";
$pavarde = "Petraitis";
$straipsnis = ['BMW vel preleke saligatviu',   'Lorem lorem....', '2010-12-01'];
$straipsnis2 = ['Kiek pabrangs alkoholis', 'Lorem ipsum.......', '2019-08-05'];


$autoData = ["vardas" => "Audi",
            "metai" => 2009,
            "kaina" => 6000
            ];

foreach ($autoData as $value) {
            echo $value. "<br/>";}


$autoData["kaina"] += 100;
$autoData["modelis"] = "A6";

foreach ($autoData as $value) {
            echo $value. "<br/>";};

echo " Testuoju: {$autoData['metai']}";

print_r ($autoData);


die("Paskutinė žinutė...");
echo "Labas";// niekada nesuveiks, nes po die jau niekas neveikia

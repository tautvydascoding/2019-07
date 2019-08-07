<?php
// UZDUOTIS
// 1.1 index.php faile sukurti 2 kintamuosius $vardas, $pavarde
// 1.2 index.php faile sukurti masyva: 'straipnis' = ['antraste', 'aprasymas', 'data'];
//
// pvz:   'BMW vel preleke saligatviu',   'Lorem lorem....', '2010-12-01'

// 2. index.php faile  ideti:
// include( 'straipsnis.php');

// 2.0. suskurti faila:  straipsnis.php
// 2.1 straipsnis.php faile sukurti <div> ir jo viduje isvesti su echo $vardas, $pavarde
// 2.2 straipsnis.php faile sukurti   'container' 'main' 'article'
// 2.3 'article' videje sukurti:
// 2.3.1    sukurti 'h2' ir jo viduje isvesti antrastę (is masyvo)
// 2.3.2    sukurti 'paragrafa' ir jo viduje isvesti aprasymą  (is masyvo)
// 2.3.3    sukurti '<div>' ir jo viduje isvesti datą  (is masyvo)


$autodata = ["Marke" => "Audi",
             "metai" => 2010 ,
             "kaina" => 6010];
$x = $autodata ["Marke"];
echo "<h1>$x</h1>";
$autodata ["kaina"] +=100;
$autodata += ["modelis" => "a6"];
foreach($autodata as $masina => $val){
    echo "<h3>$masina</h3>";
    echo "<h3>$val</h3>" . "<br>";
};
$z = $autodata["modelis"];
echo "<h1>$z</h1>";
// echo "<h2>$autodata['modelis']</h2>";
print_r($autodata);


<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
<h1>PHP objektų paėmimas ir keitimas</h1>

<?php
require_once('zmogus.php');
// $Monika = new Zmogus("Monik", 155);
// print_r($Monika);
//
//
// $Monika->setManoVardas("Monika");
// echo "vardas: ".$Monika->getManoVardas()."<br />";
//
//
// $Monika->setManoUgis("159");
// echo "ūgis: ".$Monika->getManoUgis()."<br />";
// print_r($Monika);

$Monika = new Zmogus("Monikute", 167);
$Kestas = new Zmogus("Kestas", 200);
$Antanas = new Zmogus("Jonas Antanas", 190);

echo "vardas: ".$Monika->getManoVardas()."<br />";
echo "ūgis: ".$Monika->getManoUgis()."<br />";

echo "vardas: ".$Kestas->getManoVardas()."<br />";
echo "ūgis: ".$Kestas->getManoUgis()."<br />";

echo "vardas: ".$Antanas->getManoVardas()."<br />";
echo "ūgis: ".$Antanas->getManoUgis()."<br />";




?>
    </body>
</html>

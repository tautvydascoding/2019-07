<?php
$preke1 = [6.55, "Kopūstai", 3];
$preke2 = [3.99, "Morkos", 5];
$preke3 = [1.55, "Svogūnai", 1];
$preke4 = [2.33, "Paprikos", 8];

$visosPrekes = [$preke1, $preke2, $preke3, $preke4];

$numeris = $_GET['x'];

$manoPreke =  $visosPrekes[$numeris];


echo "numeris: $numeris <br />";
echo $preke1[$numeris] . "<hr />";

print_r($manoPreke);
echo "<hr />";

 ?>

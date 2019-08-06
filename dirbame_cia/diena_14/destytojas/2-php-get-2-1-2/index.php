<?php


echo "tesktas is URL adreso: <br />";

$preke1 = [499, "XXL dviratis", "2 vnt."];

$numeris = $_GET['x']; // is URL adreso paimtas   ?x=....

echo "numeris is URL adreso: $numeris <br />";
echo $preke1[$numeris] . "<hr />";
// ----------------------B------
$preke1 = [499, "XXL dviratis", "2 vnt."];
$preke2 = [199, "Paspirtukas", "250 vnt."];
$preke3 = [399, "Rieduciai", "60 vnt."];
$visosPrekes[0] = $preke1;
$visosPrekes[1] = $preke2;
$visosPrekes[2] = $preke3;
// arba
$visosPrekes = [$preke1, $preke2, $preke3];

$numeris = $_GET['x']; // is URL adreso paimam x

$manoPreke =  $visosPrekes[$numeris];  // $numeris -URL adrese nurodyta preke masyve
print_r($manoPreke); // test
echo "<hr />";


//

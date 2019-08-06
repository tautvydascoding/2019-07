<?php
// 2.2 UZDUOTIS
// include_once('Doctor-db-functions.php');
// $numeris = 8; // norimo gydytojo id numeris
// $gydytojas = getDoctor($numeris);

// // echo $gydtojas[1] . " " . $gydtojas[2] . "<br/>";
// print_r($gydytojas);
// echo "<br/>" . $gydytojas['name']. " " . $gydytojas['lastName'] . "<br/>";

// 2.3 UZDUOTIS
include_once('Doctor-db-functions.php');
$numeris = $_GET['nr'];
$gydytojas = getDoctor($numeris);
echo $gydytojas["name"] . " " .  $gydytojas['lastName'] ;
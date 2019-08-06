<?php
include_once('doctor-db-functions.php');

echo "Gydytojas: <br />";

$numeris = 4;  // norimo gydytojo is DB numeris (id)
$gydytojas = getDoctor( $numeris);

// print_r($gydytojas); // test
echo $gydytojas[1] .  $gydytojas[2] ;

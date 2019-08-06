<?php

include_once('doctors_functions.php');

$numeris = 5;  // norimo gydytojo is DB numeris (id)
$gydyt = getDoctor($numeris);

echo $gydyt[1] .  $gydyt[2] ;
echo $gydyt["name"] . $gydyt['lname'] ;


 ?>

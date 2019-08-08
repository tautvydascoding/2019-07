<?php

include_once('hospital_db_function.php');

$numeris = 7;  // norimo gydytojo is DB numeris (id)
$numeris = $_GET['nr'];
$gydyt = getDoctor($numeris);

echo $gydyt[1] .  $gydyt[2] ;
//echo $gydyt["name"] . $gydyt['lname'] ;


 ?>

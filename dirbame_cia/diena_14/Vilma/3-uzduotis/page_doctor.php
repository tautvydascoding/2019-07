<?php
include_once('hospital_db_function.php');
//print_r($_GET);

$numeris = $_GET['nr'];
$gydytojas = getDoctor($numeris);
//print_r($gydytojas);
echo "<h1>  GYDYTOJAS: $gydytojas[1] $gydytojas[2] </h1>";
 ?>

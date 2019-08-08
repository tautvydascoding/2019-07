<?php
include_once('patient_DB_functions.php');
//print_r($_GET);

$numeris = $_GET['nr'];
$pacientas = getPatient($numeris);
//print_r($gydytojas);
echo "<h1>  LIGONIS: $pacientas[1] $pacientas[2] </h1>";
 ?>

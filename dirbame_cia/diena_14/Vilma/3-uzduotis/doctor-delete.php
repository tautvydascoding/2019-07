<?php
include_once('hospital_db_function.php');
session_start();

$numeris = $_GET['nr'];
$gydytojas = deleteDoctor($numeris);
echo " <h3 class='bg-success'> Gydytojas".$numeris."pašalintas sėkmingai </h3>";


//$a = $_SESSION["Gydytojas sėkmingai pašalintas"];

header('Location: '.'index.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
    </head>

<?php
include_once('patient_DB_functions.php');


$numeris = $_GET['nr'];
$pac = deletePatient($numeris);
echo " <h3 class='bg-success'>". $numeris. " pacientas pašalintas sėkmingai </h3>";


//$a = $_SESSION["Gydytojas sėkmingai pašalintas"];

header('Location: '.'index.php');
 ?>

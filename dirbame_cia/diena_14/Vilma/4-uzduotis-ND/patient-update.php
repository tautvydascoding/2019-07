<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
    </head>
    </html>

<?php
include_once('patient_DB_functions.php');
$vardas = $_GET['vard'];
$pavarde =$_GET['pavard'];
$did = $_GET['gydId'];
$nr = $_GET['nr'];
editPatient($nr, $vardas, $pavarde, $did);
echo " <h3 class='bg-success' > Pacientas ".$vardas. "  ".$pavarde." sėkmingai pakeistas </h3>";

 ?>
<a class ="btn btn-info" href="index.php">Atgal</a>

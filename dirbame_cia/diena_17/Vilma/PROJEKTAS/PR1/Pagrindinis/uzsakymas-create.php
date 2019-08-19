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
include_once('prekes-db-functions.php');
$prisijungti = getPrisijungimas();
session_start();// Sesija prasideda
$uzsakymas = $_SESSION["shopping_cart"];
print_r($uzsakymas);
//createUzsakymas($uzsak_id, $prekes_id, $kiekis);

echo " <h3> Prekė sėkmingai įdėta į krepšelį </h3>";
 ?>
<a class ="btn btn-info" href="prekiu_krepselis.php">Atgal</a>

<?php
include_once('patient_DB_functions.php');
 ?>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
    </head>
    <body class="bg-light text-dark ">
        <a class="btn btn-success" href="page-pac-form.php">NAUJAS PACIENTAS</a>
        
        <ul>

<?php

$visiPac = getPatients(15);//grista mysql objektas su daug gydytoju reikia fech
$pac = mysqli_fetch_assoc($visiPac);
while ($pac) {
    echo "<li> <h2> <a href='page_pac.php?nr={$pac['id']}'> Paciento pavardė:   ".$pac['lname']." </a></li> </h2>";
    echo " <a class='btn bg-danger text-white' href='pac-delete.php?nr={$pac['id']}'> TRINTI </a> ";
    echo " <a class='btn bg-success text-white ' href='page-patient-form-update.php?nr={$pac['id']}'> PAKEISTI </a> <br/>";
    $pac = mysqli_fetch_assoc($visiPac);
}
 ?>
      </ul>
    </body>
</html>

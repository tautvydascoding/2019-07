<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
        include('doctor-db-functions.php');
            // print_r($_GET); //test
            $numeris = $_GET['nr'];
            $gydytojas = getDoctor($numeris);
            // print_r($gydytojas);

            echo "<h1> Gydytojas: $gydytojas[1]  $gydytojas[2] </h1>";

         ?>





    </body>
</html>


<?php




// getDoctor(x);
// // $numeris = $_GET['nr'];
// // $gydytojas = getDoctor( $numeris);
// echo $gydytojas[1] . " " .  $gydytojas[2] . " " $gydytojas[0];



// uzduotis 2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra 4
// uzduotis 3.1: atspausdinti visas gydytoju pavardes naudojant FOR cikla, kaip list item "ul li"
// uzduotis 3.2: patobulinti 'uzduotis3',
    // kad paspaudus ant gydytojo pavardes   atidarytu doctor.php faila
    // HINT: '<a href=""></a>' nuorodoje,
// uzduotis 3.3:
    //     doctor.php faile isvesti info apie - paspausta gydytoja:
    //     vardas pavarde numeris
    //
    // HINT: 'a' nuorodoje, prideti '?kintamasis=...'   ir doctor.php faile su $_GET pasiimti kintamaji

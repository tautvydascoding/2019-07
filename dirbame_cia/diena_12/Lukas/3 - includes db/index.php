<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Hear me and rejoice</title>
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/master.css" />
        <?php
        include_once("header.php");
        include_once("main.php");
        include_once("footer.php");
        require_once("doctor-db-functions.php");
         ?>
    </head>
    <body>
        <?php

        // $gydytojas4 = getDoctor(3);
        //
        // echo "<h2> $gydytojas4[1] $gydytojas4[2]</h2>";

        // su for ciklu
        for($i = 1; $i < 6; $i++) {
            $gyd = getDoctor($i);
            echo "<h2> $gyd[1] $gyd[2]</h2>";
        }

         ?>
    </body>
</html>

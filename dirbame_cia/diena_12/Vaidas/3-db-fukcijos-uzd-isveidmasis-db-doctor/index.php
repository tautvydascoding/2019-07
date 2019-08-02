<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <!-- galimos klaidos -->
        <!-- blogas kelias iki failo -->
        <!-- "/" ne i ta puse -->
        <!-- neuzdarete ">" -->
        <link rel="stylesheet" href="css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>

    <body>

        <h1> Isijunk inspect->console </h1>


        <?php

        include_once("doctor-db-functions.php");
        $gyd1 = getDoctor(1);
        // print_r($gyd1); // test
        echo "<h2>  $gyd1[1] $gyd1[2]   </h2>";
        $gyd2 = getDoctor(2);
        echo "<h2>  $gyd2[1] $gyd2[2]   </h2>";
        $gyd3 = getDoctor(3);
        echo "<h2>  $gyd3[1] $gyd3[2]   </h2>";
        $gyd4 = getDoctor(4);
        echo "<h2>  $gyd4[1] $gyd4[2]   </h2>";
        $gyd5 = getDoctor(5);
        echo "<h2>  $gyd5[1] $gyd5[2]   </h2>";
?>
<hr />


<?php
//======================================
//kaip ta pati padaryti si for ciklu:
for ($i=1; $i < 6; $i++) {
    $gyd = getDoctor( $i );
    echo "<h2>  $gyd[1] $gyd[2]   </h2>";
}






?>


        <!-- bootstrap'ui -->
        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js">    </script>

        <!-- mano js failas visasda pats zemiausias ir failo apacioje -->
        <script type="text/javascript" src="main.js">

        </script>


    </body>
</html>

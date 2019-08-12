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

        <h1> Visos mano prekes </h1>

            <p>
                <?php
                include('el-parduotuves-db-prekes-functions.php');


                ?>
<!-- New - create doctor mygtukas -->

<a class="btn btn-success" href="page-prekes-form.php"> Nauja preke </a>




<?php

//--------------------------------------------su while ciklu-------


                    $visosPrekes = getPrekes(); // gryzta MySQL objektas, ne masyvas (jo viduje yra daug prekiu)
                    // print_r($visosPrekes);

                    $prekesARRAY = mysqli_fetch_assoc( $visosPrekes );  // array masyvas
                    // print_r($prekesARRAY);

                    while ($prekesARRAY){
                        echo "<ul>" .
                                    "<li>" .
                                        "<h4>" .
                                            "<a href='page-prekes.php?nr={$prekesARRAY['id']}'>" .
                                                $prekesARRAY['id'] . " " .
                                                $prekesARRAY['pavadinimas'] . " " .
                                                // $prekesARRAY['aprasymas'] . " " .
                                                // $prekesARRAY['kaina'] . " " .
                                                // $prekesARRAY['nuolaida'] . " " .
                                                // $prekesARRAY['pozicija'] . " " .
                                                // $prekesARRAY['kiekis'] . " " .
                                                // $prekesARRAY['ar_rodyti'] .
                                                "</a>" . " " .
                                                // "<a class='btn bg-danger text-white' href='preke-delete.php?nr={$prekesARRAY['id']}'> DELETE </a>" . " " .
                                                "<a class='btn bg-warning text-white' href='page-prekes-update-form.php?nr={$prekesARRAY['id']}'> KEISTI </a>" . " " .
                                        "</h4>" .
                                    "</li>" .
                            "</ul>" .
                            "<hr />";
                        $prekesARRAY = mysqli_fetch_assoc($visosPrekes);
                    }

//---------------------------------------------------------
 ?>

            </p>


        <!-- bootstrap'ui -->
        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js">    </script>

        <!-- mano js failas visasda pats zemiausias ir failo apacioje -->
        <script type="text/javascript" src="main.js">

        </script>


    </body>
</html>

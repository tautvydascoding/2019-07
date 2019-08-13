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

        <h1> Visi gydytojai </h1>

            <p>
                <?php
                include('doctor-db-functions.php');


?>
<!-- New - create doctor mygtukas -->

<a class="btn btn-success" href="page-doctor-form.php"> New </a>




<?php

//---------------------------------------------------

                // vardas pavarde issivesti

                // echo "Gydytojas: <br />";
                //
                //     $numeris = 4;  // norimo gydytojo is DB numeris (id)
                //
                //     $gydytojas = getDoctor( $numeris);
                //     // print_r($gydytojas);
                //
                //     echo $gydytojas[1] . " " . $gydytojas[2] ;

//------------------------------------------------su for ciklu-----------
        // for ($i=0; $i < 10; $i++) {
        //     $gydytojas = getDoctor($i);
        //     echo "pavarde:  $gydytojas[2] <br />";
        // }
        // echo "<hr />";



//--------------------------------------------su while ciklu-------


                    $visiGydytojai = getDoctors(); // gryzta MySQL objektas, ne masyvas (jo viduje yra daug gydytoju)
                    // print_r($visiGydytojai);

                    $gydytojasArray = mysqli_fetch_assoc( $visiGydytojai );  // array masyvas
                    // print_r($gydytojasArray);
                    // ar tiesa? ar gydytojas yra?
                    while ($gydytojasArray){
                        echo "<ul>" .
                                    "<li>" .
                                        "<h4>" .
                                            "<a href='page-doctor.php?nr={$gydytojasArray['id']}'>" .
                                                $gydytojasArray['name'] . " " .
                                                $gydytojasArray['lname'] . " " .
                                                $gydytojasArray['id'] . "</a>" . " " .
                                                "<a class='btn bg-danger text-white' href='doctor-delete.php?nr={$gydytojasArray['id']}'> DELETE </a>" . " " .
                                                "<a class='btn bg-warning text-white' href='page-doctor-update-form.php?nr={$gydytojasArray['id']}'> KEISTI </a>" . " " .
                                        "</h4>" .
                                                // "<a class='btn bg-danger text-white' href='doctor-delete.php?nr={$gydytojasArray['id']}'> DELETE </a>" .
                                    "</li>" .
                            "</ul>" .
                            "<hr />";
                        $gydytojasArray = mysqli_fetch_assoc($visiGydytojai);
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

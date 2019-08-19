<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
    </head>

    <body>


        <div class="container-fluid">

            <header class="row  aukstis-100  bg-info">
                <div class="col-md-12   bg-warning">
                    <!-- Header -->
                    <nav class="float-kaire">
                            <ul>
                                <li class="float-kaire"><a href="editor.php">Redagavimas</a></li>
                                <li class="float-kaire"><a href="#">Apmokėjimas</a></li>
                                <li class="float-kaire"><a href="registracija.php">Registracija</a></li>
                                <li class="float-kaire"><a href="contacts.html">Kontaktai</a></li>
                                <div class="isjungiu-float"> </div>
                            </ul>
                    </nav>

                    <div class="paieska    float-kaire">
                        <form class="" action="index.html" method="post">
                            <input type="text" name="paieska" placeholder="paieska" value="">
                            <button type="submit" >Ieškoti</button>
                        </form>
                    </div>
                </div>
            </header>

            <div class="row  mt-2 mb-2">
                <nav class="col mt-4 mr-2 ">
                    <h3>Prekiu grupes</h3>
                    <ul>
                        <li> <h5> 1 prekių grupė </h5> </li>
                        <li> <h5> 2 prekių grupė </h5> </li>
                        <li> <h5> 3 prekių grupė </h5> </li>
                    </ul>
                </nav>

                <main class="col-md-10  ">
                    <h3> Visos prekes </h3>

                        <?php
                        include('el-parduotuve-db-prisijungimas.php');
                        include('el-parduotuves-db-prekes-functions.php');
                        include('el-parduotuves-db-fotos-functions.php');


                        // getdoctor funkcija issisaukti = virs:

// SVARBU
            // bandau su fotos:
                        // $visosFotos = getFotos();
                        // $fotosARRAY = mysqli_fetch_assoc($visosFotos);
                        // while ($fotosARRAY){
                        //     include ("tamplate_preke_mini.php");
                        //     $fotosARRAY = mysqli_fetch_assoc($visosFotos);
                        // }




                        $visosPrekes = getPrekes();
                        $prekesARRAY = mysqli_fetch_assoc( $visosPrekes );  // array masyvas
                        // zemiau dvi eilutes padaryti analogiskai su fotos
                        // $visosPrekes = getPrekes();
                        // $prekesARRAY = mysqli_fetch_assoc( $visosPrekes );  // array masyvas
                        while ($prekesARRAY){
                            include ("tamplate_preke_mini.php");
                            $prekesARRAY = mysqli_fetch_assoc($visosPrekes);

                            // zemiau eilute padaryti analigiskai su fotos
                            // $prekesARRAY = mysqli_fetch_assoc($visosPrekes);
                            }




                            // $visosFotos = getFotos();
                            // $fotosARRAY = mysqli_fetch_assoc($visosFotos);
                            // while ($fotosARRAY){
                            //
                            //     // echo "string";
                            //     $fotosARRAY = mysqli_fetch_assoc($visosFotos);
                            // }

                         ?>


                </main>
            </div>

            <footer class="row aukstis-100  bg-warning">
                <div class="col-md-12">
                    &#169; Copyright 2019
                </div>
            </footer>

        </div>




            <p>
                <?php
                // include('el-parduotuve-db-prisijungimas.php');
                // include('el-parduotuves-db-prekes-functions.php');
                // include('el-parduotuves-db-fotos-functions.php');


                ?>


<!-- <a class="btn btn-success" href="page-prekes-form.php"> Nauja preke </a> -->




<?php

//--------------------------------------------su while ciklu-------

                    //
                    // $visosPrekes = getPrekes(); // gryzta MySQL objektas, ne masyvas (jo viduje yra daug prekiu)
                    // // print_r($visosPrekes);
                    //
                    // $prekesARRAY = mysqli_fetch_assoc( $visosPrekes );  // array masyvas
                    // // print_r($prekesARRAY);
                    //
                    // while ($prekesARRAY){
                    //     echo "<ul>" .
                    //                 "<li>" .
                    //                     "<h4>" .
                    //                         "<a href='page-prekes.php?nr={$prekesARRAY['id']}'>" .
                    //                             $prekesARRAY['id'] . " " .
                    //                             $prekesARRAY['pavadinimas'] . " " .
                    //                             // $prekesARRAY['aprasymas'] . " " .
                    //                             // $prekesARRAY['kaina'] . " " .
                    //                             // $prekesARRAY['nuolaida'] . " " .
                    //                             // $prekesARRAY['pozicija'] . " " .
                    //                             // $prekesARRAY['kiekis'] . " " .
                    //                             // $prekesARRAY['ar_rodyti'] .
                    //                             "</a>" . " " .
                    //                             "<a class='btn bg-warning text-white' href='page-prekes-update-form.php?nr={$prekesARRAY['id']}'> KEISTI </a>" . " " .
                    //                             "<a class='btn bg-danger text-white' href='preke-delete.php?nr={$prekesARRAY['id']}'> DELETE </a>" . " " .
                    //                             "<a class='btn btn-outline-primary' href='page-fotos-form.php?nr={$prekesARRAY['id']}'> Itraukti foto </a>" . " " .
                    //                     "</h4>" .
                    //                 "</li>" .
                    //         "</ul>" .
                    //         "<hr />";
                    //     $prekesARRAY = mysqli_fetch_assoc($visosPrekes);
                    // }

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

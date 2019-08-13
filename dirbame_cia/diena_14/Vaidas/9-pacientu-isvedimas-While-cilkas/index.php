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

        <h1> Visi pacientai </h1>


                <?php
                include('pacient-db-functions.php');



                // vardas pavarde issivesti

                // echo "Pacientas: <br />";
                //     $numeris = 3;  // norimo paciento is DB numeris (id)
                //     $pacientas = getPatient( $numeris);
                // echo $pacientas[1] . " " . $pacientas[2] ;


//--------------------------------------------su while ciklu-------
                $visiPacientai = getPatients(); // MySQL objektas, ne masyvas
                // print_r($visiPacientai);
                $pacientasArray = mysqli_fetch_assoc( $visiPacientai );

                // print_r($pacientasArray);

                while ( $pacientasArray ){
                    echo("<h4>" . $pacientasArray['name'] . " " . $pacientasArray['lname'] . " " . "</h4>");
                    $pacientasArray = mysqli_fetch_assoc( $visiPacientai );
                    }

                // // ar tiesa? ar gydytojas yra?
                // while ($gydytojasArray){
                //     echo "<ul>" .
                //                 "<li>" .
                //                     "<a href='page-doctor.php?nr={$gydytojasArray['id']}'>" .
                //                         $gydytojasArray['name'] . " " .
                //                         $gydytojasArray['lname'] . " " .
                //                         $gydytojasArray['id'] . "</a>" .
                //                 "</li>" .
                //         "</ul>" .
                //         "<hr />";
                //     $gydytojasArray = mysqli_fetch_assoc($visiGydytojai);
                // }

//---------------------------------------------------------

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

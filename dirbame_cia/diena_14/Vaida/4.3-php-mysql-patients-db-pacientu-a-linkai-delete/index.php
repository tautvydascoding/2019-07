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
        <h1> Visi pacientai: </h1>
        <section>
            <?php
            include_once('patient-db-functions.php');
            echo "<hr />";

                    //create patient

            
        ?>
        <?php
            // $pacientas = getPatient(7); //grizta vienas pacientas
            //
            //
            // echo "$pacientas[1] $pacientas[2] <hr />";

//------------------------------------------------------------------------------------
            $visiPacientai = getPatients(20); //mySQL OBJEKTAS //kiekis 20 bet spausdina tol kol ju yra
            $pacientas = mysqli_fetch_assoc( $visiPacientai );     //atspausdins viena pacienta is visu    //asocc stalcius
            // print_r($pacientasArray);

            while ( $pacientas ){           //spausdina tol kol yra pacientai
                // print_r( $pacientasArray );      //test
                echo "<a href='page-patient.php?nr={$pacientas['id']}'>" . "</br>". $pacientas['name'] . " " . $pacientas['lname'] . "</a>";
                echo "<a class= 'btn bg-danger text-white' href='patient-delete.php?nr={$pacientas['id']}'> DELETE </a>";

                $pacientas = mysqli_fetch_assoc( $visiPacientai );    //vienas pacientas
                }
            ?>
        </section>

        <!-- bootstrap'ui -->
        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js">    </script>

        <!-- mano js failas visasda pats zemiausias ir failo apacioje -->
        <script type="text/javascript" src="main.js"></script>
    </body>
</html>

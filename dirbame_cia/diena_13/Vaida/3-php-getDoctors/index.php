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
        <h1> visi gydytojai </h1>
        <section>
            <?php
            include_once('doctor-db-functions.php');
            $visiGydytojai = getDoctors(4); //mySQL OBJEKTAS

            $gydytojasArray = mysqli_fetch_assoc($visiGydytojai);     //atspausdins viena gydytoja is visu    //asocc stalcius
            // print_r($gydytojasArray);


            while ( $gydytojasArray ){           //spausdina tol kol yra gydytojai
                // print_r( $gydytojasArray );      //test
                echo("<h2>" . $gydytojasArray['name'] . " " . $gydytojasArray['lname'] . " " . "</h2>");
                $gydytojasArray = mysqli_fetch_assoc( $visiGydytojai );    //vienas gydytojas
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

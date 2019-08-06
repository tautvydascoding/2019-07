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
        <?php
        $preke1 = ["preke", 199, "Bulves", 32];
        $preke2 = ["preke2", "15 vnt", "Cesnakai", 15];
        $preke3 = ["preke3", 8, "Majonezzas", 99];

        $visosPrekes[0] = $preke1;
        $visosPrekes[1] = $preke2;
        $visosPrekes[2] = $preke3;
        // kitas budas
        $visosPrekes = [$preke1, $preke2, $preke3]; // trumpesnis

        $numeris = $_GET['x'];
        $manoPreke =  $visosPrekes[$numeris];
        print_r($manoPreke);
        echo "<hr />";




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

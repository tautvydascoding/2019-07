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

        <<?php
        // 1. sukurti index.php
        // 2. parasyti PHP koda:

            //  susikurti masyva- preke1: kaina, pavadinimas, kiekis


            // echo "tekstas is URL adreso: <br />";
            //
            // $preke1 = [499, "XXL dviratis", "2 vnt."];
            //
            // $numeris = $_GET['x']; // GET imam is url adreso uz klaustuko    ?x=....
            //
            // echo "numeris is URL adreso: $numeris <br />";
            // echo $preke1[$numeris] . "<hr />";



        // 3. pasileisti Narsykleje si puslapi
        // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
             // ?x=1
         // 4. Narsykles adrese  pakeisti ?x=0
         // 4. Narsykles adrese  pakeisti ?x=2
         // ir paziureti kas bus

        // 5.===============sunkesnis====================

        echo "tekstas is URL adreso: <br />";

        $preke1 = [499, "XXL dviratis", "2 vnt."];
        $preke2 = [199, "Paspirtukas", "250 vnt."];
        $preke3 = [399, "Rieduciai", "60 vnt."];

        $visosPrekes[0] = $preke1;
        $visosPrekes[1] = $preke2;
        $visosPrekes[2] = $preke3;
//arba:
        // $visosPrekes = [$preke1, $preke2, $preke3];

        // $numeris = $_GET['x']; // GET imam is url adreso uz klaustuko    ?x=....
        //
        // echo "numeris is URL adreso: $numeris <br />";
        // echo $preke1[$numeris] . "<hr />";

        $numeris = $_GET['x']; // is URL adreso paimam x
        $manoPreke =  $visosPrekes[$numeris]; // $numeris URL adrese nurodyta preke masyve
        print_r($manoPreke); // test
        echo "<hr />";

         // A)  susikurti dar 2 masyvus  preke2, prek3
         // B) susikurti masyva 'visosPrekes'
         // C) sudeti visas prekes i masyva 'visosPrekes'
         // 6. parasyti PHP koda:

             // $numeris = $_GET['x'];
             // $manoPreke =  $visosPrekes[$numeris];
             // print_r($manoPreke);
             // echo "<hr />";

         // 7. pasileisti Narsykleje si puslapi
         // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
              // ?x=1
          // 4. Narsykles adrese  pakeisti ?x=0
          // 4. Narsykles adrese  pakeisti ?x=2
          // ir paziureti kas bus
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

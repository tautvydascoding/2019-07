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

<p>
    2 uzduotis:
    // 1. sukurti index.php
    // 2. parasyti PHP koda:
        $x = $_GET['tekstas'];
        echo $x;
    // 3. pasileisti Narsykleje si puslapi
    // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
         ?tekstas=Mano ivestas tekstas

    // 4. Narsykleje  pakeisti zodi "tekstas" i koki nors kitoki
    // 4.1 istaisyti klaidas index.php faile

</p>

<?php
echo "uzpildyk URL adresa: <br />";

$x = $_GET['zodis'];
echo $x;


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

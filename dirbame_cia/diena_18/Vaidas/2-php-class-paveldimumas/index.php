<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1> PHP klasiu paveldimumas - 17 d uzduotys - php - 4 uzd </h1>
        <!-- // UZDUOTIS 1.0:
        // sukurti klase 'Gyvunas' su kintamaisiais:
        // public 'svoris', private 'pusryciai', protected 'ligos'

        // UZDUOTIS 1.1
        // sukurti klase 'Vilkas' su kintamaisiais:
        // public 'tipas'

        // UZDUOTIS 1.2
        // klase 'Vilkas' paveldi klase 'Gyvunas'

         // UZDUOTIS 2.0:
        // sukurti VILKO OBJEKTA ir
        // pabandyti isvesti visa info apie Vilka:
        // tipas
        // svoris,
        // ligos     // klaida
        // pusryciai // klaida

        // UZDUOTIS 3
        // klaseje 'Vilkas' sukurti f-jas:
        // public printLigos()
        // public printPusryciai() // neveiks

        // UZDUOTIS 4
        // klaseje 'Gyvunas' sukurti f-jas:
        // public printPusryciai() -->
        <?php

require_once('vilkas.php');

    $vilkas =  new Vilkas();
    $vilkas->tipas = "tipas";
    $vilkas->svoris = 250;
    // $vilkas->pusryciai = "mesa";
    // $vilkas->ligos = "encefalitas"; //ji neveiks niekada

    $vilkas->printLigos();
    $vilkas->printPusryciai();


         ?>




    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1>PHP class objektai</h1>

        <?php
        // UZDUOTIS 1:
        // sukurti  klase: 'zmogus'
        // zmogus turi: public ugis, public vardas
        // f-ja 'einu()', kuri daro echo "Einu einu..."

        // UZDUOTIS 2:
        // susikurti  objektus: Monika, Tadas, Kestas
        require_once('zmogus.php');
        $Monika = new Zmogus();
        $Tadas = new Zmogus();
        $Kestas = new Zmogus();


        // UZDUOTIS 2.1
        // Monikos objektui priskirti reiksmes: Monika, 155
        // Tado objektui priskirti reiksmes: Tadas, 180
        // Kesto objektui priskirti reiksmes: Kestas, 179

        $Monika->vardas = "Monika";
        $Monika->ugis = 155;
        //isvedimas
        echo "Vardas: $Monika->vardas, ugis: $Monika->ugis <br />";

        // print_r($Monika); //testuojam
        // var_dump($Monika); // testuojam, isveda daugiau informacijos

        // funkcijos iskvietimas:
        $Monika->einu();
        echo "<br />";

        $Tadas->vardas = "Tadas";
        $Tadas->ugis = 180;
        //isvedimas
        echo "Vardas: $Tadas->vardas, ugis: $Tadas->ugis <br />";
        $Tadas->einu();
        echo "<br />";

        $Kestas->vardas = "Kestas";
        $Kestas->ugis = 179;
        //isvedimas
        echo "Vardas: $Kestas->vardas, ugis: $Kestas->ugis <br />";
        $Kestas->einu();
        echo "<br />";




        // UZDUOTIS 2.2
        // Atspausdinti MONIKOS, TADO varda ir ugi
        // paleisti f-ja 'einu()'


        ?>

    </body>
</html>

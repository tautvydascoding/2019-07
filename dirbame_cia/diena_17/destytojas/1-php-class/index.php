<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>PHP class objektai</h1>

        <?php
        require_once('zmogus.php');

        $Monika = new Zmogus();
        $Kestas = new Zmogus();
        $Antanas = new Zmogus();

        $Monika->vardas = "Monika";
        $Monika->ugis = 155;

        $Kestas->vardas = "Kestas";
        $Kestas->ugis = 179;

        $Antanas->vardas = "Antanas";
        $Antanas->ugis = 180;

        // isvedimas
        echo "vardas: $Monika->vardas <br />";
        echo "ugis:   $Monika->ugis <br />";
        // print_r( $Monika );
        // var_dump( $Monika )

        // iskvietimas f-jos
        $Monika->einu();

        // UZDUOTIS 2.1
        // Monikos objektui priskirti reiksmes: Monika, 155
        // Tado objektui priskirti reiksmes: Tadas, 180
        // Kesto objektui priskirti reiksmes: Kestas, 179


         ?>

    </body>
</html>

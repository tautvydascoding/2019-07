<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>PHP class objektai</h1>


        <?php
        include_once('zmogus.php');
        $Monika = new Zmogus();
            $Monika->vardas = 'Monika';
            $Monika->ugis = 155;
echo "vardas: $Monika->vardas <br/>";
//print_r($Monika);

        $Tadas = new Zmogus();
            $Tadas->vardas = 'Tadas';
            $Tadas->ugis = 180;
//print_r($Tadas);
echo "vardas : $Tadas->vardas <br/>";
echo "ūgis:  $Tadas->ugis <br/>";
        $Kestas = new Zmogus();
            $Kestas->vardas = "Kestas";
            $Kestas->ugis = 179;


$Monika->einu();

         ?>


    </body>
</html>

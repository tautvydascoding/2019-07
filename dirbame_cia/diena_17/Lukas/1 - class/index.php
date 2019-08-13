<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        include("zmogus.php");

        $Monika = new Zmogus();
        $Tadas = new Zmogus();
        $Kestas = new Zmogus();

        $Monika->vardas = "Monika";
        $Monika->ugis = 155;

        $Tadas->vardas = "Tadas";
        $Tadas->ugis = 180;

        $Kestas->vardas = "Kestas";
        $Kestas->ugis = 179;

        echo $Monika->vardas;
        echo "<br />";
        echo $Monika->ugis;
        echo "<br />" . "<hr />"; 
        echo $Tadas->vardas;
        echo "<br />";
        echo $Tadas->ugis;
        echo "<br />" . "<hr />";
        echo $Kestas->vardas;
        echo "<br />";
        echo $Kestas->ugis;
        echo "<br />" . "<hr />";
        $Monika->einu();


         ?>

    </body>
</html>

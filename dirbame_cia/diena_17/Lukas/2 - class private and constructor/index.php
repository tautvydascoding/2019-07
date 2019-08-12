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

        $Monika->setManoVardas("Monika");
        $Monika->setManoUgis(155);

        echo "My name is: " . $Monika->getManoVardas();
        echo "<br />";
        echo "My weigth is: " . $Monika->getManoUgis();

        echo "<br />";

        $Tadas = new Person("Tadas", 180);
        $Kestas = new Person("Kestas", 179);


        echo "<hr />";
        echo $Tadas->getPerson();
        echo "<hr />";
        echo $Kestas->getPerson();


         ?>

    </body>
</html>

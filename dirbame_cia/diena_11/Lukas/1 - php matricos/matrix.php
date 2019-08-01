<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php

        echo "Sveiki <br />";
        $m = ["Tomas", "Jortautas", 1995];
        echo "<br />";
        print_r($m);
        var_dump($m);

        $autos = [
            ["Audi", "A6", 2008],
            ["BMW", "X4", 2010]
        ];


        echo "<br />";
        print_r($autos);


// issivedimas su for ciklu

        for($i = 0; $i < count($autos); $i++) {
            echo $autos[$i][0] . "<br />";
        }





         ?>
    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1>dsfkjsoifjo</h1>

        <?php
        if (condition) :
            echo "string";
                while ($a <= 10) :
                    if (condition) :
                        foreach ($variable as $key => $value) :
                            // code...
                        endforeach;
                        // code...
                    endif;
                // code...
            endwhile;
            echo "string";
        endif;

//galima rsyti ir trumpus if'us, pasirinkti if? funkcija:
// $retVal = (condition) ? a : b ;

        $arVedes = true;
        $x = ($arVedes == true) ? "paskola gausit" : "paskola nepriklauso" ;

        ?>

<!-- php dar galima html kalboje irasyti taip, tarp "<?=  ?>" -->
        <h2> <?= $arVedes ?> </h2>




    </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1> PHP sintakses tricks </h1>

        <?php


            if (condition) :
                echo "<div class='row'>";
                    while ($a <= 10) :
                        if (condition) :
                            foreach ($variable as $key => $value) :
                                // code...
                            endforeach;
                        endif;
                    endwhile;
                echo "</div>";
            endif;


    $arVedes = true;
    $s = ($arVedes == true) ? "paskola gausit" : "nepriklauso paskola";


    ?>

    <h2> <?=$arVedes?> </h2>


        <section>

        </section>
    </body>
</html>

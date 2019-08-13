<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1>PHP class objektai</h1>

        <?php

                    // require_once('zmogus.php');
                    // $Monika = new Zmogus();
                    // $Tadas = new Zmogus();
                    // $Kestas = new Zmogus();




                    // $Monika->vardas = "Monika";
                    // $Monika->ugis = 155;
                    // //isvedimas
                    // echo "Vardas: $Monika->vardas, ugis: $Monika->ugis <br />";
                    //
                    // // print_r($Monika); //testuojam
                    // // var_dump($Monika); // testuojam, isveda daugiau informacijos
                    //
                    // // funkcijos iskvietimas:
                    // $Monika->einu();
                    // echo "<br />";
                    //
                    // $Tadas->vardas = "Tadas";
                    // $Tadas->ugis = 180;
                    // //isvedimas
                    // echo "Vardas: $Tadas->vardas, ugis: $Tadas->ugis <br />";
                    // $Tadas->einu();
                    // echo "<br />";
                    //
                    // $Kestas->vardas = "Kestas";
                    // $Kestas->ugis = 179;
                    // //isvedimas
                    // echo "Vardas: $Kestas->vardas, ugis: $Kestas->ugis <br />";
                    // $Kestas->einu();
                    // echo "<br />";




        // UZDUOTIS 1:
        // sukurti  klase: 'zmogus'

        // zmogus turi:
        // private ugis,
        // private vardas
        // public f-ja 'getManoUgis()'
        // public f-ja 'getManoVardas()'
        // public f-ja 'setManoUgis($x)'
        // public f-ja 'setManoVardas($x)'
        // * kintamojo paemimas f-je:    $this->vardas


        // UZDUOTIS 2.1
        // susikurti  objektus: Monika

require_once('zmogus.php');
        $Monika = new Zmogus("Monika", 165);
        $Kestas = new Zmogus("Kestas", 200);
        $Antanas = new Zmogus("Antanas Jonas", 178);
        // print_r($Monika);
        // echo $Monika->vardas; // erros, nes privati reiksme - uszsirasyti i sasiuvini

        // echo "vardas: ", $Monika->getManoVardas();

        // $Monika->setManoVardas( 'Monika' );

        echo "vardas: " . $Monika->getManoVardas() . $Monika->getManoUgis();
        echo "vardas: " . $Kestas->getManoVardas() . $Kestas->getManoUgis();
        echo "vardas: " . $Antanas->getManoVardas() . $Antanas->getManoUgis();





        // UZDUOTIS 2.2
        // Atspasudinti varda ir ugi naudojant
        // f-ja 'manoUgis()'
        // f-ja 'manoVardas()'


        // UZDUOTIS 3:
        // susikurti konstruktoriu

        // UZDUOTIS 3.1:
        // susikurti  objektus: Monika, Tadas, Jurgis (naudojant konstruktoriu)




        ?>

    </body>
</html>

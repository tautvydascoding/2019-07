<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
            //komentarai php kalboje - cia veikia php
            // dolerio zenklas veikia tik kabutese
            $x = 10;
            $y = "Tomas";
            $z = 30;
            echo "laba diena $y, kaip jums sekasi? <br />";
            echo 'laba diena $y, kaip jums sekasi? <br />';
            // - taip su viengubom kabutems neveiks!!! SVARBU
            echo "Laba diean \$y, kaip jums sekasi <br />";
            echo "Laba diean \\, kaip jums sekasi <br />";
            echo 'Small cat\'s <br />';

// su taskais jungiamtekstus:
            echo "sveiki as" . "Povilas is " . "rugpieniu kaimo <br />";

            echo "pastas kviecia $x ir $y" . "<br /";
            echo "i Vilniu";

            // masyvai:
            $autos = array();  //tuscias masyvas senuoju budu
            $autos = [];       //tuscias masyvas nauju budu

            $autos = array("Audi", "BMV"); //pilnas sukurimas senoviskai
            $autos = ["Audi", "BMV"];       //pinas sukurimas naujoviskai

            echo "varzybas laimejo $autos[0]  <br />";





            // geriausia nemokama kodinimo programa:
            // visual studio code



         ?>




    </body>
</html>

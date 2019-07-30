<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <?php
        // cia veikia PHP
        $x = 10;
        $y = "Tomas";

        echo "Laba diena $y, kaip jums sekasi?  <br /> ";
        echo 'Laba diena $y, kaip jums sekasi?  <br /> ';
        echo 'Small cat\'s  <br /> ';
        echo "Laba diena \$y, kaip jums sekasi?  <br /> ";
        echo "Laba diena \\ , kaip jums sekasi?  <br /> ";

        echo "sveiki as " . " Povilas is " . " Rugpieniu kaimo <br />";

        echo "pastas kviecia $y ir $x " . "<br />";

        $autos = array(); // tuscias masyvas senoviniu budu
        $autos = [];      // tuscias masyvas nauju budu

        $autos = array("Audi", "BMW"); // pilmo sukurimas senovinis
        $autos = ["Audi", "BMW"];     // pilmo sukurimas

        echo "varzybas laimejo $autos[0]    <br />";
        
        // phpStorm - php
        // inteje - java
        //
        // visual studio code - nemokamas
     ?>



    </body>
</html>

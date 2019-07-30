<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php</title>
</head>
<body>
    <?php
    // cia veikia php
    $x = 10;
    $y = "Tomas";
    echo "Laba diena $y, kaip jums sekasi? <br>";
    echo 'Laba diena $y, kaip jums sekasi? <br>'; // '' - viengubos kabutes kintamaji automatiskai konvertuoja i string
    // print "Laba diena $y, kaip jums sekasi?";

    // jungiam du sakinius su . (taško ženklu):
    echo "sveiki " . "esu " . "mokinys <br>";

    // masyvai:
    $auto =[]; // tuščias masyvas
    $auto = array(); // tuščias masyvas senoviniu būdu

    $auto = ["vienas", "du"]; // naujas būdas
    $auto = array("vienas", "du"); // senas būdas

    // masyvo išvedimas:
    echo "isvedam masyvą $auto[0] <br>";

    //---- PHP null rašosi didžiosiomis NULL -----//
    
    ?>

</body>
</html>
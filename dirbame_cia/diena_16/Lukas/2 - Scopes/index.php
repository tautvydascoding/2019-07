<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php

$a = 5; // global scope

// function myTest() {
//     echo $a; // local scope
// }

// myTest(); 
// ------------------------------------------
function myTest2($a) {
    echo $a; // local scope
}

myTest2($a); // $a = 5 - paimtu is globalaus, bet jei vietoj $a parasytume 2, butu 2
// nes kai kuriam funkcija nustatom, kad priims parametra $a (1 parametras, ka paduosim ta spausdins)
//


         ?>
    </body>
</html>

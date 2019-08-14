<?php




// UZDUOTIS 1.1
// sukurti klase 'Vilkas' su kintamaisiais:
// public 'tipas'

// UZDUOTIS 1.2
// klase 'Vilkas' paveldi klase 'Gyvunas'



include_once('vilkas.php');

    $gyv = new Vilkas();

    $gyv->svoris = "svoris";



    $gyv->printPusryciai();
    echo "pusryciai: " . $gyv->printPusryciai();
















?>

<?php
// Prisijungimas prie DB
// Konstantos:
define('DB_USER', '');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'Hospital7');

// Default versija
function getPrisijungimas(){
    $prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($prisijungimas == false){
        echo "ERROR, prisijungti nepavyko <br/>";
        echo mysqli_connect_error() . "<br/>";
    }
    // Kokios kalbos bus duomenų bazė, utf-8 neveiks, reikia rašyti utf8
    mysqli_set_charset($prisijungimas, "utf8");
    return $prisijungimas;
}
getPrisijungimas();

// uzduotis 2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra $number
// function getDoctors($number){
//     $manoSQL = "SELECT * FROM Doctors WHERE id='$number'";
//     $ats = mysqli_query(getPrisijungimas(), $manoSQL);
//     $rezultatas = mysqli_fetch_row($ats);
//     return $rezultatas;
// }

// uzduotis 3.1: atspausdinti visas gydytoju pavardes naudojant WHILE cikla kaip list item "ul li"
function getDoctors($kiekGrazinam){
    $manoSQL = "SELECT * FROM Doctors LIMIT $kiekGrazinam";
    $atsakymas = mysqli_query(getPrisijungimas(), $manoSQL);
    return $atsakymas;
}
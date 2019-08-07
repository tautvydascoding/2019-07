<?php
// Konstantos:
define('DB_USER', '');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'Hospital7');

// Funkcija, kuri tikrina ar prisijungimas yra sėkmingas
function getPrisijungti(){
    $prisijungiam = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($prisijungiam == false){
        echo "KLAIDA, NEPAVYKO PRISIJUNGTI, BANDYKITE DAR KARTĄ <br>";
        echo mysqli_error_list;
    }
    return $prisijungiam;
}
getPrisijungti();

// Funkcija, kuri mums paims pacientus iš duomenų bazės
function getPatients($numbers){
    $manoSQL = "SELECT * FROM Patients ORDER BY lastName DESC LIMIT $numbers";
    $atsakymas = mysqli_query(getPrisijungti(), $manoSQL);
    return $atsakymas; // Gauname MySql objektą
}
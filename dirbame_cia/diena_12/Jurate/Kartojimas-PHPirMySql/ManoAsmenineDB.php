<?php
// Aprašom konstantas
define('DB_USER', 'jurateP');
define('DB_PASS', 'Lo/*ck');
define('DB_HOST', 'localhost');
define('DB_NAME', 'juratespetrukaitytesDB');

// Susikuriam funkcija, kuri parodys ar sėkmingai pavyko prisijungti prie duomenų bazės
function getConnection(){
    // susikuriam kintamąjį
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // tikrinam ar prisijungimas sėkmingas, jeigu ne, pranešam apie tai:
    if($connection == false){
        // jei nepavyko prisijungti, pranešame:
        echo "ERROR! Connection was successful <br/>";
        // jei nepavyko prisijungti pranešame kodėl ir kur yra klaida:
        echo mysqli_error_list() . "<br/>";
    }
    // jeigu prisijungimas buvo sėkmingas
    return $connection;
}
// iškviečiam funkciją, kuri tikrina ar prisijungimas sėkmingas
getConnection();

// Imame duomenis iš duomenų bazės
function getClinic($number){
    // susikuriam kintamąjį, kuriame aprašome MYSQL komandą
    $selectClinic = "SELECT * FROM Clinics WHERE ID = '$number'";

    // gautą rezultatą užfiksuojam kintamajame
    // skliausteliuose nurodome prisijungimą, ir kintamąjį su MYSQL komanda
    $result = mysqli_query(getConnection(), $selectClinic);

    // tikrinam ar pavyko gauti pasirinktos klinikos informaciją
    if($result == false){
        return "ERROR! Something wrong with your code: " . mysqli_error_list(getConnection());
    } else {
        // jeigu pavyko gauti informaciją, ją prisikirame kintamajam ir dedam į masyvą
        $resultArray = mysqli_fetch_row($result);
        return $resultArray;
    }
}
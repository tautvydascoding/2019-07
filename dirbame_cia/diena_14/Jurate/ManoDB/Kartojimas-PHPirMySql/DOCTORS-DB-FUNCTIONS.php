<?php
// Aprašom konstantas
define('DB_USER', '');
define('DB_PASS', '');
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


// Pasiimam informaciją apie gydytojus iš duomenų bazės
function getDoctors($amount){
    $manoSQL = "SELECT * FROM Doctors ORDER BY Location ASC LIMIT $amount";
    $answer = mysqli_query(getConnection(), $manoSQL);
    return $answer;
}
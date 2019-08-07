<?php


// prisijungimas prie db
// constantos

define('DB_USER', 'Lukas');
define('DB_PASS', 'tratata');
define('DB_HOST', 'localhost');
define('DB_NAME', 'hospital7');


function getConnection() {
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); // dar gali reiketi porto (gale) jei ji keiteme
    // bet jei nekeiteme nenurodyti, nes jei nurodysim neveiks
    if($connection) { // jei $connection true tai all good - prisijungem
    } else {
        echo mysqli_connect_error();
    }
    return $connection;
}

getConnection();

//------------------------------------------------------------------------------

function getDoctor($nr) {
    $mySQL = "SELECT * FROM doctors WHERE id = $nr";
    $result = mysqli_query(getConnection(), $mySQL); // mysqli_query - grizta MySQL objektas.
    // is result paimam tik viena eilute (gydytoja) ir ji paverciam i masyva
    $resultArray = mysqli_fetch_row($result); // galima saugoti i $result, nekuriant papildomo kintamojo
    return $resultArray;
}


$gydytojas = getDoctor(4);
// print_r($gydytojas); 

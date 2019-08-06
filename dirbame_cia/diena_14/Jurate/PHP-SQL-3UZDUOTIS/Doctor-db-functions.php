<?php
define('DB_USER', '');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'Hospital7');

function getPrisijungiam(){
    $prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($prisijungimas == false){
        echo "ERROR, prisijungti nepavyko <br/>";
        echo mysqli_connect_error() . "<br/>";
    }
    mysqli_set_charset($prisijungimas, "utf8");
    return $prisijungimas;
}
getPrisijungiam();


function getDoctor($numeris){
    $manoSQL = "SELECT * FROM Doctors WHERE id='$numeris'";
    $ats = mysqli_query(getPrisijungiam(), $manoSQL);
    $result = mysqli_fetch_assoc($ats);
    return $result;
}
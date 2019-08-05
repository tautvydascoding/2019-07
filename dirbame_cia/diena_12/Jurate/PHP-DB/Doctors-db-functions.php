<?php
// Prisijungimas prie DB
// Konstantos:
define('DB_USER', 'jurateP');
define('DB_PASS', 'Lo/*ck');
define('DB_HOST', 'localhost');
define('DB_NAME', 'Hospital7');

// $prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// if($prisijungimas){
//     echo "Prisijungiau prie DB <br/>";
// } else {
//     echo "ERROR, prisijungti nepavyko <br/>";
//     echo mysqli_connect_error() . "<br/>"; // parodo, kas yra negerai su prisijungimu
// }

// Default versija
function getPrisijungimas(){
    $prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($prisijungimas == false){
        echo "ERROR, prisijungti nepavyko <br/>";
        echo mysqli_connect_error() . "<br/>";
    }
    return $prisijungimas;
    // mysqli_close($prisijungimas); // atsijungti nuo DB, taip sutaupom serveryje resursų
}
getPrisijungimas();


//------------Paimam duomenis iš DB------------//

// Paimam 1 gydytoją
function getDoctor($number){
    $manoSQL = "SELECT * FROM Doctors WHERE id = '$number' ";
    $rezultatas = mysqli_query(getPrisijungimas(), $manoSQL); // išsisaugom gautą gydytoją susikurdami kintamąji, mysqli skliausteliuose (prisijungimo įrodymas, pasirinktas daktaras)
    // print_r($rezultatas); // test mysql 
    // var_dump($rezultatas); jeigu mums reikia tipo
    if($rezultatas ==false){
        return "ERROR IS: " . mysqli_error_list(getPrisijungimas()); // parodo kokia yra klaida
    } else{
        // iš rezultatų paiimam TIK 1 eilutę/gydytoją ir jį paverčiam/sudedam į masyvą
    $rezultatasMasyve = mysqli_fetch_row($rezultatas);
    return $rezultatasMasyve;
    }
    
}
// testuojam:
// $gydytojas = getDoctor(9);
// print_r($gydytojas);

// Mysql fetch paima tik 1 eilutę, kurią pasirinkom ir ją paverčia į masyvą
// mysqli_query įvykdo sql užklausas ir mums grįžta mysql objektas
// kai leidžiam mysqli_fetch, jis paima tik vieną objekto elementą (gydytoją) ir jį paverčia į masyvą, jei dar kartą leidžiam, jis paima dar kitą objekto elementą (gydytoją) ir jį paverčia į masyvą
// mysqli_fetch ima tik iš mysql objekto, kurį susikuriam su mysqli_query, neima duomenų tiesiogiai iš duomenų bazės



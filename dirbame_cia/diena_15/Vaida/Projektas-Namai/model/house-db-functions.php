<?php

//      PRISIJUNGIMAS    prie DB

//constantos
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_HOST', 'localhost');
define('DB_NAME', 'projectHouse');

function getPrisijungimas() {

$prisijungimas = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME );

if($prisijungimas == true){
    // echo "Prisijungiau prie DB! <br />";
} else {
    echo "ERORR Prisijungti nepavyko <br />";
    echo mysqli_connect_error() . "<br />";
    }
    mysqli_set_charset($prisijungimas, "utf8"); //DB raidziu formato pakeitimas
    return $prisijungimas;
    // mysqli_close($prisijungimas);   //atsijungimas nuo DB
}

// echo "Veikia <br />";

//----------------------------------------------
//      PAIMA  VIENA NAMA
//----------------------------------------------
function getHouse($nr){
    $manoSQL = "SELECT * FROM houses WHERE id = '$nr' ";
    // mysqli_query($link, $query);
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    // print_r( $rezultatai );
    // var_dump( $rezultatai ); //labai stipri atspausdinas ir tipus;
    //paima objekta ir ji pavercia i masyva (ARRAY)
    if ($rezultatai == false) {
        return "ERORR: " . mysqli_error(getPrisijungimas() );
        // code...
    }
    //is $Resultatai paimam TIK viena eilute(nama), pavercia i masyva1
    $rezultataiArray = mysqli_fetch_row($rezultatai);
    return $rezultataiArray;
}
//testuojam
// $namas = getHouse(5);
// print_r( $namas );

//----------------------------------------------
//      IŠVEDIMAS VISU NAMU
//----------------------------------------------
function getHouses($kiekis){
    $manoSQL = "SELECT * FROM houses
                         ORDER BY name
                         LIMIT $kiekis
                                ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultatai;     //cia mySQL objektas, o su fetch butu masyvas
}

//------testavimas---
// $visiNamai = getHouses(10);   //mySQL objektas, NE MASYVAS
//
// $namas = mysqli_fetch_assoc( $visiNamai );  //vienas namas
//
//
// while ( $namas ){          //spausdina tol kol yra namu
//     print_r( $namas );     //test
//     $namas = mysqli_fetch_assoc( $namas );    //vienas namas
// }








//

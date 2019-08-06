<?php

//prisijungimas prie DB
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_HOST', 'localhost');
define('DB_NAME', 'hospital7');

function getPrisijungimas(){

$prisijungimas = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME );
if($prisijungimas == true){
    // echo "prisijungiau prie DB";
} else {
    echo "ERROR Prisijungti nepavyko <br />";
    echo mysqli_connect_error() . "<br />";
    }
    mysqli_set_charset($prisijungimas, "utf8");
    return $prisijungimas;
}

// echo "Veikia <br />";        //pasitikrint

//------------------------------------------------------------
//      PAIMA VIENA PACENTA
//------------------------------------------------------------
function getPatient($nr){
    $manoSQL = "SELECT * FROM patients WHERE id = '$nr' ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    // print_r($rezultatai);
    if ($rezultatai == false) {
        return "ERORR: " . mysqli_error(getPrisijungimas() );
        // code...
    }
    //is $Resultatai paimam TIK viena eilute(pacienta), pavercia i masyva1
    $rezultataiArray = mysqli_fetch_row($rezultatai);
    return $rezultataiArray;
}
//testavimas
// $pacientas = getPatient(4);
// print_r( $pacientas );

//------------------------------------------------------------
//      PACIENTO ĮRAŠYMAS I DB
//------------------------------------------------------------
function createPatient( $vardas, $pavarde){
    $manoSQL = "INSERT INTO patients VALUES (NULL,'$vardas', '$pavarde' );";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($rezultatai == false) {
        echo "klaida, nepavyko irasyti paciento <br />";
    }
}

// createPatient("Tomas", "Domas");

//------------------------------------------------------------
//      PACIENTO IŠTRYNIMAS IŠ DB
//------------------------------------------------------------
function deletePatient($nr){
    $manoSQL = "DELETE FROM patients
                       WHERE id = '$nr'
                       LIMIT 1
                       ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
}
// deletePatient(7);

// pasitikrint reikia isijungti localhost
// echo 111
//------------------------------------------------------------
//      REDAGAVIMAS: PACIENTO DUOMENU PAKEITIMAS DB
//------------------------------------------------------------

function editPatient($nr, $vard, $pavarde){
    $manoSQL = "UPDATE patients  SET
                                    name = '$vard',
                                    lname = '$pavarde'
                                WHERE
                                    id = '$nr'
                                    ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
}
// editPatient(8, "Kostas", "Kostia");


//------------------------------------------------------------
//      VISU PACIENTU ISVEDIMAS
//------------------------------------------------------------
function getPatients($kiekis){
    $manoSQL = "SELECT * FROM patients
                         ORDER BY lname
                         LIMIT $kiekis
                                ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultatai;     //cia mySQL objektas, o su fetch butu masyvas
}

//------testavimas---
// $visiPacientai = getPatients(5);   //mySQL objektas, NE MASYVAS
//
// $pacientasArray = mysqli_fetch_assoc( $visiPacientai );  //vienas pacientas
// //
// //
// while ( $pacientasArray ){          //spausdina tol kol yra pacientai
//     print_r( $pacientasArray );     //test
//     $pacientasArray = mysqli_fetch_assoc( $visiPacientai );    //vienas pacientas
// }













//

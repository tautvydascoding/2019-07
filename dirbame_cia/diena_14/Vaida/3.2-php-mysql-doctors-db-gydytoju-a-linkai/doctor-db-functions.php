<?php

//      PRISIJUNGIMAS    prie DB

//constantos
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_HOST', 'localhost');
define('DB_NAME', 'hospital7');

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
//----------------------------------------------

//      PAIMA  viena gydytoja

function getDoctor($nr){
    $manoSQL = "SELECT * FROM doctors WHERE id = '$nr' ";
    // mysqli_query($link, $query);
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    // print_r( $rezultatai );
    // var_dump( $rezultatai ); //labai stipri atspausdinas ir tipus;
    //paima objekta ir ji pavercia i masyva (ARRAY)
    if ($rezultatai == false) {
        return "ERORR: " . mysqli_error(getPrisijungimas() );
        // code...
    }
    //is $Resultatai paimam TIK viena eilute(gydytooja), pavercia i masyva1
    $rezultataiArray = mysqli_fetch_row($rezultatai);
    return $rezultataiArray;
}
//testuojam
// $gydytojas = getDoctor(5);
// print_r( $gydytojas );


//----------------------------------------------
//----------------------------------------------


//      ĮRAŠYMAS  gydytojo į DB

function createDoctor($vard, $pavarde){
    $manoSQL = "INSERT INTO doctors  VALUES  (NULL, '$vard', '$pavarde'); ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false){
        echo "KLAIDA, nepavyko issaugoti gydytojo <br />";
    }
}

// createDoctor("Tomas", "Tomauskas");
// createDoctor("Antanas", "Antanauskas");
        // uzsikomentuoti komanda, nes po to vel ta pati ides/sukurs


//----------------------------------------------
//----------------------------------------------


//      ISRTYNIMAS  gydytojo is DB

function deleteDoctor($nr){
    $manoSQL = "DELETE FROM doctors
                       WHERE id = '$nr'
                       LIMIT 1
                       ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
}
// deleteDoctor(9);

// pasitikrint reikia isijungti localhost
// echo 111


//----------------------------------------------
//----------------------------------------------

//      REDAGAVIMAS:     gydytojo 5 duomenu pakeitimas DB

function editDoctor($nr, $vard, $pavarde){
    $manoSQL = "UPDATE doctors  SET
                                    name = '$vard',
                                    lname = '$pavarde'
                                WHERE
                                    id = '$nr'
                                    ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
}
// editDoctor(5, "Tim", "Soer");


//----------------------------------------------
//----------------------------------------------


//      IŠVEDIMAS VISU gydytoju

function getDoctors($kiekis){
    $manoSQL = "SELECT * FROM doctors
                         ORDER BY lname
                         LIMIT $kiekis
                                ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultatai;     //cia mySQL objektas, o su fetch butu masyvas
}

//------testavimas---
// $visiGydytojai = getDoctors(5);   //mySQL objektas, NE MASYVAS
//
// $gydytArray = mysqli_fetch_assoc( $visiGydytojai );  //vienas gydytojas
//
//
// while ( $gydytArray ){          //spausdina tol kol yra gydytojai
//     print_r( $gydytArray );     //test
//     $gydytArray = mysqli_fetch_assoc( $visiGydytojai );    //vienas gydytojas
// }








//

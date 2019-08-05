<?php

//prisijungimas prie DB

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
    return $prisijungimas;
    // mysqli_close($prisijungimas);   //atsijungimas nuo DB
}


// echo "Veikia <br />";

//------------
//paima viena gydytoja
function getDoctor($nr){
    $manoSQL = "SELECT * FROM doctors WHERE id = '$nr' ";
    // mysqli_query($link, $query);
    // ivykdo ka nori duomenu bazeje(trynimas ir pan)
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    // print_r( $rezultatai );
    // var_dump( $rezultatai ); //labai stipri atspausdinas ir tipus;
    //ir ji paverciam ARRAY
    if ($rezultatai == false) {
        return "ERORR: " . mysqli_error(getPrisijungimas() );
        // code...
    }
    //is $Resultatai paimam TIK viena eilute(gydytooja)
    $rezultataiArray = mysqli_fetch_row($rezultatai);
    return $rezultataiArray;
}
//testuojam
// $gydytojas = getDoctor(5);
// print_r( $gydytojas );

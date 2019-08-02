<?php

// prisijungimas DB

// konstantos
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_HOST', 'localhost');
define('DB_NAME', 'hospital7');

function getPrisijungimas() {
    $prisijungimas = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME  );
    if ($prisijungimas == false) {
        echo "EROROR!!! Prisijungti nepavyko <br />";
        echo mysqli_connect_error()    .  "<br />";
    }
    return $prisijungimas;
    // mysqli_close($prisijungimas); // atsijungti nuo DB
}
// test
// getPrisijungimas();
// echo "Veikia <br />";

// -----------
//
function getDoctor($nr){
    $manoSQL = "SELECT * FROM doctors WHERE id = '$nr'   ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL); // test Mysql objektas
    if (  $rezultatai == false ) {
        return "Klaida:  " . mysqli_error( getPrisijungimas() );
    } else {
        // is $rezultatai paimam TIK 1-na eilute(gydytoja) ir ji paverciam ARRAY
        $rezultatiaArray = mysqli_fetch_row($rezultatai);
        return $rezultatiaArray;
    }

}
// tesuotjam
// $gydytojas = getDoctor(5);
// print_r( $gydytojas );


//

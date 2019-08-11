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
    mysqli_set_charset($prisijungimas, "utf8"); //  utf8 be "-"
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
        $rezultataiArray = mysqli_fetch_row($rezultatai);
        return $rezultataiArray;
    }
}
// tesuotjam
// $gydytojas = getDoctor(5);
// print_r( $gydytojas );


// gydytojo irasymas i DB
function createDoctor($vard, $pavard) {
    $manoSQL = "INSERT INTO doctors VALUES (NULL, '$vard', '$pavard'); ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "KLAIDA, nepavyko isaugoti gydytojo <Br />";
        echo "Klaida:  " . mysqli_error( getPrisijungimas() );
    }
}
// test
// createDoctor("Tomas", "Tomauskis");
// createDoctor("Antanas", "Antanauskas");

//
function deleteDoctor($nr) {
    $manoSQL = "DELETE FROM doctors
                        WHERE id = '$nr'
                        LIMIT 1
                        ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "KLAIDA, nepavyko istrinti gydytojo <Br />";
        echo "Klaida:  " . mysqli_error( getPrisijungimas() );
    }
}
// test
// deleteDoctor(7);
function editeDoctor($nr, $vard, $pavard) {
    // mysqli_real_escape_string
    $manoSQL = "UPDATE doctors  SET
                                    name = '$vard',
                                    lname = '$pavard'
                                WHERE
                                    id = '$nr'
                                LIMIT 1
                                ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "Klaida:  " . mysqli_error( getPrisijungimas() );
    }
}
// test
// editeDoctor(5, "Tim",  'Soer');
// editeDoctor(3, "Jonas",'Otas');


function getDoctors($kiekis) {
    $manoSQL = "SELECT * FROM doctors
                         ORDER BY lname
                         LIMIT $kiekis
                         ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultatai;  // Mysql objektas, ne masyvas
}
//--------test-----------------------
// $visiGydytojai = getDoctors(5);  // Mysql objektas, ne masyvas
//
// // fetch is mysqli obj paima TIK viena eilute ir pavercia i array
// $gydytArray = mysqli_fetch_assoc($visiGydytojai); // vienas gyd. array
//
// while ($gydytArray) { // kol yra gydytoju
//     print_r(  $gydytArray ); // test
//     $gydytArray = mysqli_fetch_assoc($visiGydytojai); // vienas gyd. array
// }



//

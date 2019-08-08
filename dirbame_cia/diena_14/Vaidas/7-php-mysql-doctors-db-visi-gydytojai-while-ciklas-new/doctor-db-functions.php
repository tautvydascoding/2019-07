<?php

//prisijungimas prie

//konstantos

define("DB_USER", 'vaidasober');
define("DB_PASS", 'slaptazodis');
define("DB_HOST", 'localhost');
define("DB_NAME", 'hospital9');

mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// echo "Veikia  <br />  <br />";

//arba
function getPrisijungimas (){
    $prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($prisijungimas == false) {
        echo "ERROR!!! Prisijungti nepavyko <br />";
        echo mysqli_connect_error()    .  "<br  />";
    }
    mysqli_set_charset($prisijungimas, "utf8"); // utf8 rasom be bruksneliu
    return $prisijungimas;
    // mysqli_close($prisijungimas);  // atsijungit nuo DB
}

/// iki cia viskas svarbu - persirasyti - isidemeti

//======================================

//Funcija paimti viena gydytoja
function getDoctor($nr){
     $manoSQL = "SELECT * FROM doctors WHERE id = '$nr' ";
     $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
     if ($rezultatai == false) {                // sias tris eilutes nera butina rasyti
         return "Klaida:  "  . mysqli_error(getPrisijungimas()  );
         }
     // print_r ($rezultatai); // test mysql objektas
     // var_dump($rezultatai); //atspausdins si funkcija ir tipus
     //paimam is rezultatu ==$rezultatai== viena gydytoja ar viena eilute ir ji paverciam /sudedam i masyva (ARRAY)
     $rezultataiArray = mysqli_fetch_row($rezultatai);

     // print_r ($rezultataiArray);
     return $rezultataiArray;
}

//testuojam:
// $gydytojas = getDoctor(3);
// // $gydytojas = getDoctor(4);
// print_r($gydytojas);


// ======================08 15 d darbas 13 diena =====================
//naudosim:

// createDoctor($vardas, $pavarde)
// deleteDoctor($nr)

function editDoctor($nr, $vard, $pavard){
    $uzkoduotasNR = mysqli_real_escape_string($nr);
    $uzkoduotasVard = mysqli_real_escape_string($vard);
    $uzkoduotasPavard = mysqli_real_escape_string($pavard);
    // $uzkoduotasPavard = passwor_hash($uzkoduotasPavard, PASSWORD_DEFAULT);

    $manoSQL = "UPDATE doctors set
                                        name = '$uzkoduotasVard',
                                        lname = '$uzkoduotasPavard'
                                     WHERE
                                         id = '$uzkoduotasNR'
                                     LIMIT 1
                                     ";
}

// mysqli_real_escape_string

// getDoctors($kiekis = 999999)
//
// $visi = getDoctors();
// $gyd10 = getDoctors(10);
//========================================================

function createDoctor($vard, $pavard) {
    $manoSQL = "INSERT INTO doctors VALUES (NULL, '$vard', '$pavard')";
    // '$vard', '$pavard' - cia svarbu uzdeti viengubas kabutes
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "KLAIDA, nepavyko issaugoto gydytojo <br />";
    }
}


//gydytojo irasymas i BD
// createDoctor("Tomas", "Tomauskas");
// createDoctor("Antanas", "Antanauskas");
// createDoctor("Pranas", "Pranaitis");
// sis kodas dar neveikia, reikia sukodinti kad juos itraukti - kursim funkcija auksciau - function createDoctor
//po gydytoju itraukimo uzkomentuojam sias -- createDoctor("Tomas", "Tomauskas"); -- eilutes


// kita funkcija - deleteDoctor - susikuriam funkcija, istrinam po viena gydytoja; si funkcija pavojinga, nes
// nenurodant - gali istrinti visus gydytojus. Uzkomentuojam...
function deleteDoctor($nr) {
    $manoSQL = "DELETE FROM doctors WHERE id = '$nr' ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "KLAIDA, nepavyko istrinti gydytojo <br />";
    }
}
deleteDoctor(12);

// pakeiciam gydytoju duomenis, uzkomentuojam
// function editDoctor($nr, $vardas, $pavarde) {
//     $manoSQL = "UPDATE doctors set
//                                     name = '$vardas',
//                                     lname = '$pavarde'
//                                 WHERE
//                                     id = '$nr'
//                                 ";
//     $result = mysqli_query(getPrisijungimas(), $manoSQL);
//     if ($result == false) {
//          echo "KLAIDA:  " .  mysqli_error( getPrisijungimas() );
//             }
//         }

// editDoctor(11, "Petras", "Petrauskas");
// editDoctor(8, "Rokas", "Rokaitis");


function getDoctors($kiekis = 999999) {
    $manoSQL = "SELECT * FROM doctors
                        ORDER BY lname
                        LIMIT $kiekis
                        ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    return $result;  // MySQL objektas, ne masyvas
}
//--------test------------
// $visGgydytojai = getDoctors(11); // MySQL objektas, ne masyvas
//
// // fetch is mysqli obj paima tik viena eilute ir pavercia i array
// $gydytARRAY = mysqli_fetch_assoc($visGgydytojai); // vienas gydytojas array
// // print_r( $gydytARRAY); //testavom
// while ($gydytARRAY){
//     print_r( $gydytARRAY);
//     $gydytARRAY = mysqli_fetch_assoc($visGgydytojai);
// }

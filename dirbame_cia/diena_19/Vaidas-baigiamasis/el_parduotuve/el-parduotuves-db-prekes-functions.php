<?php

//prisijungimas prie DB

//konstantos

define("DB_USER", 'vaidasober');
define("DB_PASS", 'slaptazodis');
define("DB_HOST", 'localhost');
define("DB_NAME", 'el_parduotuve');

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

//======================================

//Funcija paimti viena preke
function getPreke($nr){
     $manoSQL = "SELECT * FROM prekes WHERE id = '$nr' ";
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
// $preke = getPreke(1);
// print_r($preke);

//=======================================

function createPreke($pavadinimas, $aprasymas, $kaina, $nuolaida, $pozicija, $kiekis, $ar_rodyti) {
    $manoSQL = "INSERT INTO prekes VALUES (NULL, '$pavadinimas', '$aprasymas', '$kaina', '$nuolaida', '$pozicija', '$kiekis', $ar_rodyti)";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "KLAIDA, nepavyko issaugoti prekes <br />";
    }
}
//testuojam:
// createPreke("Preke3", "Lorem, lorem...", 25, 0, 1, 25, 1);


//=======================================



function deletePreke($nr) {
    $manoSQL = "DELETE FROM prekes WHERE id = '$nr' ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "KLAIDA, nepavyko istrinti prekes <br />";
    }
}
//testuojam:
// deletePreke(2);

//=======================================


function editPreke($nr, $pavadinimas, $aprasymas, $kaina, $nuolaida, $pozicija, $kiekis, $ar_rodyti) {
    $manoSQL = "UPDATE prekes set
                                    pavadinimas = '$pavadinimas',
                                    aprasymas = '$aprasymas',
                                    kaina = '$kaina',
                                    nuolaida = '$nuolaida',
                                    pozicija = '$pozicija',
                                    kiekis = '$kiekis',
                                    ar_rodyti = '$ar_rodyti'

                                WHERE
                                    id = '$nr'
                                ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
         echo "KLAIDA:  " .  mysqli_error( getPrisijungimas() );
            }
        }

// testuojam:
// editPreke(3, "Preke5", "Lorem aprasymas prekes", 26.5, 0, 2, 5, 1);


//============================================
function getPrekes($kiekis = 999999) {
    $manoSQL = "SELECT * FROM prekes
                        ORDER BY pavadinimas
                        LIMIT $kiekis
                        ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    return $result;  // MySQL objektas, ne masyvas
}

// $visosPrekes = getPrekes(11);
// $prekesARRAY = mysqli_fetch_assoc($visosPrekes);
// // print_r( $prekesARRAY);
// while ($prekesARRAY){
//     // print_r( $prekesARRAY);
//     $prekesARRAY = mysqli_fetch_assoc($visosPrekes);
// }

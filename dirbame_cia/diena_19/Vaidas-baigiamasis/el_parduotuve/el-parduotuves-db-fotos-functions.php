<?php

//prisijungimas prie DB

//konstantos

// define("DB_USER", 'vaidasober');
// define("DB_PASS", 'slaptazodis');
// define("DB_HOST", 'localhost');
// define("DB_NAME", 'el_parduotuve2');
//
// mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// // echo "Veikia  <br />  <br />";
//
// //arba
// function getPrisijungimas (){
//     $prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//     if ($prisijungimas == false) {
//         echo "ERROR!!! Prisijungti nepavyko <br />";
//         echo mysqli_connect_error()    .  "<br  />";
//     }
//     mysqli_set_charset($prisijungimas, "utf8"); // utf8 rasom be bruksneliu
//     return $prisijungimas;
//     // mysqli_close($prisijungimas);  // atsijungit nuo DB
// }

//======================================

//Funcija paimti viena prekes foto
// cia reikia paimti getFotos varda tiktai===============
function getFoto($nr){
     $manoSQL = "SELECT * FROM fotos WHERE id = '$nr' ";
     $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
     if ($rezultatai == false) {                // sias tris eilutes nera butina rasyti
         return "Klaida:  "  . mysqli_error(getPrisijungimas()  );
         }

     $rezultataiArray = mysqli_fetch_row($rezultatai);

     print_r ($rezultataiArray);
     return $rezultataiArray;
}

//testuojam:
// $foto = getFoto(1);
// print_r($foto);

//=======================================

function createFoto($pav_pavadinimas, $pav_aprasymas, $pozicija, $prekes_id) {
    $manoSQL = "INSERT INTO fotos VALUES (NULL, '$pav_pavadinimas', '$pav_aprasymas', '$pozicija', '$prekes_id')";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "KLAIDA, nepavyko issaugoti prekes foto <br />";
    }
}
// testuojam:
// createFoto("Foto3.jpg", "Foto2 lorem, lorem...", 3, 4);


//=======================================



function deleteFoto($nr) {
    $manoSQL = "DELETE FROM fotos WHERE id = '$nr' ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "KLAIDA, nepavyko istrinti fotos <br />";
    }
}
// testuojam:
// deleteFoto(3);

//=======================================


function editFoto($nr, $pav_pavadinimas, $pav_aprasymas, $pozicija, $prekes_id) {
    $manoSQL = "UPDATE fotos set
                                    pav_pavadinimas = '$pav_pavadinimas',
                                    pav_aprasymas = '$pav_aprasymas',
                                    pozicija = '$pozicija',
                                    prekes_id = '$prekes_id',

                                WHERE
                                    id = '$nr'
                                ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
         echo "KLAIDA:  " .  mysqli_error( getPrisijungimas() );
            }
        }

// testuojam: YRA KAZKUR KLAIDA
// editFoto(2, "Foto4.jpg", "Foto4 lorem lorem...", 4, 6);


//============================================
function getFotos($kiekis = 999999) {
    // $manoSQL = "SELECT *
    //                     FROM fotos
    //                     ORDER BY pozicija
    //                     LIMIT $kiekis
    //                     ";
    $manoSQL = "SELECT fotos.pav_pavadinimas
                        INNER JOIN prekes
                        ON prekes.id = fotos.prekes_id
                        WHERE prekes.id = "1"
                        ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    return $result;  // MySQL objektas, ne masyvas
}
//
// $visosFotos = getFotos();
// $fotosARRAY = mysqli_fetch_assoc($visosFotos);
// // // print_r( $fotosARRAY);
// while ($fotosARRAY){
// //     // print_r( $fotosARRAY);
//     $fotosARRAY = mysqli_fetch_assoc($visosFotos);
// }



// ==========================================

// SELECT fotos.pav_pavadinimas, fotos.pav_aprasymas, fotos.pozicija, fotos.prekes_id
//     FROM fotos
//     INNER JOIN prekes
//     ON prekes.id = fotos.prekes_id
//     WHERE prekes.id = "1";

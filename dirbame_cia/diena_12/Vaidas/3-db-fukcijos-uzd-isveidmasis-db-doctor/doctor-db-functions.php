<?php

//prisijungimas prie

//konstantos

define("DB_USER", 'vaidasober');
define("DB_PASS", 'slaptazodis');
define("DB_HOST", 'localhost');
define("DB_NAME", 'hospital4');

mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// echo "Veikia  <br />  <br />";

//arba
function getPrisijungimas (){
    $prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($prisijungimas == false) {
        echo "ERROR!!! Prisijungti nepavyko <br />";
        echo mysqli_connect_error()    .  "<br  />";
    }
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

<?php

//prisijungimas prie DB

define("DB_USER", 'vaidasober');
define("DB_PASS", 'slaptazodis');
define("DB_HOST", 'localhost');
define("DB_NAME", 'hospital9');


function getPrisijungimas (){
    $prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($prisijungimas == false) {
        echo "ERROR!!! Prisijungti nepavyko <br />";
        echo mysqli_connect_error()    .  "<br  />";
    }
    return $prisijungimas;
    // mysqli_close($prisijungimas);  // atsijungit nuo DB
}
getPrisijungimas();
echo "prisijungiau prie DB! <br />";


//======================================
//Funcija paimti viena pacienta

function getPatient($nr){
     $manoSQL = "SELECT * FROM patients WHERE id = '$nr' ";
     $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
         if ($rezultatai == false) {
         return "Klaida:  "  . mysqli_error(getPrisijungimas()  );
         }
     // print_r($rezultatai); // test mysql objektas
     // var_dump($rezultatai); //atspausdins si funkcija ir tipus
     //paimam is rezultatu ==$rezultatai== viena pacienta ar viena eilute ir ji paverciam /sudedam i masyva (ARRAY)
     $rezultataiArray = mysqli_fetch_row($rezultatai);

     // print_r ($rezultataiArray);
     return $rezultataiArray;
}


//testuojam:
// $pacientas = getPatients(2);
// print_r($pacientas);
// -----------------------------------------------------------

function getPatients($kiekis = 999999) {
    $manoSQL = "SELECT * FROM patients
                        ORDER BY lname
                        LIMIT $kiekis
                        ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    return $result;  // MySQL objektas, ne masyvas
}

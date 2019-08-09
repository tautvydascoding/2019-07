<?php

// prisijungimas DB

// konstantos
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_HOST', 'localhost');
define('DB_NAME', 'hospital8');

function getPrisijungimas (){

$prisijungimas = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME  );
if ($prisijungimas == false) {
    echo "Klaida!!!!! <br/>";
echo mysqli_connect_error();
}
mysqli_set_charset($prisijungimas, "utf8");
return $prisijungimas;
        mysqli_close($prisijungimas); //atsijungti nuo DB
}
getPrisijungimas ();
//echo "Veikia <br/>";

//------------
function getDoctor($nr){
    $manoSQL = "SELECT * from doctors where id = '$nr' ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($rezultatai==false) {
        return "Error: " . mysqli_error(getPrisijungimas());}
    //print_r($rezultatai);
    //var_dump($rezultatai); - parodo ir tipus

    $rezultataiArray = mysqli_fetch_row($rezultatai);
return $rezultataiArray;
}
//testuojam
// $gydytojas = getDoctor(5);
// print_r($gydytojas);


function createDoctor($vard, $pavard) {
    $manoSQL = "INSERT INTO doctors values(NULL, '$vard', '$pavard');" ;
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "Klaida, nepavyko issaugoti iraso <br/>";
    }
}

// createDoctor ("Tomas", "Tomauskas");
// createDoctor ("Petras", "Petrauskas");
// createDoctor ("Linas", "Adomaitis");
// createDoctor ("Balys", "Komuntauskas");
function deleteDoctor($nr){
    $manoSQL = "DELETE FROM doctors WHERE id = '$nr'  ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "Klaida, nepavyko istrinti iraso <br/>";
    }
};

// deleteDoctor(5);

function editDoctor($nr, $vard, $pavard){
    $safeNr = mysqli_real_escape_string(getPrisijungimas(),$nr);
    $safeVard = mysqli_real_escape_string(getPrisijungimas(),$vard);
    $safePavard = mysqli_real_escape_string(getPrisijungimas(),$pavard);
    $uzkoduotaPavarde = password_hash($safePavard, PASSWORD_DEFAULT);
    $manoSQL = "UPDATE doctors
                SET
                    name = '$safeVard',
                    lname = '$safePavard'
                WHERE id = '$safeNr'
                ";
$result = mysqli_query(getPrisijungimas(), $manoSQL);
if ($result == false) {
    echo "Klaida: ".mysqli_error(getPrisijungimas());
    }
}

//editDoctor(5, 'Petras', 'Petruskevicius');



function getDoctors($kiekis = 99999) {
    $manoSQL  = "SELECT * FROM doctors
                        ORDER BY lname
                        LIMIT $kiekis
                        ";
$rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultatai; //mysql objektas, ne masyvas
}

// $visiGydytojai = getDoctors(10);
// $gydyt = mysqli_fetch_assoc($visiGydytojai);
// //print_r($gydyt);
//
//
// while ($gydyt) {
//     //print_r($gydyt);
//     $gydyt = mysqli_fetch_assoc($visiGydytojai);
// }

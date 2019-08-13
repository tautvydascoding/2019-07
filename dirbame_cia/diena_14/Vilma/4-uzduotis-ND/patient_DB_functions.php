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
function getPatient($nr){
    $manoSQL = "SELECT * from patients where id = '$nr' ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($rezultatai==false) {
        return "Error: " . mysqli_error(getPrisijungimas());}
    //print_r($rezultatai);
    //var_dump($rezultatai); - parodo ir tipus

    $rezultataiArray = mysqli_fetch_row($rezultatai);
return $rezultataiArray;
}


function createPatient($vard, $pavard, $nr) {
    $manoSQL = "INSERT INTO patients values(NULL, '$vard', '$pavard', '$nr')";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "Klaida, nepavyko issaugoti iraso <br/>";
    }
}

//createPatient("Linas", "Binkulis", 6);
// createPatient("Pertas", "Gražulis", 3);
// createPatient("Jonas", "Jonikavičius", 5);
// createPatient("Lina", "Žemaitytė", 2);

function deletePatient($nr){
    $manoSQL = "DELETE FROM patients WHERE id = '$nr'  ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "Klaida, nepavyko istrinti iraso <br/>";
    }
};

//deletePatient(3);

function editPatient($nr, $vard, $pavard, $did){
    $manoSQL = "UPDATE patients
                SET
                    name = '$vard',
                    lname = '$pavard',
                    doctor_id = '$did'
                WHERE id = '$nr'
                ";
$result = mysqli_query(getPrisijungimas(), $manoSQL);
if ($result == false) {
    echo "Klaida!!!!: ".mysqli_error(getPrisijungimas());
    }
}

editPatient(5, 'Linutė', 'Kazragytė', 3);



function getPatients($kiekis = 99999) {
    $manoSQL  = "SELECT * FROM patients
                        ORDER BY lname
                        LIMIT $kiekis
                        ";
$rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultatai; //mysql objektas, ne masyvas
}

 // $visiPacientai = getPatients(15);
 // $pac = mysqli_fetch_assoc($visiPacientai);
// print_r($pac);
//
//
 // while ($pac) {
 //     print_r($pac);
 //     $pac = mysqli_fetch_assoc($visiPacientai);
 // }

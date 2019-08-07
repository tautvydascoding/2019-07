<?php

define("DB_HOST", 'localhost');
define("DB_USER", 'Lukas');
define("DB_P", 'tratata');
define("DB_BASE", 'hospital7');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_P, DB_BASE);


function getConnection() {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_P, DB_BASE);
    if ($conn) {
        // echo "Mr. Robot";
    } else {
        echo mysqli_error($conn);
    }
    mysqli_set_charset($conn, "utf8");
    return $conn;
}

function getDoctor($nr) {
    $mysql = "SELECT * FROM doctors WHERE id = $nr";
    $result = mysqli_query(getConnection(), $mysql);
    $result = mysqli_fetch_row($result);
    return $result;
}

function createDoctor($vardas, $pavarde) {
    $insert = "INSERT INTO doctors VALUES (NULL, '$vardas', '$pavarde');";
    $create = mysqli_query(getConnection(), $insert);
}

// createDoctor("Mantas", "Mantauskas");

function deleteDoctor($nr) {
    $mysql = "DELETE FROM doctors WHERE id = $nr";
    $delete = mysqli_query(getConnection(), $mysql);
}

// deleteDoctor(9);

function getDoctors() {
    $mysql = "SELECT * FROM doctors;";
    $getDoctors = mysqli_query(getConnection(), $mysql);
    return $getDoctors;
}

// $doctors = getDoctors();

// $doctor = mysqli_fetch_row($doctors);

// echo "<hr />";

// while ($doctor) {
//     print_r($doctor);
//     $doctor = mysqli_fetch_row($doctors);
// }

function editDoctor($nr, $vard, $pavard) {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_P, DB_BASE);
    $uzkoduotasNR = mysqli_real_escape_string($conn, $nr);
    $uzkoduotasVard = mysqli_real_escape_string($conn, $vard);
    $uzkoduotasPavard = mysqli_real_escape_string($conn, $pavard);
    $mysql = "UPDATE doctors SET
                             name = '$uzkoduotasVard',
                             lname = '$uzkoduotasPavard'
                             WHERE
                             id = '$uzkoduotasNR';";
    $edit = mysqli_query(getConnection(), $mysql);
}

// editDoctor(2, "Lukas", "Lukaukis");

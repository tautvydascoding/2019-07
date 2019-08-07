<?php

define("DB_HOST", "localhost");
define("DB_USER", "Lukas");
define("DB_P", "tratata");
define("DB_BASE", "hospital7");

function getConnection() {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_P, DB_BASE);
    if($conn) {
        // echo "Mr. Robot";
    } else {
        echo mysqli_error($conn);
    }
    return $conn;
}

function getPatients() {
    $mysqli = "SELECT * FROM patients;";
    $result = mysqli_query(getConnection(), $mysqli);
    return $result;
}

function getPatient($x) {
    $mysqli = "SELECT * FROM patients WHERE id = $x;";
    $result = mysqli_query(getConnection(), $mysqli);
    $result = mysqli_fetch_assoc($result);
    return $result;
}

<?php
include('patients-db-functions.php');

// Funkcija, kuri mums paims pacientus iš duomenų bazės
function getPatient($nr){
    $manoSQL = "SELECT * FROM Patients WHERE id='$nr'";
    $atsakymas = mysqli_query(getPrisijungti(), $manoSQL);
    $rezultatas = mysqli_fetch_assoc($atsakymas);
    return $rezultatas;
}
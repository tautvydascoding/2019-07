<?php
include('DOCTORS-DB-FUNCTIONS.php');

// Pasiimame informaciją apie gydytoją iš duomenų bazės pagal nurodytą ID numerį
function getDoctor($number){
    $manoSQL = "SELECT * FROM Doctors WHERE id='$number'";
    // Išsaugojam gautą rezultatą į MySql objektą
    $saveResult = mysqli_query(getConnection(), $manoSQL);
    // Pasiimam gautą rezultatą iš MySql objekto ir jį įdedame į masyvą
    $result = mysqli_fetch_assoc($saveResult);
    return $result;
}
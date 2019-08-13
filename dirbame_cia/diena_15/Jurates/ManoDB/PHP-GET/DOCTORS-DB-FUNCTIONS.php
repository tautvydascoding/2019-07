<?php
// Aprašom konstantas
define('DB_USER', '');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'juratespetrukaitytesDB');

// Susikuriam funkcija, kuri parodys ar sėkmingai pavyko prisijungti prie duomenų bazės
function getConnection(){
    // susikuriam kintamąjį
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // tikrinam ar prisijungimas sėkmingas, jeigu ne, pranešam apie tai:
    if($connection == false){
        // jei nepavyko prisijungti, pranešame:
        echo "ERROR! Connection was successful <br/>";
        // jei nepavyko prisijungti pranešame kodėl ir kur yra klaida:
        echo mysqli_error_list() . "<br/>";
    }
    // jeigu prisijungimas buvo sėkmingas
    return $connection;
}
// iškviečiam funkciją, kuri tikrina ar prisijungimas sėkmingas
getConnection();

// Pasiimame informaciją apie gydytoją iš duomenų bazės pagal nurodytą ID numerį
function getDoctor($number){
    $manoSQL = "SELECT * FROM Doctors WHERE id='$number'";
    // Išsaugojam gautą rezultatą į MySql objektą
    $saveResult = mysqli_query(getConnection(), $manoSQL);
    // Pasiimam gautą rezultatą iš MySql objekto ir jį įdedame į masyvą
    $result = mysqli_fetch_assoc($saveResult);
    return $result;
}

// Pasiimam informaciją apie gydytojus iš duomenų bazės
function getDoctors($amount){
    $manoSQL = "SELECT * FROM Doctors ORDER BY Location ASC LIMIT $amount";
    $answer = mysqli_query(getConnection(), $manoSQL);
    return $answer;
}

function deleteDoctor($nr){
    $manoSQL = "DELETE FROM Doctors WHERE ID = '$nr'";
    $result = mysqli_query(getConnection(), $manoSQL);
    if($result == false){
        return "ERROR IS: " . mysqli_error(getPrisijungimas()); // parodo kokia yra klaida
    }
}

function createDoctor($vardas, $pavarde){
    $manoSQL = "INSERT INTO Doctors VALUES (NULL, '$vardas', '$pavarde')"; // APLINK KINTAMUOSIUS BŪTINAI UŽDĖTI KABUTES
    $rezultatas2 = mysqli_query(getConnection(), $manoSQL);
    print_r($rezultatas2);
    if($rezultatas2 == false){
        return "ERROR IS: " . mysqli_error(getConnection()); // parodo kokia yra klaida
    }
}

// function updateDoctor($num, $vard, $pavard){
//     $manoSQL = "UPDATE Doctors SET id='$num', name='$vard', lastName='$pavard' WHERE id=6";
//     $result1 = mysqli_query(getConnection(), $manoSQL);
//     if($result1 == false){
//         return "ERROR IS: " . mysqli_error(getConnection()); // parodo kokia yra klaida
//     }
// }

function editDoctor($nr, $vardas, $pavarde) {
    $uzkoduotasNr = mysqli_real_escape_string(getConnection(), $nr);
    $uzkoduotasVardas = mysqli_real_escape_string(getConnection(), $vardas);
    $uzkoduotasPavarde = mysqli_real_escape_string(getConnection(), $pavarde);
    // mysqli_real_escape_string
    $manoSQL = "UPDATE Doctors  SET name = '$uzkoduotasVardas', lastName = '$uzkoduotasPavarde' WHERE id = '$uzkoduotasNr' LIMIT 1";
    $result0 = mysqli_query(getConnection(), $manoSQL);
    if ($result0 == false) {
        echo "Klaida:  " . mysqli_error(getConnection());
    }
}
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
// Iškviečiam funkciją, kuri tikrina ar prisijungimas sėkmingas
getConnection();


//--------------- Funkcija, kuri mums paims PACIENTUS iš duomenų bazės ---------------//
function getPatients($nr){
    $manoSQL = "SELECT * FROM Patients ORDER BY lastName DESC LIMIT $nr";
    $answer = mysqli_query(getConnection(), $manoSQL);
    return $answer; // Gauname MySql objektą
}

//--------------- Funkcija, kuri mums paims informaciją apie PACIENTĄ iš duomenų bazės ---------------//
function getPatient($nr){
    $manoSQL = "SELECT * FROM Patients WHERE id='$nr'";
    $answer = mysqli_query(getConnection(), $manoSQL);
    $result = mysqli_fetch_assoc($answer);
    return $result;
}

//--------------- Funkcija, kuri ištrins pasirinktą pacientą iš DB ---------------//
function deletePatient($nr){
    $manoSQL = "DELETE FROM Patients WHERE ID = '$nr'";
    $result = mysqli_query(getConnection(), $manoSQL);
    if($result == false){
        return "ERROR IS: " . mysqli_error(getConnection()); // parodo kokia yra klaida
    }
}

//--------------- Funkcija, kuri sukurs naują pacientą ---------------//
function createPatient($vardas, $pavarde, $adresas, $mobTelnr, $elPastas){
    $manoSQL = "INSERT INTO Patients VALUES (NULL, '$vardas', '$pavarde', '$adresas', '$mobTelnr', '$elPastas')"; // APLINK KINTAMUOSIUS BŪTINAI UŽDĖTI KABUTES
    $result = mysqli_query(getConnection(), $manoSQL);
    print_r($result);
    if($result == false){
        return "ERROR IS: " . mysqli_error(getConnection()); // parodo kokia yra klaida
    }
}

//--------------- Funkcija, kuris atnaujins paciento informaciją ---------------//
function editPatient($nr, $vardas, $pavarde, $adresas, $mobTelnr, $elPastas) {
    // SAUGUMAS
    $uzkoduotasNr = mysqli_real_escape_string(getConnection(), $nr);
    $uzkoduotasVardas = mysqli_real_escape_string(getConnection(), $vardas);
    $uzkoduotasPavarde = mysqli_real_escape_string(getConnection(), $pavarde);
    $uzkoduotasAdresas = mysqli_real_escape_string(getConnection(), $adresas);
    $uzkoduotasMobilusis = mysqli_real_escape_string(getConnection(), $mobTelnr);
    $uzkoduotasELpastas = mysqli_real_escape_string(getConnection(), $elPastas);

    $manoSQL = "UPDATE Patients  
    SET Name = '$uzkoduotasVardas', LastName = '$uzkoduotasPavarde',  Address = '$uzkoduotasAdresas',  MobileNumber = '$uzkoduotasMobilusis', Email = '$uzkoduotasELpastas'
    WHERE ID = '$uzkoduotasNr' LIMIT 1";
    $result = mysqli_query(getConnection(), $manoSQL);
    if ($result == false) {
        echo "Klaida:  " . mysqli_error(getConnection());
    }
}
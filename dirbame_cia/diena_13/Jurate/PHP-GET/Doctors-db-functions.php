<?php
// Prisijungimas prie DB
// Konstantos:
define('DB_USER', '');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'Hospital7');

// $prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// if($prisijungimas){
//     echo "Prisijungiau prie DB <br/>";
// } else {
//     echo "ERROR, prisijungti nepavyko <br/>";
//     echo mysqli_connect_error() . "<br/>"; // parodo, kas yra negerai su prisijungimu
// }

// Default versija
function getPrisijungimas(){
    $prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($prisijungimas == false){
        echo "ERROR, prisijungti nepavyko <br/>";
        echo mysqli_connect_error() . "<br/>";
    }
    // Kokios kalbos bus duomenų bazė, utf-8 neveiks, reikia rašyti utf8
    mysqli_set_charset($prisijungimas, "utf8");
    return $prisijungimas;
    // mysqli_close($prisijungimas); // atsijungti nuo DB, taip sutaupom serveryje resursų
}
getPrisijungimas();


//------------Paimam duomenis iš DB------------//
// testuojam:
// $gydytojas = getDoctor(8);
// print_r($gydytojas);
// delete Doctor($x)
// create Doctor($vardas, $pavarde)
// update Doctor ($nr, $vardas, $pavarde)
// get Doctors ($kiekis) įrašyti kiek nori gauti daktarų, nes jeigu neįrašysi, tada paims absoliučiai visus gydytojus, kuriuos turi

// Gydytojo įrašymas į duomenų bazę
function createDoctor($vardas, $pavarde){
    $manoSQL = "INSERT INTO Doctors VALUES (NULL, '$vardas', '$pavarde')"; // APLINK KINTAMUOSIUS BŪTINAI UŽDĖTI KABUTES
    $rezultatas2 = mysqli_query(getPrisijungimas(), $manoSQL);
    print_r($rezultatas2);
    if($rezultatas2 == false){
        return "ERROR IS: " . mysqli_error(getPrisijungimas()); // parodo kokia yra klaida
    }
}
// createDoctor("Tomas", "Tomauskas");
// createDoctor("Antanas", "Antanauskas");

function deleteDoctor($nr){
    $manoSQL = "DELETE FROM Doctors WHERE id = '$nr'";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if($result == false){
        return "ERROR IS: " . mysqli_error(getPrisijungimas()); // parodo kokia yra klaida
    }
}

// deleteDoctor(15);
// deleteDoctor(16);

function updateDoctor($num, $vard, $pavard){
    $manoSQL = "UPDATE Doctors SET id='$num', name='$vard', lastName='$pavard' WHERE id=6";
    $result1 = mysqli_query(getPrisijungimas(), $manoSQL);
    if($result1 == false){
        return "ERROR IS: " . mysqli_error(getPrisijungimas()); // parodo kokia yra klaida
    }
}

// updateDoctor(15, "Tomas", "Tomauskas");

function getDoctors($howMuch){
    $manoSQL = "SELECT * FROM Doctors ORDER BY lastName LIMIT $howMuch";
    $ats = mysqli_query(getPrisijungimas(), $manoSQL);
    return $ats;
}
// $allDoctors = getDoctors(7);
// $doctorArray = mysqli_fetch_assoc($allDoctors);
// print_r($doctorArray);
// echo "<hr>";

// while ($doctorArray) {
//     print_r($doctorArray);
//     $doctorArray = mysqli_fetch_assoc($allDoctors);
// }
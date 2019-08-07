<?php
define('DB_USER', '');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'juratespetrukaitytesDB');

// Susikuriam funkcija, kuri parodys ar sėkmingai pavyko prisijungti prie duomenų bazės
function getConnectionNOW(){
    // susikuriam kintamąjį
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // tikrinam ar prisijungimas sėkmingas, jeigu ne, pranešam apie tai:
    if($connection == false){
        // jei nepavyko prisijungti, pranešame:
        echo "ERROR, prisijungti nepavyko <br/>";
        // jei nepavyko prisijungti pranešame kodėl ir kur yra klaida:
        echo mysqli_connect_error() . "<br/>";
    }
    // Nurodome duomenų bazei, jog atpažintų įvairiausius žodžių simbolius (rusų kirilica, lietuviškis, vokiškos ir pan.)
    mysqli_set_charset($connection, "utf8");
    // jeigu prisijungimas buvo sėkmingas
    return $connection;
}
// iškviečiam funkciją, kuri tikrina ar prisijungimas sėkmingas
getConnectionNOW();

// Pasiimame informaciją apie gydytoją iš duomenų bazės pagal nurodytą ID numerį
function getDoctor($number){
    $manoSQL = "SELECT * FROM Doctors WHERE id='$number'";
    // Išsaugojam gautą rezultatą į MySql objektą
    $saveResult = mysqli_query(getConnectionNOW(), $manoSQL);
    // Pasiimam gautą rezultatą iš MySql objekto ir jį įdedame į masyvą
    $result = mysqli_fetch_assoc($saveResult);
    return $result;
}
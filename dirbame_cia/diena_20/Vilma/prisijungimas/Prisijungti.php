<?php
include_once('Model/Config.php');

session_start();

$error = ''; // Kintamasis, kuriame bus laikomi klaidų pranešimai

// Kai administratorius bando prisijungti ir paspaudžia mygtuką PRISIJUNGTI
if (isset($_POST['prisijungti'])) {
    // Patikrinam ar visi įvedimo laukai yra netušti
    if (empty($_POST['prisijungimovardas']) || empty($_POST['slaptazodis'])) {
    $error = "Užpildykite visus įvedimo laukus";
    } else{

        $username = $_POST['prisijungimovardas'];
        $password = $_POST['slaptazodis'];
        $prisijungimasPrieDB = getPrisijungiam();

        // Patikrinam ar duomenų bazėje įvesti duomenys sutampa su įvestais duomenimis įvedimo laukuose (ar prisijungimo vardas ir slaptazodis yra teisingai nurodyti)
        $manoSQL = "SELECT * FROM Prisijungimo_duomenys WHERE Prisijungimo_vardas=? AND Slaptazodis=? LIMIT 1";

        // Apsisaugojam nuo duomenų bazės sunaikinimo arba nuo SQL Injection, saugumo sumetimais
        $atsakymas = $prisijungimasPrieDB->prepare($manoSQL);

        // Pirmas parametras - nurodo kokio tipo duomenys bus siunčiami į DB, šiuo atveju tekstas(string), antras ir trečias parametrai nurodo kokius duomenis mes norime susisieti su duomenų baze
        // kadangi siunčiam vartotojo vardą ir slaptažodį į mūsų DB, tai siunčiam 2 tekstinius parametrus, todėl reikia nurodyti ss (string, string);
        $atsakymas->bind_param("ss", $username, $password);

        // Kai mūsų nusiųsti duomenys bus susieti su DB, tada DB įvykdys mūsų paduotą užklausą
        $atsakymas->execute();

        // Ir susies/suriš įvestą vartotojo vardą su DB esančiu vartotojo vardu, įvesta slaptažodį su DB esančiu slaptazodziu
        $atsakymas->bind_result($username, $password);
        
        // Sugrąžina rezultatą iš paskutinės pateiktos užklausos, kuris buvo patikrinti vartotojo vardą ir slaptažodį ir patvirtinti ar viskas sutampa
        $atsakymas->store_result();

        //Gautą atsakymą iš DB užfiksuojam į eilutę
            if($atsakymas->fetch()) {
            $_SESSION['prisijungesVartotojas'] = $username; // Sesijos kintamąjam priskiriam reikšmę
            header("location: valdymas.php"); // Nukreipiam į ADMINISTRATORIAUS PANELĘ, ten kur ir nori patekti vartotojas
            }
        mysqli_close($prisijungimasPrieDB); // Išjungiame prisijungimą prie DB
        }
}
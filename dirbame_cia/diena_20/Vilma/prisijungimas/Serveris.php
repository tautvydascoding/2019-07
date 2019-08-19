<?php
include_once('prekes-db-function.php');

// Priskiriu funkciją su kuria prisijungiam į DB prie kintamojo, dėl patogesnio naudojimo
$prisijungti = getPrisijungimas();
session_start();// Sesija prasideda

// Sesijai priskiriam kintamąjį
$patikrinkVartotoja = $_SESSION['prisijungesVartotojas'];
// print_r($patikrinkVartotoja); //tikrinau ar gaunu duomenis, kurių man reikia

// Užklausa DB, kad patikrintų ar sutampa prisijungimo vardas ir visa tai mes užfiksuojam ir įrašom į kintamąjį
$manoSQL = "SELECT * FROM Prisijungimo_duomenys WHERE Prisijungimo_vardas='$patikrinkVartotoja'";
$rezultatas = mysqli_query($prisijungimasPrieDB, $manoSQL);
$atsakymas = mysqli_fetch_assoc($rezultatas);
// // print_r($atsakymas); vėl pasitikrinau kokius duomenis gaunu iš DB

$administratorius = $atsakymas['Prisijungimo_vardas'];
?>

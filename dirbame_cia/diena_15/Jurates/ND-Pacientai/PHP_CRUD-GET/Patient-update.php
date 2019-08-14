<?php
include_once('Patients-DB-functions.php');
// Pasitikriname ar gauname duomenis iš URL adreso
// print_r($_GET);

$vardas = $_GET['vardas'];
$pavarde = $_GET['pavarde'];
$adresas = $_GET['adresas'];
$mobTelnr = $_GET['mobNr'];
$elPastas = $_GET['elPastas'];
$nr = $_GET['id'];
editPatient($nr, $vardas, $pavarde, $adresas, $mobTelnr, $elPastas);

echo "Paciento duomenys atnaujinti sėkmingai :) <a href='index.php'>GRĮŽKITE Į PAGRINDINĮ PUSLAPĮ</a>";
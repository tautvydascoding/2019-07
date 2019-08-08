<?php
include('DOCTORS-DB-FUNCTIONS.php');
// print_r($_GET);
$vardas = $_GET['vardas'];
$pavarde = $_GET['pavarde'];
$nr = $_GET['id'];
editDoctor($nr, $vardas, $pavarde);

echo "Atnaujinta sėkmingai :) <a href='index.php'>Grįžkite atgal</a>";
<?php
include_once('doctor-db-functions.php');
// print_r( $_GET );
// print_r( $_POST ); // test

$vard = $_POST['vardas'];
$pavard = $_POST['pavarde'];
$nr = $_POST['id'];
editeDoctor($nr,  $vard,  $pavard  );

?>
<h1> Issaugota sekmingai!</h1>
<a href="index.php">  BACK </a>

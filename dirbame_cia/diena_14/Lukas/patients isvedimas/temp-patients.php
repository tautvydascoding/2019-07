<?php
include("patient-functions.php");
$id = $_GET['id'];

$printPatient = getPatient($id);

echo $printPatient['id'] . " ";
echo $printPatient['name'] . " ";
echo $printPatient['lname'] . "<br />";
echo "<hr />";
echo "<a href='index.php'>" . "Take me back ASAP!" . "</a>";

<?php
include("doctor-db-functions.php");
$id = $_GET['kintamasis'];

$doctorRow = getDoctor($id);

for($i = 0; $i < count($doctorRow); $i++) {
    echo  $doctorRow[$i] . "<br />";
}

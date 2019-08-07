<?php
include("db-funkcijos.php");
$id = $_GET['kintamasis'];

$gydytojaz = getDoctor($id);

for($i = 0; $i < 3; $i++) {
    echo $gydytojaz[$i] . "<br />";
}

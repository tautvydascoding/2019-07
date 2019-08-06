<?php

$autoData = [
    "marke" => "audi",
    "metai" => 2001,
    "kaina" => 1600
];


$conn = new mysqli('localhost', 'user', 'pass', 'base') or die(mysqli_error($conn));

function connect() {
    $GLOBALS["$conn"];
}

<?php
include_once ("hospital-db-function.php");
for ($i=1; $i < 6 ; $i++) {
    $gyd1 = getDoctor($i);
    echo "<h2> $gyd1[1] $gyd1[2] </h2>";
}

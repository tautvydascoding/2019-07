<?php
$a = 0;
while ($a <= 10) {
    $a++;
    echo $a; // ats: 1234567891011
}
echo "<br><hr>";
// Darome kol...
$b = 0;
do {
    $b++;
    echo $b;
} while ($b <= 10); // ats: 1234567891011

echo "<br><hr>";

$Nevedes = true;
$i = 0;
while ($Nevedes) {
    echo "Ieškau žmonos $i <br>";
    if($i > 10){
        break;
    }
    $i++;
}

echo "<br><hr>";
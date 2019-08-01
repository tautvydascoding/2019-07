<?php

$a = 0;

while ($a <= 10) {
    $a++;
    echo $a;  // 1 23456789 10 11
}
echo "<hr />";
// -------------
$b = 0;
do {
    $b++;

    echo $b;  //  1 23456789 10  11
} while ($b <= 10);
// --------
$nevedes = true;
$i = 0;
while ( $nevedes) {
    $i++;
    echo "Ieskau zmonos $i <br />";
    if ( $i > 1000) {
        break;
    }
}

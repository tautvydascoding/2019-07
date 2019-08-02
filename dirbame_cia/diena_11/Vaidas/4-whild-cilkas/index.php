<?php

$a = 0;

while ($a <= 10){
    $a++;

    echo $a;
}
echo "<hr />";

//-------------------------------------
$b = 0;

do {
    $b++;

    echo $b;
} while ($b <= 10);

echo "<hr />";
//-------------------------------------

$arNevedes = true;
$i = 0;
while ($arNevedes){
    $i++;
    echo "Ieskau zmonos $i <br />";
    if ($i > 1000) {
        break;
    }
};

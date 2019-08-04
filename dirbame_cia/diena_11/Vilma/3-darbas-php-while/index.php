<?php

$a=0;



while ($a <= 10) {

    echo $a;

    $a++;
}

echo "<br>";
$b = 0;
do {
    $b++;
    echo $b;
} while ($b <= 10);

// -------

$nevedes = true;
$i = 0;
while ($nevedes ) {
    $i++;
    echo "ieskau zmonos $i <br />";
    if ($i > 1000)
        {break;}
};

 ?>

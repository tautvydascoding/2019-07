<?php


$a = 0;

while ($a <= 10) {
    $a++;   //1234567891011
    echo $a;
}


echo "<hr />";

//----------------
$b = 0;
do {
  $b++;
  echo $b;  //1234567891011
} while ($b <= 10);

echo "<hr />";

//----------------

$nevedes = true;
$i = 0;
while ($nevedes) {
    $i++;
    echo "Ieskau zmonos $i <br />";
    if($i > 10) {
        break;
    }
}

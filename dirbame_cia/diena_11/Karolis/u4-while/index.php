<?php
$massive = [];
$i=1;
while ($i<50) {
    $massive[$i] = 1;
    if ($i % 2 == 0){
        $massive[$i] = 3;
    }
        else{
            $massive[$i] = 1;
        }
        echo "$massive[$i]" . " ";
    $i++;
}



$nevedes = true;
$i = 0;
while ($nevedes) {
    $i++;                                //geriau kad butu apacioj
    echo "ieskau zmonos $i <br>";
    if ($i>1000){
        break;
    }
}

<?php
// function pirmas(){
//     static $a = 0;
//     echo $a . "<br>";
//     $a++;
// }
// pirmas();
// echo $a;
//
// function antras(){
//     static $b = 0;
//     $b++;
//     if ($b < 20){
//         antras();
//     }
//     echo $b . "<br>";
// }
// antras();
// echo $b;

$a=4;
function test($a){

    echo "a=" . $a . "funkcijoje <br >";
}
test($a);
echo "a=" . $a . "globalus";

$z=5;
$x=10;
function test2(){
    global $z,$x;
    $z=$z*$x;
    echo $z;
}
test2();
echo $z;
 ?>

<?php
function test(){
    static $a = 0;
    echo $a;
    $a++;
}

test(); // $a == 0
test(); // $a == 1
test(); // $a == 2

//------------------------------------------------------
echo "<hr/>";

function test2(){
    static $count = 0;

    $count++;
    if ($count < 10){
        test2();
      }
      echo $count . "<br/>"; //10 10 10 10 10 ..
}
test2();
//$count == 10

//------------------------------------------------------
echo "<hr/>";

$a = 5; //global scope

function myTest(){
    echo $a;// local scope
}
myTest();


//-------------------------













 ?>

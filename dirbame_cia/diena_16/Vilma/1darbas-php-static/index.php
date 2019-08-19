<?php

function test()
{
    static $a = 0;
    echo $a;
    $a++;
}
test(); // $a == 0

test(); // $a == 1

test(); // $a == 2


function test2()
    {
        static $count = 0;
        $count++;
        echo $count;
        if ($count < 10) {
            test2();
    }
echo $count;
};
//$count == 10;
test2();

$c = 50;
function myTest() {
    echo $c;
    return $c;
}
$x = myTest($c);
echo $x;

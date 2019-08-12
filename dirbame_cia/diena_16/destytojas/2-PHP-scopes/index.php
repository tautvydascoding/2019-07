<?php


$a = 5; // global scope

function myTest() {
    echo $a; // local scope
}
myTest();

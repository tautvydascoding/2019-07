<?php


function rekursija() {
    static $count = 0;
    $count++;
    if ($count < 10) {
        rekursija();
    }
    echo $count . "<br />";  // 10 10 10 10 10 ...
}


rekursija();

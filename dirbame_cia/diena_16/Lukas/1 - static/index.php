<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        function test() {
            static $a = 0;
            echo $a;
            $a++;
            echo "<br />";
        }
test(); // 0 pirma karta iskviesta f-ja sukuria nesunaikinama kintamaji a su reiksme 0
test(); // 1 antra karta paleista f-ja prie $a = 0 prideda 1 ir gaunas reiksme $a = 1
test(); //2

echo "<hr />";

function test2() {
    static $count = 0;
    $count++;
    if($count < 10) {
        test2();
    }
    echo $count . "<br />";
}

test2();

echo "<hr />";


         ?>
    </body>
</html>

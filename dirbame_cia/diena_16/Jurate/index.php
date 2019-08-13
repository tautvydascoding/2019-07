<?php

// Static variable example
// function test(){
//     static $a = 0;
//     echo $a;
//     $a++;
// }

// test(); 
// test();
// test();

// Rekursija
// function test2(){
//     static $count = 0;
//     $count++;
//     if($count < 10){
//         test2();
//     }
//     echo $count;
// }
// test2();

// PHP SCOPES

$a = 5; // Global scope
function testuojam(){
    echo $a; // Local scope
}
testuojam(); // it gives us an error, because a variable is undefined
// PHP funkcijos savo kintamuosius užrakina funkcijos viduje, niekas negali ateiti ir niekas negali išeiti
// Norint, kad funkcija naudotų globalų kintamąjį, jį reikia iššaukiant funkciją skliausteliuose įrašyti

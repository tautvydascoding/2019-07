
// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }

// apsilimui

var masyvas = [];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"

let mas = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];

for(var i = 0; i < mas.length; i++) {
    if(mas[i] % 2 == 0) {
        mas[i] = "lyginis";
    }
}

console.log(mas);


// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60
//
let pagaminta = [];

for (var i = 0; i < i < 60; i++) {
    pagaminta[i] = Math.round(Math.random() * (100 - 10)) + 10;
}

console.log(random);
// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }

// for(var i = 0; < pagaminta.length; i++) {
//     burtai = Math.random();
//     if (burtai < 0.10) {
//         pagaminta[i] = pagaminta[i] * -1;
//     }
// }

// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)
// 4 UZDUOTIS:
// surasti geriausia darbuotoja
// 5 UZDUOTIS:
//surasti blogiausia darbuotoja

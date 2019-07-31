console.log("labas");
// apsilimui



//    JS random

// let x = Math.random();                  // skaiciai nuo 0 iki 0.999999999999999999
// x = (x * 10) + 1;                       // skaiciai nuo 1 iki 10
// x = (x * 100) + 1;                      // skaiciai nuo 1 iki 100
// x = (x * 100) + 10;                     // skaiciai nuo 10 iki 109,999999999999999999
// x = Math.round( Math.random( * 100) + 10);       // skaiciai nuo 10 iki 110



// console.log(x);



// var a = Math.random();   // 0 -1
// if ( a <= 0.1 ){
//     console.log("laimejai");
// }


var masyvas = [];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:

// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"

// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60
for ( i = 0 ; i < 60 ; i++){
    masyvas[i] =  Math.round((Math.random() * (max - min)) + 10);
}
console.log(masyvas);
// }
// console.log(masyvas);



// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// }
for (var i = 0 ; i < masyvas.length ; i++){
    burtai = Math.random();
    if (burtai < 0.1){
        masyvas[i] = masyvas[i] * -1;
    }
}
console.log(masyvas);
// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)
for (var i = 0 ; i < masyvas.length ; i++){
    if (masyvas[i] < 0){
        masyvas[i] = masyvas[i] * -1;
    }
}
console.log(masyvas);
// 4 UZDUOTIS:
// surasti geriausia darbuotoja
let ger = -1;
let gerx = -2;
for (var i = 0 ; i < masyvas.length ; i++){
    if (masyvas[i] > ger){
        ger = masyvas[i];
        gerx = i;
    }
}
console.log("geriausias:",ger,"nr",gerx);
// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
let blog = 1000;
let blogx = 1000;
for (var i = 0 ; i < masyvas.length ; i++){
    if (masyvas[i] < blog){
        blog = masyvas[i];
        blogx = i;
    }
}
console.log("blogiausias:",blog,"nr",blogx);

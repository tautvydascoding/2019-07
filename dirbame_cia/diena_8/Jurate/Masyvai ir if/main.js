//---- Math.random() ----//
let x = Math.random();
x = x * 100; // x yra nuo 0 iki 99.999999
x = (x * 100) + 10; // nuo 10 iki 109.9999
// x = Math.round((Math.random() * (Max-Min)) + Min); // nuo 10 iki 110 // 10 - yra min reikšmė, 


// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
// // apsilimui

var masyvas = [];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:

// isidedam i tuscia masyva skaicius
for(let i = 0; i < 13; i++){
    masyvas[i] = 1;
}
console.log(masyvas);

// kas antra masyvo reiksme yra lygi 3
for(let i = 1; i < masyvas.length; i = i + 2){
    masyvas[i] = 3;
}
console.log(masyvas);

// kas 6 masyvo reiksme bus lygi 4
for(let i = 5; i < masyvas.length; i = i + 2){
    masyvas[i] = 4;
}
console.log(masyvas);

// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"
for(let i = 0; i < masyvas.length; i++){
    if(masyvas[i] % 2 == 0){ //taip darant galima pridėti html elementams (kas antram)
        masyvas[i] = "lyginis";
    }
}
console.log(masyvas);
// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60
 let pagaminta = [];

for(let i = 0; i < 60; i++){
    pagaminta[i] = Math.round((Math.random() * (100-10)) + 10);
}
console.log(pagaminta);

// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }

for(let i = 0; i < pagaminta.length; i++){
    burtai = Math.random(); // nuo 0 iki 0.9999999
    // 10% tikimybė
    if(burtai < 0.10){
        pagaminta[i] = pagaminta[i] * -1;
    }
}
console.log(pagaminta);

// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)
// jeigu skaicius minusinis - paverciam ji teigiamu
for(let i = 0; i < pagaminta.length; i++){
    if(pagaminta[i] < 0){
        // console.log("veikia");
        // Paverciam minusini skaiciu teigiamu
        pagaminta[i] = pagaminta[i] * -1;
    }
}
console.log(pagaminta);


// 4 UZDUOTIS:
// surasti geriausia darbuotoja - maziausias skaicius yra geriausias
let geriausias = -9999;
let geriausioDarbuotojoNr = -9;
for(let i = 0; i < pagaminta.length; i++){
    if(geriausias < pagaminta[i]){
        console.log("veikia");
        geriausias = pagaminta[i];
        geriausioDarbuotojoNr = i;
    }
}
console.log("kiekis: ", geriausias, " numeris:", geriausioDarbuotojoNr);


// 5 UZDUOTIS:
//surasti blogiausia darbuotoja - didziausias skaicius yra blogiausias
let blogiausias = 9999;
let blogiausioDarbuotojoNr = 0; // šitas rodiklis priklauso nuo duomenu tipo
for(let i = 0; i < pagaminta.length; i++){
    if(blogiausias > pagaminta[i]){
        console.log("veikia");
        blogiausias = pagaminta[i];
        blogiausioDarbuotojoNr = i;
    }
}
console.log("kiekis: ", blogiausias, " numeris:", blogiausioDarbuotojoNr);

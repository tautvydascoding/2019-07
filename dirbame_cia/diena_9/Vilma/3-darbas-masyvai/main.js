console.log("labas");
// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60

let skaiciai = [];
for (var i = 0; i < 60; i++) {
    skaiciai[i] = Math.floor(Math.random() * 100);
    console.log(skaiciai[i]);
    if (skaiciai[i]%2 == 0) {
                skaiciai[i] = "lyginis";
    }
}
console.log(skaiciai);
// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
let mas = [];

for (var i = 0; i < 50; i++) {
var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
    mas[i] = a;
    if ( mas[i] <= 0.1) {
        mas[i]=mas[i]*(-1);
        console.log( mas[i], " laimejai" );
}
}


// 4 UZDUOTIS:
// surasti geriausia darbuotoja
// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
let pagaminta = [];
var min = 0;
var max = 100;
for (var i = 0; i < 60; i++) {
    let x  = Math.round((Math.random()*(max - min)) + min);
    pagaminta[i] = x;
};
console.log(pagaminta);
let maz = 9999;
let mazNr = 0;
for (var i = 0; i < pagaminta.length; i++) {
    if (pagaminta[i] < maz) {
        maz = pagaminta[i];
        mazNr = i;
        }
}
let didz = -9999;
let didNr = 0;
for (var i = 0; i < pagaminta.length; i++) {
    if (pagaminta[i] > didz) {
        didz = pagaminta[i];
        didNr = i;
        }
}
console.log("Maziausiai pagamino:",mazNr,"nr - jis pagamino",maz);
console.log("Daugiausiai pagamino:",didNr,"nr - jis pagamino",didz);

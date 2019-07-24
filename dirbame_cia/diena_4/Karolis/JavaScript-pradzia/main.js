console.log("111");
let x = 10; //integer tipo, sveikas skaicius
let y = -5.02; //float tipo skaicius su slankiojanciu kableliu
let vard = "as"; //String " "
// let vardas = as; (neteisingas reik kabuciu)
let taipNe = true; //true or false (Boolean)
let timeOfDeath; //undefined
let ivykoKlaida = null; // nei true, nei false, neaiski baigtis :)
let msg = "neteisingai";

let z = 0;
z = (100 + (1 + 4)) / 3;
console.log("ats", z);
//z= pi * r2 * 100
let V = Math.PI * Math.pow(50,2) * 90;
console.log("Turis", V); //700l?????
/*
 uzkomentuoti keleta eiluciu (jas iterpti tarp /*
 */

 //funkcijos kurimas
function pirmasBandymas() {
    let a = 60 * 22;
    console.log("atlyginimu",a);
}
//funkcijos paleidimas
pirmasBandymas();
//Uzdavinynas 5d -1
// Uzduotis 1
let vardas = "Karolis";
let pavarde = "Atkociunas";
let amzius = "29";
let atlyginimas = 1000;

console.log(vardas, pavarde);

//Uzuotis 2
function printVardasPavardeAmzius() {
    console.log(vardas, pavarde, amzius);
}
printVardasPavardeAmzius();

//Uzduotis 3

function printMetinisPajamuDydis() {
    let s = atlyginimas * 12;
    console.log("Metines Pajamos", s);
}
printMetinisPajamuDydis();

//Uzuotis 4
//let salis, miestas, adresas, pasto;
//galima tiap kurti kintamuosius bet jie igauna reiksme "undefined"
let salis = "Lietuva";
let miestas = "Kaunas";
let adresas = "gatve";
let pastoKodas = "43825";

function printAddressData() {
console.log(salis, miestas, adresas, pastoKodas);
}
printAddressData();

//siaip sau

function suma (x,y){
    let s = x + y;
    console.log("suma",s);
}

suma (100,50);
suma (400,300);
suma (10,40);
//Uzduotis 5

function printTekstas(x) {
    console.log(x);
}
printTekstas("o boze")

//Uzduotis 7 ???

function tri(x,y) {
    s = Math.sqrt(x * x + y * y);
    console.log("Izambine", s);
}
tri (2,8);
tri (3,5);

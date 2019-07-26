console.log("labas");
// =================if  teorija====================
// if ( true ) {
//     console.log("labas");
// }
if(true){
	console.log("labas")
}

// if (salyga) {
//     // jei true
//     //
//     //
// } else {
//     // jei false
// }


// if ( salyga ) {
//     // jei salyga tenkinama
// }
//
// if ( salyga ) {
//     // jei salyga tenkinama
// } else {
//     // jei salyga netenkinama  / priesingu atveju
// }
//
// if (salyga) {
//
// } else if (salyga) {
//
// } else {
//     // ?
// }

//=============IF====================
// UZDUOTIS
// sukurti kintamuosius: arVedes ir arDuotiPaskola = false
// patikrinti ar zmogus vedes. Jeigu "vedes" - duoti paskola, jeigu "nevedes" - neduoti paskolos
// su console.log pranesti ar paskola zmogui bus duodama
let arvedes = false;
let arduotipaskola = false;
if (arvedes == true){
    arduotipaskola = true;
    console.log("jamk");}
    else{
        arduotipaskola == false;
        console.log("nigausi");
    }

// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai vienodi, i konsole pranesti "vardai yra VIENODI"
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"
    var vardas1 = "Tomas";
    var vardas2 = "Karolis";
    if (vardas1 == vardas2){
        console.log("vardai yra vienodi");
    }else{
        console.log("vardai nevienodi");
    }


// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
if (vardas1 == "Tomas"){
    console.log("Sveikas tomai");
}
// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// pranesti kad vardai: "Tomas ir Karolis"
// arba pranesti, kad : "vardai NE Tomas ir Karolis"
// pakeitineti vardus ir paziureti ar veikia
if (vardas1 == "Tomas" && vardas2 == "Karolis"){
    console.log("Tomas ir Karolis");
}else{
    console.log("Vardai NE Tomas ir Karolis");
}
// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
// pranesti: "kazkuris is vardu yra Tomas"
// pakeitineti vardus ir paziureti ar veikia
if (vardas1 == "Tomas" || vardas2 == "Tomas"){
    console.log("Kazkuris tomas");
}
// 1 UZDUOTIS
// turesime vartotojo amziu
// let age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta
let age = 75;

if (age< 7 || age > 65){
    console.log("ir sokoladas");
    if (age < 7){
        console.log("varle");
    }else{
        console.log("kelione i birstona");
    }
}else if(7<=age && age<14){
    console.log("mini tel.");
}else if(14<=age && age<18){
    console.log("new music app");
}else if(18<=age  &&  age<24){
    console.log("stok");
}else if(24<=age && age<65){
    console.log("pensija");
}else if(65<=age){
    console.log("birstonas");
}

// Salygos:

// iki 7 metu
//      "Pliusines varles"
// nuo 7 iki 14
//      "Mini telefonai"
// nuo 14 iki 18
//      "new Music App"
// nuo 18 iki 24
//      "Stok i sauliu sajunga"
// nuo 24 iki 65
//      "Pensijos kaupimas - zusiregistruok"
// nuo 65
//      "kelione i Bristona"
// sunkesne:
//      (i 'if' vidu ideti papildoma 'if')
//      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"



// 2 UZDUOTIS
// susikurti kintamaji:  klietoVardas = "Jonas"     kurio reiksme lyginsime
// sukurti 3  vardas1= "Tomas", vardas2 ="Paulius", vardas3 ="Airidas" (gimianiciu vardai , jie tures akcijas))
var klientovardas = "petras";
var vardas1 = "tomas";
var vardas2 = "petras";
var vardas3 = "martynas";
// kai "if"-ui   klietoVardas yra lygus vardas1 - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui   klietoVardas yra lygus vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui   visiems kitiems - isvesti: "5% nuolaida kelionems"
if(klientovardas == vardas1){
    console.log("masinoms 10%");
}else if(klientovardas == vardas2){
    console.log("buitinei 30%");
}else {
    console.log("nuolaida kelionems");
}
// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
var cl1 = "bronze";
var cl2 = "silver";
var cl3 = "gold";
var klientoTipas = "silver";
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
if (klientoTipas == cl1){
    console.log("15% nuolaida");
}else if(klientoTipas == cl2){
console.log("30% nuolaida");}
else {
    console.log("5% nuolaida");
}

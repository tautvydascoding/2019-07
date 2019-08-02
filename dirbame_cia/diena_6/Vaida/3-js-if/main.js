console.log("labas");

// =================if  teorija====================
// if ( true ) {
//     console.log("labas");
// }
// if(true){
// 	console.log("labas")
// }

// if (salyga) {
//     // jei true
//     //
//     //
// } else {
//     // jei false
// }
//
//
// if (  x > 18 && y > 18) {
//     console.log("labas");
//     // jei salyga tenkinama
// }

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

let arVedes = true;
let arDuotiPaskola = false;

if (arVedes == true) {
    arDuotiPaskola = true;
}
if (arDuotiPaskola == true) {
    console.log( "Jums duosim paskola");
} else {
    console.log( "Deja, bandykite kita karta");
}



// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai vienodi, i konsole pranesti "vardai yra VIENODI"
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

let vardas1 = "Tomas";
let vardas2 = "Antanas";

if (vardas1 == vardas2 ) {
    document.querySelector('body').innerHTML += "vardai vienodi!" + vardas1 + vardas2;
} else {
    document.querySelector('body').innerHTML += "vardai skirtingi!!!";

}

// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

if (vardas1 == "Tomas") {
    document.querySelector('body').innerHTML += "Labas Tomai";
}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// pranesti kad vardai: "Tomas ir Karolis"
// arba pranesti, kad : "vardai NE Tomas ir Karolis"
// pakeitineti vardus ir paziureti ar veikia

vardas1 = "Tomas";
vardas2 = "Antanas";

if (vardas1 == "Tomas" && vardas2 == "Karolis") {
    // document.querySelector("body").innerHTML += "C) Tomas ir Karolis";
    console.log("C) Tomas ir Karolis");
} else {
    // document.querySelector("body").innerHTML += "C) vardai NE Tomas ir Karolis";
    console.log("C) vardai NE Tomas ir Karolis");
}



// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
// pranesti: "kazkuris is vardu yra Tomas"
// pakeitineti vardus ir paziureti ar veikia


vardas1 = "Martynas";
vardas2 = "Tomas";
if (vardas1 == "Tomas" || vardas2 == "Tomas") {
    // document.querySelector("body").innerHTML += " kazkuris is vardu yra Tomas";
    console.log("kazkuris is vardu yra Tomas");
}



// 1 UZDUOTIS
// turesime vartotojo amziu
// let age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta


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




let age = 30;

if (age < 7 ) {
    // document.querySelector('body').innerHTML += "Pliusines varles";
    console.log("Pliusines varles");
} else if ( age >= 7 && age < 14 ) {
    // document.querySelector("body").innerHTML += "Mini telefonai";
    console.log("Mini telefonai");
} else if ( age >= 14 && age < 18 ) {
    console.log("new Music App");
} else if ( age >= 18 && age < 24 ) {
    console.log("Stok i sauliu sajunga");
} else if ( age >= 24 && age < 65 ) {
    console.log("Pensijos kaupimas - uzsiregistruok");
} else {
    console.log("kelione i Bristona");
}

// sunkesne:
//      (i 'if' vidu ideti papildoma 'if')
//      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"


// let age = 69;
//
// if ( age < 7  || age > 65 ) {
//     console.log("Sokoladinia zuikuciai 20% nuolaida");
//     // document.querySelector('body').innerHTML += "Pliusines varles";
//     if ( age < 7 ) {
//     console.log("Pliusines varles");
// } else{
//     console.log("Kelione i Birstona");
// }


// 2 UZDUOTIS
// susikurti kintamaji:  klietoVardas = "Jonas"     kurio reiksme lyginsime
// sukurti 3  vardas1= "Tomas", vardas2 ="Paulius", vardas3 ="Airidas" (gimianiciu vardai , jie tures akcijas))

// kai "if"-ui   klietoVardas yra lygus vardas1 - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui   klietoVardas yra lygus vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui   visiems kitiems - isvesti: "5% nuolaida kelionems"

let klientoVardas = "Paulius";
vardas1 = "Tomas";
vardas2 = "Paulius";
vardas3 = "Airidas";

if ( klientoVardas == vardas1 ) {
    console.log( "Masinoms 10% nuolaida");
} if ( klientoVardas == vardas2 ) {
    console.log("Buitinei technikai  30% nuolaida");
} else {
    console.log("5% nuolaida kelionems");
}




// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime

// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//

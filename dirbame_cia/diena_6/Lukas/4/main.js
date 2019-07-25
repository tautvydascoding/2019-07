// =================if  teorija====================
// if ( true ) {
//     console.log("labas");
// }

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

let arVedes = true;
let arDuotiPaskola = false;

if(arVedes == true) {
    arDuotiPaskola = true;
}

if (arDuotiPaskola == true) {
    console.log("Jums galime duoti paskola.");
} else {
    console.log("Deja, jums negalime duoti paskolos.");
}

// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai vienodi, i konsole pranesti "vardai yra VIENODI"
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

let vardas1 = "Tomas";
let vardas2 = "Antanas";

if (vardas1 == vardas2) {
    console.log("Vardai yra VIENODI");
} else {
    console.log("Vardai yra skirtingi.");
}


// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

if(vardas1 == "Tomas") {
    console.log("Labas, Tomai");
}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// pranesti kad vardai: "Tomas ir Karolis"
// arba pranesti, kad : "vardai NE Tomas ir Karolis"
// pakeitineti vardus ir paziureti ar veikia

if(vardas1 == "Tomas" && vardas2 == "Karolis") {
    console.log("Tomas ir Karolis");
} else {
    console.log("Vardai NERA Tomas ir Karolis");
}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
// pranesti: "kazkuris is vardu yra Tomas"
// pakeitineti vardus ir paziureti ar veikia

if (vardas1 == "Tomas" || vardas2 == "Tomas") {
    console.log("vienas is vardu yra Tomas");
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
//      (i 'if' vidu ideti papildoma 'if')
//      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"

let age = 6;

if (age < 7 || age > 65) {
    document.querySelector("h1").innerHTML += "Sokoladiniai zuikuciai 20% nuolaida";
    if (age < 7) {
        document.querySelector("body").innerHTML += "Pliusines varles";
    } else if (age >= 7 && age < 14) {
        document.querySelector("body").innerHTML += "Mini telefonai";
    } else if (age <= 14 && age < 18) {
        document.querySelector("body").innerHTML += "new Music App";
    } else if (age >= 18 && age < 24) {
        document.querySelector("body").innerHTML += "Stok i Sauliu sajunga";
    } else if (age >= 24 && age < 65) {
        document.querySelector("body").innerHTML += "Pensijos kaupimas - uzsiregistruok";
    } else {
        document.querySelector("body").innerHTML += "Kelione i Birstona";
    }
}

// 2 UZDUOTIS
// susikurti kintamaji:  klietoVardas = "Jonas"     kurio reiksme lyginsime
// sukurti 3  vardas1= "Tomas", vardas2 ="Paulius", vardas3 ="Airidas" (gimianiciu vardai , jie tures akcijas))

// kai "if"-ui   klietoVardas yra lygus vardas1 - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui   klietoVardas yra lygus vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui   visiems kitiems - isvesti: "5% nuolaida kelionems"

let klientoVardas = "Jonas";
let vardas11 = "Tomas";
let vardas22 = "Paulius";
let vardas3 = "Airidas";

if (klientoVardas == vardas11) {
    document.querySelector("body").innerHTML += "Masinoms 10% nuolaida";
} else if (klientoVardas == vardas22) {
    document.querySelector("body").innerHTML += "Buitinei technikai  30% nuolaida";
} else {
    document.querySelector("body").innerHTML += "5% nuolaida kelionems";
}

// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime

// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//

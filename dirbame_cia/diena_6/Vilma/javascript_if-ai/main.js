console.log("labas111");
let arVedes = false;
let arDuotiPaskola = false;
if (arVedes == true) {
    arDuotiPaskola = true;
    console.log("Jums galime duoti paskola");
} else {
    console.log("Jums negalime duoti paskolos");
}

let vardas1 = "Tomas";
let vardas2 = "Antanas";
if (vardas1 == vardas2) {
    console.log("Vardai vienodi");
} else {
    console.log("Vardai skirtingi");
}
if (vardas1 == "Tomas") {
    document.querySelector("h1").innerHTML += "Labas Tomai!"
}
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

let age = 41;

if (age < 7 || age > 65) {
    document.querySelector("h2").innerHTML = "Sokoladiniai zuikuciai 20% nuolaida"
    if (age < 7) {
        document.querySelector("h2").innerHTML += " Pliusines varles";
    } else {
        document.querySelector("h2").innerHTML += " Kelione i Birstona"
    }
} else if (age < 14) {
    document.querySelector("h2").innerHTML = "Mini telefonai"
} else if (age < 18) {
    document.querySelector("h2").innerHTML = "new Music App"
} else if (age < 24) {
    document.querySelector("h2").innerHTML = "stok i Sauliu sajunga"
} else if (age < 65) {
    document.querySelector("h2").innerHTML = "Pensijos kaupimas - uzsiregistruok"
}

// 2 UZDUOTIS
// susikurti kintamaji:  klietoVardas = "Jonas"     kurio reiksme lyginsime
// sukurti 3  vardas1= "Tomas", vardas2 ="Paulius", vardas3 ="Airidas" (gimianiciu vardai , jie tures akcijas))

// kai "if"-ui   klietoVardas yra lygus vardas1 - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui   klietoVardas yra lygus vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui   visiems kitiems - isvesti: "5% nuolaida kelionems"
let klientoVardas = "Paulius";
let var1 = "Tomas";
let var2 = "Paulius";
let var3 = "Airidas";

if (klientoVardas == var1) {
    document.querySelector('h2').innerHTML = "Masinoms 10% nuolaida"
} else if (klientoVardas == var2) {
    document.querySelector('h2').innerHTML = "Buitinei technikai  30% nuolaida"
}    else if (klientoVardas == var3) {
        document.querySelector('h2').innerHTML = "Viskam 50%"
}        else {
            document.querySelector('h2').innerHTML = "5% nuolaida kelionems"
        }

//=============IF====================
// UZDUOTIS
// sukurti kintamuosius: arVedes ir arDuotiPaskola = false
// patikrinti ar zmogus vedes. Jeigu "vedes" - duoti paskola, jeigu "nevedes" - neduoti paskolos
// su console.log pranesti ar paskola zmogui bus duodama
/*
let arVedes = true;
let arDuotiPaskola = false;

if(arVedes == true){
	arDuotiPaskola = true;
} 

if(arDuotiPaskola == true){
	console.log("Paskola gauta");
}
else {
	console.log("Paskola negauta");
}

// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai vienodi, i konsole pranesti "vardai yra VIENODI"
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"
let vardas1 = "Tomas";
let vardas2 = "Antanas";

if(vardas1 == vardas2){
	console.log("Vardai yra vienodi");
} else {
	console.log("Vardai yra skirtingi");
}

// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
if(vardas1 === "Tomas"){
	console.log("Labas");
} else {
	console.log("NeLabas");
}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// pranesti kad vardai: "Tomas ir Karolis"
// arba pranesti, kad : "vardai NE Tomas ir Karolis"
// pakeitineti vardus ir paziureti ar veikia
if(vardas1 === "Tomas" && vardas2 === "Karolis"){
	console.log("Vardai yra Tomas ir Karolis");
} else {
	console.log("Vardai yra Ne Tomas ir Ne Karolis");
}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
// pranesti: "kazkuris is vardu yra Tomas"
// pakeitineti vardus ir paziureti ar veikia
if(vardas1 === "Tomas" || vardas2 === "Tomas"){
	console.log("Kažkuris iš vardų yra Tomas");
} else {
	console.log("Nei vienas iš vardų nėra Tomas");
}
*/

// 1 UZDUOTIS
// turesime vartotojo amziu
// let age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta

let age = 23;
if(age < 7 || age >= 65){
	console.log("Sokoladiniai zuikuciai 20% nuolaida");
	if(age < 7){
		console.log("Pliusines varles");
	} else {
		console.log("kelione i Birštona");
	}
}
else if(age >= 7 && age < 14){
	console.log("Mini telefonai");
} else if(age >= 14 && age < 18){
	console.log("new Music App");
} else if(age >= 18 && age < 24){
	console.log("Stok i sauliu sajunga");
} else if (age >= 24 && age < 65){
	console.log("Pensijos kaupimas - uzsiregistruok");
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
let klientoVardas = "Jonas";
let vardas1 = "Tomas";
let vardas2 = "Paulius";
let vardas3 = "Airidas";

if(klientoVardas == vardas1){
	console.log("Masinoms 10% nuolaida");
} else if(klientoVardas == vardas2){
	console.log("Buitinei technikai  30% nuolaida");
} else {
	console.log("5% nuolaida kelionems");
}


// kai "if"-ui   klietoVardas yra lygus vardas1 - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui   klietoVardas yra lygus vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui   visiems kitiems - isvesti: "5% nuolaida kelionems"

// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime

// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//
let klientoTipas1 = "bronze";
let klientoTipas2 = "silver";
let klietoTipas3 = "gold";
let kleintoTipas
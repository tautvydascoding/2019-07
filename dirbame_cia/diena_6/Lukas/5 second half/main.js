// 2.0 UZDUOTIS
// sukurti f-ja "print()", kuri  i browser langa atspausdins  teksta "atspausdintas su f-ja" (panaudojanti document.write arba innerHTML)

function print() {
    document.querySelector("body").innerHTML += "2.0 tekstas atspausdintas su funkcija";
}

print();

// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

function printX(xx) {
    document.querySelector("body").innerHTML += xx;
}

printX(" 2.1 Funkcija labas ");

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

for(var i = 0; i < 100; i++) {
    printX("hey");
}

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila

for(var i = 0; i < 12; i++) {
    printX("<img src='http://zourbuth.com/wp-content/themes/zrbt/img/200x200.jpg'>");
}



// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

function piestiEilute(x) {

}


// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%

var kiekMenesiu = 10 * 12;
var menAtlyginimas = 680;
var algosPokytis = 1;  // 1%

function skaiciuotiAtlygi(alga, men, pokytis) {
    for(var i = 0; i < men; i++)
    ats = alga * (pokytis * men);
    return ats;
}

let atsakymas = skaiciuotiAtlygi(menAtlyginimas, kiekMenesiu, algosPokytis);
console.log(atsakymas)


// ==============SCSS============================

//========= local/global or Frog/Garden =======

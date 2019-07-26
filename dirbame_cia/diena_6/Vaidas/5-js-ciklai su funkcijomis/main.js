console.log("labas");




// 2.0 UZDUOTIS
// sukurti f-ja "print()", kuri  i browser langa atspausdins  teksta "atspausdintas su f-ja"
// (panaudojanti document.write arba innerHTML)

function print() {
    document.querySelector ('body').innerHTML += "atspausdintas su f-ja <br>";
}
print();
print();
print();


// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta
// (panaudojanti document.write arba innerHTML)

function printX( tekstas ) {
    document.querySelector ('body').innerHTML += tekstas;
}
printX( "Tomas" );
printX( 999 );
printX( "<h2> Labas </h2>");
printX( "Tomas");



// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

for (var i = 0; i < 20; i++) {
    printX( "<h6> Labas </h6>");
}



// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila

// for (var i = 0; i < 12; i++) {
//     printX( "img/formation-html-css.jpg");
// }

// nuotraukos nnuoroda cia atkelta ir html:
manoNuotrauka = '<img src="img/formation-html-css.jpg" width="200px" alt="html-css baltas">';

for (var i = 0; i < 12; i++) {
    printX(manoNuotrauka);
}


// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)




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

// ==============SCSS============================

//========= local/global or Frog/Garden =======

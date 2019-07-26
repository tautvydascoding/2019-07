console.log("labas");
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// function reiksme() - f-jos kurimas
// =============================



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

document.write(" <b class='bg-info'> Mano tekstas </b> ");
document.write(" Mano tekstas 2");
// window.alert("labas"); realybej nevartot

// alert("Viso");

// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
document.querySelector('h1').innerHTML += " <b>Antraste</b>";
document.querySelector('h1').innerHTML += " Vidurys";
document.querySelector('h1').innerHTML += " <div>2019</div>";
// istrynimas
// document.querySelector('h1').innerHTML = " ";

//----Elemento duomenys--------
// auksto paemimas:
var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
document.querySelector("h1").style.color = "green"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);

// sukurimas
function printKaina(x) {
    console.log("x yra: ", x);
}
// iskvietimas
printKaina(15.99);

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

printKaina(10.99);
printKaina(999);
printKaina(13);



// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1() {
    let x1=5;
    let x2=10;
    let x3=8;
    let x4=6;
    let x5=8;
    let vidurkis = (x1+x2+x3+x4+x5) / 5;
    console.log("vidurkis yra:", vidurkis);
}
pazymiuVidurkis1();


//  2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis2(x1, x2, x3, x4, x5) {
    let vidurkis = (x1+x2+x3+x4+x5) / 5;
    console.log("vidurkis yra:", vidurkis);
}
pazymiuVidurkis2(3, 2, 5, 8, 7);
pazymiuVidurkis2(10, 5, 6, 4, 9);
pazymiuVidurkis2(7, 7, 7, 7, 7);


//=====================RETURN==================

// 1 UZDUOTIS
// A) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// B)   f-joje  sukurti kintamaji "vardas" Tomas
// C) patikrinti ar veikia f-ja

function getVardas() {
    let vardas = "Tomas";
    return vardas;

}
console.log(     getVardas()   );

// arba
let v = getVardas();
console.log( v );



// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
    let vardas = "Antanas";
    let pavarde = "Tomauskas";
    let vardaspavarde = (vardas + " "+ pavarde);
    return vardaspavarde;

}
let zmogus = getVardasPavarde();
console.log( "zmogaus duomenys:", zmogus );

// arba
// function getVardasPavarde() {
//     let vardas = "Antanas";
//     let pavarde = "Tomauskas";
//
//     return (vardas + " "+ pavarde);
//
// }
// console.log( getVardasPavarde() );






// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja

function getPelnas(pajamos, islaidos) {

    return (pajamos - islaidos);

}
console.log( getPelnas( 12500, 7500) );
console.log( getPelnas( 1000, 500) );




// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja

function getPelnas(pajamos, nuostoliai) {

    return (pajamos - nuostoliai);

}
console.log( getPelnas( 12500, 7500) );
console.log( getPelnas( 1000, 500) );




// 4.1 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja vieno mokinio pazymiu vidurki
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//  turi "return" zodeli.

function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
    let vidurkis = ( x1 + x2 + x3 + x4 + x5 )/5;
    return vidurkis;
}


let vidurkis = getPazymiuVidurkis2(5, 5, 5, 5, 5);

console.log( "atsakymas:", vidurkis  );



// 4.2 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja 6-kiu mokiniu pazymiu vidurki
// "getKlasesPazymiuVidurkis(y1, y2, y3, y4, y5, y6)"
// f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
// turi "return" zodeli.

    let ieva = getPazymiuVidurkis2(5, 5, 6, 6, 6);
    let povilas = getPazymiuVidurkis2(7, 7, 7, 7, 7);
    let antanas = getPazymiuVidurkis2(5, 5, 8, 6, 6);
    let domas = getPazymiuVidurkis2(5, 5, 8, 6, 6);
    let linas = getPazymiuVidurkis2(5, 7, 8, 9, 4);
    let ana = getPazymiuVidurkis2(5, 5, 8, 8, 9);

function getKlasesPazymiuVidurkis(y1, y2, y3, y4, y5, y6) {
    let v = ( y1 + y2 + y3 + y4 + y5 + y6 )/6;
    return v;

}

let klasesVidurkis = getKlasesPazymiuVidurkis(ieva, povilas, antanas, domas, linas, ana);
console.log( "klases vidurkis:", klasesVidurkis);


// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

// =================FOR intro  ======================

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######

//=========== =KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

//======= local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ====

// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
// document.querySelector('h1').innerHTML = " <b>Antraste</b>";

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)


//=====================RETURN==================

// 1 UZDUOTIS
// A) sukurti kintamaji "vardas" Tomas
// B) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// C) patikrinti ar veikia f-ja

// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja

// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja


// 4 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")



// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

// =================FOR intro  ======================

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######

//=========== =KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

//======= local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ====



// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja

function printDuomenys() {
    var vardas = "Tomas";
    console.log(vardas);
}

printDuomenys();

//   UZDUOTIS  B
//  dabar, pabandykite po f-ja (uz jos ribu) i konsole atspausdinti kintamaji "vardas"
//  console.log( vardas) ;
// NOTE: gausite klaida ""is not defined""

// console.log(vardas);

//================local && global=========
var x = "x -viesas ";   // global
function testLocalVar() {
   var y = "y -vietinis ";  // local
   z = "z -viesas";        // global // nereiketu taip daryti
}

console.log("x", x);
   // console.log("y", y); // error nes vietinis testLocalVar f-joje
// console.log("z", z); // error nes kol funkcija nepaleista nei karto, z nera sukurtas globaliai.
testLocalVar();
console.log("x", x);
console.log("z", z); // dabar jau veikia, nes funkcija buvo paleista ir ji sukure globaliai.
// console.log("y", y);  // error - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"

//------
 // UZDUOTIS // UZDUOTIS
 // A) sukurti kintamaji var katinas = "juodas"
 // B) sukurti f-ja
 // C) sukurti f-jos viduje kintamaji var katinas = "baltas"
 // D) atspauzdinti abu f-jos viduje
 // E) atspauzdinti  uz f-jos


 var katinas = "juodas";   //global

 function test2() {
     var katinas = "baltas";  // local
     console.log("1 katinas:", katinas);
     console.log("2 this.katinas - f-jos viduje: ",  this.katinas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 }
 test2();
 console.log("3 katinas:", katinas);

//==========================

 var xx = 10; // global

 function isvesti( xx ) {  // xx - (local) naujas issigalvotas LAIKINAS  kintamasis
     xx = 20;  // local
     console.log( "1. xx:", xx);
     console.log( "2. this.xx:",   this.xx);
 }

isvesti(999);
console.log( "3. xx:", xx);


 //======================
 var vardas = "Jonas";   // global - kintamasis
 function myName ( vardas ) { //  vardas - local kintamasis
     console.log( "vardas" + vardas);
     console.log("this.vardas - f-jos viduje: ",  this.vardas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 }
 myName(" TOMAS");
//======================TEKSTO ISVEDIMAS===============


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

function printAntraste(x) {
    document.querySelector("body").innerHTML += "<h2>" + x + "</h2>";
}

printAntraste("BMW pinga, nes daugeja");
printAntraste("Greik pageres orai");
printAntraste("Vasaros vis salteja");

//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)"
//  kuri atspausdina i DOM-a (ekrana) "<p>" + x + "</p>" (paduota teksta tarp "p")

function printStraipsnis(x){
    document.querySelector("body").innerHTML += "<p>" + x + "</p>";
}

printStraipsnis("paragrafas");

//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",

printAntraste("Audi pinga, nes daugeja");
printStraipsnis("paragrafas 1");
printAntraste("Greit pabloges orai");
printStraipsnis("paragrafas 2");
printAntraste("Vasaros vis karsteja");
printStraipsnis("paragrafas 3");


//=======================================

console.log("labas");


//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);

let vardas = "TOmas";
let pavarde = "Tomauskis";
let amzius = 20;
let atlyginimas = 1100;

console.log(vardas , atlyginimas);

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(    typeof(vardas)  );
console.log(    typeof(amzius)  );

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius() {
    console.log( vardas, pavarde, amzius);
}
printVardasPavardeAmzius();
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")
function printMetinisPajamuDydis() {
     metinesPajamos = atlyginimas * 12;
     console.log( "met. pajamos: ", metinesPajamos );
}
printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
let salis = "Latvija";
let miestas = "Ryga";
let adresas = "Barsasuko 13";
let pastoKodas = "LT-5033";

// B) sukurti f-ja "printAddressData()",
// kuri atspausdina i konsole visus siuos kintamuosius
function printAddressData() {
    console.log( salis, miestas, adresas, pastoKodas);
}
 printAddressData();

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(tekstas) {
    console.log( tekstas );
}
printTekstas("Sveiki atvyke!");
printTekstas("gal kazko pietums?");

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja staciojo trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)    saknis(  x*x + y*y) ir is visko istraukti sakti (js Math.sqrt())

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos



//

console.log("labas");

// V = pi * 50^2 * 90 // COMBAK:
let V = Math.PI * Math.pow(50, 2) * 90;
console.log("apvalus stalo turis:", V); // 700


// funkcijos kurimas
function skaiciuotiAtlyginima() {
    let a = 70 * 21;
    console.log( a );
}

// funkcijos paleidimas
skaiciuotiAtlyginima();
skaiciuotiAtlyginima();
skaiciuotiAtlyginima();
skaiciuotiAtlyginima();


// sukurti kintamuosius (ir jiems priskirti reiksmes):

let vardas = "Tomas";
let pavarde = "Tomauskas";
let amzius = 20;
let atlyginimas = 1000;

// console.log( vardas, pavarde);
    console.log( vardas, pavarde );

// teo:






//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius() {
    console.log( vardas, pavarde, amzius );
}
printVardasPavardeAmzius();
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")
function printMetinisPajamuDydis() {
    metinesPajamos=12*atlyginimas;
    console.log( "Met. pajamos:", metinesPajamos);
}
printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas

let salis = "Latvija";
let miestas = "Ryga";
let adresas = "Barsausko 13";
let pastoKodas = "LT-5033";

// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

function printAddressData() {
    console.log( salis, miestas, adresas, pastoKodas);
}
printAddressData();


// 5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");
function printTekstas(x) {
    console.log( x );
}
printTekstas("sveiki atvyke");
printTekstas("gal kazko pietum?");

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

function skaiciuotiPitagoro( x, y ) {
    let a = Math.sqrt(x *x + y * y);
    console.log( a );
}

// funkcijos paleidimas
skaiciuotiPitagoro(10, 15);
skaiciuotiPitagoro(2, 4);

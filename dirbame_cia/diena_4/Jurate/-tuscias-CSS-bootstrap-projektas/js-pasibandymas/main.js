/*
let x = "tomas";
let y = 9
console.log(x * y);

// V = pi * 50^2 * 90cm uzduotis ir gaunam stalo tūrį
let v = Math.PI * Math.pow(50, 2) * 90;
console.log("Apvalaus stalo tūris ", v); // Atsakymas ~700 l

//Funkcijos kūrimas
function skaiciuojamAtlyginimus(){
    let atlyginimas = 70 * 21;
    console.log(atlyginimas);    
}

// Funkcijos paleidimas
skaiciuojamAtlyginimus();
*/

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// console.log(    typeof(vardas)  );
// console.log(    typeof(amzius)  );

let vardas = "Jurate";
let pavarde = "Petrukaityte";
let amzius = 24;
let atlyginimas = 700;

console.log(vardas, pavarde, amzius, atlyginimas);
console.log(typeof(vardas));
console.log(typeof(amzius));

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
    console.log(vardas, pavarde, amzius, atlyginimas);
}
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis(a){

    console.log("Atlyginimas yra: " + a);
}
printMetinisPajamuDydis(1800 * 12);
printMetinisPajamuDydis(1900 * 12);
printMetinisPajamuDydis(atlyginimas * 12);


//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

let salis = "Lietuva";
let miestas = "Kaunas";
let adresas = "Savanorių pr. 102B";
let pastoKodas = 40025;

function printAddressData() {
    console.log(salis, miestas, adresas, pastoKodas);
}
printAddressData();

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(x) {
    console.log(x);
}
printTekstas("Jokubo istorija");

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

function pitagoroTeorema(x, y, z){

    let teorema = Math.sqrt(Math.pow(x, 2) + Math.pow(y, 2) + Math.pow(z, 2));

    console.log(teorema);
}
pitagoroTeorema(5, 2, 5);
pitagoroTeorema(8, 2, 8);

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos





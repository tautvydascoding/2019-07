console.log("Labas");

let v = Math.PI * Math.pow(50, 2) * 90;
console.log("apvalaus stalo turis", v);

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);

let vardas = "Lukas";
let pavarde = "Ivanauskas";
let amzius = 27;
let atlyginimas = 1200;
console.log(vardas, pavarde);

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// console.log(    typeof(vardas)  );
// console.log(    typeof(amzius)  );

console.log(typeof(vardas));
console.log(typeof(amzius));

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
    console.log(vardas, pavarde, amzius);
}

printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis() {
    console.log(12 * atlyginimas);
}

printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius
let salis = "Lietuva";
let miestas = "Kaunas";
let adresas = "Vytauto pr. 24";
let pastoKodas = 50465;

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

printTekstas("Mama mia");

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

function pitagoroTeorema(x, y) {
    let pT = x * x + y * y;
    console.log(Math.sqrt(pT));
}

pitagoroTeorema(8, 6);

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

let indiana = "";
console.log(typeof(indiana));

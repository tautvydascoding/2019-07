console.log("labas");
let x = 10; //skaiciai (sveiki/integer)
let y = -5.01; //skaicius, slankus kablelis (su kableliu/float)
let vardas = "Vaidas"; //Sting , tai stringai (butina uzdeti kabutes ant kintamojo teskstas)
let arVedes = true; // Boolean (arba gali buti false)
let mirtiesData; // (nepriskirtas kintamasis / undefined)
let arPavykoApsipirkti = null;
let msg = "neatspejo PIN kodo"; // msg, tai zinute

let z = 0;
z = (99 - 1) * 2 + 2;
console.log( "gera diena", " kaip ", "jums sekasi");
console.log( "ats", z);

// V = pi * 50^2 * 90cm
let V = Math.PI * Math.pow(50, 2) * 90;
console.log("apvalaus stalo turis:", V); // 700l atsakyma galima uzsirasyti komentaruose


//funkcijuos kurimas

function skaiciuotiAtlyginima() {
    let a = 70 * 21;
    console.log( a );
}
//funkcijos paleidimas
skaiciuotiAtlyginima();
skaiciuotiAtlyginima();
skaiciuotiAtlyginima();



//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);
let vardas1 = "Jonas";
let pavarde = "Jonaitis";
let amzius = 22;
let atlyginimas = 1000;
console.log( vardas1 , pavarde);

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// console.log(    typeof(vardas)  );
// console.log(    typeof(amzius)  );
console.log(    typeof(vardas)  );
console.log(    typeof(amzius)  );


//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius() {
    console.log( vardas1, pavarde, amzius)
}
printVardasPavardeAmzius();
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")
function printprintMetinisPajamuDydis() {
    metinisPajamos = atlyginimas * 12;
    console.log( "met. pajamos: ", metinisPajamos);
}
printprintMetinisPajamuDydis()


//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
let salis = "Latvija";
let miestas = "Ryga";
let adresas = "Barsuko 13";
let pastoKodas = "LT-5033";
// B) sukurti f-ja "printAddressData()",
function printAddressData() {
    console.log( salis, miestas, adresas, pastoKodas)
}
//kuri atspausdina i konsole visus siuos kintamuosius
printAddressData();


// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta
//pvz: printTekstas( "Jokubo istorijos");
function printTekstas(tekstas) {
    console.log( tekstas );
}
printTekstas ("sveiki atvyke!");
printTekstas ("gal kazko pietums");


// susikuriam funkcija, prie 5 uzduoties: UZSIRASYTI I SASIUVIN  I
function suma( x , y ) {
    let s = x + y;
    console.log("suma", s);

}
 //sukuriam kintamaji kuris egziztuoja tik sioje erdveje tarp{}

//toliau funkcijos paleidimas...
suma(100, 2); 99
suma(200, 150); //taip galima prirasyti daugiau uzduociu


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja staciojo trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)    saknis(  x*x + y*y) ir is visko istraukti sakti (js Math.sqrt())

function pitagoroTeorema( x , y ) {
    let a = Math.sqrt( x * x + y * y);
    console.log("Pitagoro teorema=", a);
}
pitagoroTeorema(10, 20); //cia paduodu reiksmes

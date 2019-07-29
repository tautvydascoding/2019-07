console.log("labas");


// ========js best practice & common mistakes (~2h)


// -------- --Array / Masyvai  Methods (~2h)--------------------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
let tekstas = names.toString(); //pagamins viena teksta is masyvo duomenu
console.log(   tekstas  );   //testuojam

//jungimas su skirtuku
tekstas = names.join(" :: ");
console.log(tekstas);
// arba trumpesnis budas:
console.log(  names.join(" ; ")   );

//persirasyti i sasiuvini.......................
// komanda "push" sukuria nauja stalciu deda i masyva  gala:
names.push( "hobis keliones" );
console.log("po push:", names);

// komanda trynimas
names.pop(); //istrina paskutini elementa.
console.log( "po pop:", names );

// komnata "unshift" ideda elemmenta i masyvo prieki:
names.unshift(" vyras"); // ideda i masyvo prieki
console.log(  "po unshift:", names);

// komanda "shift"
names.shift(); //pasalinti pati pirmaji stalciu, tiklsiau nulini (0)

delete names[2]; //stalciu pvz 2 palieka, bet istrina jo turini.

// komanda "slice" - daro kopijas, bet neissaugo; issaugojimui reikia kartu kurti nauja kintamaji (pvz:let kopija)
let kopija1 = names.slice(2, 4); //ji daro kopija nuo 2 iki 4.
let kopija2 = names.slice(4); //ji daro kopija nuo 4 iki galo.
let kopija3 = names.slice(0); //ji daro kopija nuo 0 iki galo.
let kopija4 = names.slice( -2); //ji daro kopija nuo priespaskutinio iki galo.


let negeraKopija = names;   //negera kopija

console.log( "kopija slice (2,4): ", kopija1 );

// komnada "splice" - iterpimas:
//          1 - nuo kurio, 0 - kiek istrinti, kiti - ka iterpti.
names.splice(1,0,             "Aplanke graikija", "Aplanke Indija");
console.log ("splice (1,0,...): ", names);

// komnada "splice" - istrinti ir iterpti:
//          1 - nuo kurio, 0 - kiek istrinti, kiti - ka iterpti.
names.splice(2,3,             "Aplanke graikija", "Aplanke Indija");
console.log ("splice (2,3,...): ", names);

names.splice(2,2,             "Kaunas", "alytus");
console.log ("splice (2,3,...): ", names);






// UZDUOTIS
// pa'googlinti "javascript array Methods":  https://www.w3schools.com/js/js_array_methods.asp
// ismeginti visas komandas/ metodus
// metodas - jau esama js f-ja, kuria suprogramavo js kalbos kurejai

// metodai:
// .shift()
// .length
// .join()
// .pop()
// .slice()
// ...
// pvz    names.shift("Tomas");

// =========================================================
// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];


// 1. i masyvo gala ideti elmenta "butelis vandens"
keliautojas.push( "butelis vandens" );
console.log("po push:", keliautojas);
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas.unshift(" ziebtuvelis");
console.log(  "po unshift:", keliautojas);
// 3. istrinti 3-cia elmenta
keliautojas.splice(2,1); //nuo antro istrinam viena elementa/stalciu.
console.log ("splice (3panaikinamas): " , keliautojas);

// keliautojas[3] = null; //istrina turini, stalciaus nesunaikina;
// arba
// delete keliautojas[3];

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0"
//(kiekvienas stalcius turi but lygus "0");
let masyvas = [];
for (var i = 0; i < 50; i++) {
    masyvas[i] = 0;
}
console.log(masyvas);
// dirbans su masyvais ir for ciklais - tai isirasyti i sasiuvini



// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;



// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
for (var i = 0; i < masyvas.length; i++) {
    masyvas[i] = 3;
}
console.log(masyvas);


// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========

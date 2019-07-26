console.log("labas");
// ========js best practice & common mistakes (~2h)


// -------- --Array / Masyvai  Methods (~2h)--------------------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);

// pagamins ilga tekstas is masyvo duomenu
let tekstas = names.toString();
console.log(  tekstas  );  // test

// jungimas su skirtuku
tekstas  = names.join(" :: ");
console.log(  tekstas );
// arba
console.log(   names.join(" ; ")       );

names.push( "hobis keliones" ); // ideda i masyvo gala
console.log( "po push:",    names );

names.pop();  // istriname paskutinta stalciu
console.log( "po pop:",    names );

names.unshift("vyras");   // ideda i masyvo prieki
console.log( "po unshift:",    names );

names.shift(); // istrynimas is priekio nulinta stalciu

delete names[2];  // istrina stalciau TIK turini


let kopija = names.slice(2, 4); // kopija nuo 2 iki 4
let kopija2 = names.slice( 4); // kopija nuo 4 iki galo
let kopija3 = names.slice( 0); // kopija nuo 0 iki galo
let kopija4 = names.slice( -2); // kopija nuo priespaskitinto iki galo

let negeraKopija = names;   // negera kopija
console.log(  "kopija slice(2,4) : ",  kopija );

// iterpimas
//          1- nuo kurio   0- kiek istrinti   kiti- ka iterpti
names.splice(1, 0,       "Aplanke Graikija", "Aplanke Indija");
// trinti
//          2- nuo kurio   3- kiek istrinti
names.splice(2, 3);
console.log(  " splice(2,3 ) ",  names );

// sukeisti = istrinti ir iterpti
//          2- nuo kurio   2- kiek istrinti
names.splice(2, 2, "KAUNAS", "ALYTUS");
console.log(  " splice(2,2,...) ",  names );


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
keliautojas.push(  "butelis vandens" );
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas.unshift( "ziebtuvelis" );
// 3. istrinti 3-cia elmenta
keliautojas.splice(2, 1); // nuo 2 istrinti 1
// arba
keliautojas[3] = null;
// arba
delete keliautojas[3];

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR
//ir uzpildyti visa skaiciais "0"
//  (kiekvienas stalcius turi but lygus "0");
let masyvas = [];
for (var i = 0; i < 50; i++) {
    masyvas[i] = 0;
}
console.log( masyvas);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
for (var i = 0; i < masyvas.length; i++) {
    i++;
    masyvas[i] = 3;
}
console.log( "[1, 3, ...]",   masyvas );
 // ARBA
// for (var i = 1; i < masyvas.length; i = i + 2) {
//     masyvas[i] = 3;
// }

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========

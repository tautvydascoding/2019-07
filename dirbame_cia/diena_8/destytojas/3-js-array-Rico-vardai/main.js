console.log("labas");
console.log("labas");

// =================taisyklingas Array copy  =================
var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
  ieskomiZmones = [2, 16, 17, 18, 19, 25];


var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico"
// (surasti pirmaji; sunkes- surasti visus riko)
for (var i = 0; i < names.length; i++) {
    // ar stalciuje yra zodis "Rico" ?
    if ( names[i]  == "Rico") {
        console.log( "Rico numeris: ",  i    );
        break;  // break - nutraukia (viena) FOR arba While cikla
        // return; // kaip break - nutrauks cikla
        // continue;  // persoka viena iteracija
    }
}

// 1B) papildyti ^: jeigu tokio vardo neranda,
// isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
let arRadauVarda = false; // pradzioje nerades

for (var i = 0; i < names.length; i++) {
    // ar stalciuje yra zodis "Rico" ?
    if ( names[i]  == "Rico") {
        arRadauVarda = true;  // radau varda
        console.log( "Rico numeris: ",  i    );
        break;  // break - nutraukia (viena) FOR arba While cikla
    }
}
// jeigu neradom vardo
if (  !arRadauVarda  ) { // ar cia netiesa?
    console.log("Nepavyko rasti...Bandykite kita zodi");
}
if (   arRadauVarda == false ) {
    console.log("Nepavyko rasti...Bandykite kita zodi");
}

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi ,
//  ji suranda jo vieta masyve (stalciaus numeri)
// ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)
function getVardoNumeris(  ieskomasTekstas ) {
    for (var i = 0; i < names.length; i++) {
        // ar stalciuje yra zodis "Rico" ?
        if ( names[i]  == ieskomasTekstas) {
            return i;
        }
    }
    return "neradau";
}
let nrR = getVardoNumeris(  "Rico" );
let nrT = getVardoNumeris(  "TOmas" );
console.log(  "Rico numeris", nrR);
console.log(  "Tomas numeris", nrT);

// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// 3.1 rasti vardo numeri
// 3.2 turint numeri - jus zinote ir pavarde
let nrF = getVardoNumeris(  "Freida" );
console.log(   "Freidos pavarde:",   lastNames[nrF]   );


// 4) rasti visu zmoniu vardu "Rico" pavardes
for (var i = 0; i < names.length; i++) {
    if (names[i] == "Rico") {
        console.log(   "Rico pavarde:",   lastNames[i]   );
    }
}
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus



// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }

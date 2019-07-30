
// =================taisyklingas Array copy  =================
// var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy taisyklingesnė versija
// var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
for(let i = 0; i < names.length; i++){
    // ar stalciuje yra zodis "Rico"?
    if(names[i] === "Rico"){
        console.log("Rico numeris yra: ", i); // suradom visus "Rico";
        break; // jis nutraukia ciklą, kai randa pirmąjį rezultatą ir mūsų atsakymas yra pirmoji "Rico" reikšmė
        //return; cikle return veikia kaip break, lygiai taip pat nutrauks ciklą
        // continue; // peršoka viena iteraciją
        // console.log("labas"); // nežiūrės šito kodo, nes su continue peršokam šitą kodo eilutę
    }
}

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
let arRadauVarda = false; // sitas kintamasis padeda suvokti ar mes pasiekeme savo tiksla
for(let i = 0; i < names.length; i++){
    // ar stalciuje yra zodis "----Rico"?
    if(names[i] === "-Rico"){
        arRadauVarda = true; // sekmes atveju pakeiciam is false i true, jeigu randa varda
        console.log("Rico numeris yra: ", i);
        break; // jeigu nera break ir dar apacioje parasai else tada jeigu net ir rado kazkada ta reiksme, bet jis ja pamirs
    }
}
// jeigu neradom vardo
if(arRadauVarda == false){
    console.log("Nepavyko rasti...Bandykite kita zodi");
}
/* // Klausiu arRadauvarda yra tiesa, jeigu parašome !arRadauVarda, tai klausiu arRadauVardas yra netiesa
if(arRadauVarda ){
    console.log("Nepavyko rasti...Bandykite kita zodi");
}
*/

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)
//reikia ciklo ir po to if ir gauta numeri grazinti su return

function getVardoNumeris(ieskomasTekstas){
    for(let i = 0; i < names.length; i++){
        if(names[i] == ieskomasTekstas){
            // console.log("Ieškomo vardo stalčius yra: ", i);
            return i; // mums grazina stalciu, kuriame yra musu ieskoma reikme
        }
    }
    return "neradau"; // arb null; // taip parasom jei nenorim atsakymo undefines ir
}
let nrR = getVardoNumeris("Rico"); // ats 25
let nrT = getVardoNumeris("Tomas"); // ats null arba "neradau", nes tokio vardo sarase nera
console.log(nrR, nrT);


// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
for(let i = 0; i < names.length; i++){
    if(names[i] == "Freida"){
        console.log("Freida vardas yra stalciuje numeris: ", i);
    }
}
let pilnasVardas = names[37] + " " + lastNames[37];
console.log(pilnasVardas);

// logiškesnis variantas:
// let nrF = getVardoNumeris("Freida");
// console.log("Freida pavarde yra: ", lastNames[37]);


// 4) rasti visu zmoniu vardu "Rico" pavardes
for(let i = 0; i < names.length; i++){
    if(names[i] == "Rico"){
        console.log("Rico pavarde", lastNames[i]); 
    }
}

// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus
// parasyti cikla, kuris pagal zmoniu numerius suranda tuos zmones is kitu dvieju masyvu.

for(let i = 0; i < ieskomiZmones.length; i++){
    console.log("Kviečiamų žmonių sąrašo numeris: ", ieskomiZmones[i]); // gavom visus numerius
    // atsispaudinam vardus ir pavardes
    let a = ieskomiZmones[i];
    console.log(lastNames[a], names[a]);
}
// Paaiškinimas: kai susikuriam for cikla, pasiimam masyva ieskomiZmones, atsispausdinam jo reiksmes.
// Tada atspausdinta masyva priskiriam kintamajam, kad lengvai galetume naudoti gautas reiksmes is ciklo
// Ir tada pasirenkam masyvus, kuriuose norime, kad atspausdintu pavardes ir vardus butent tu masyvo stalciu, kuriu skaiciai sutampa su ieskomiZmones stalciu reiksmemis. 


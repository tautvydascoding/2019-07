
// =================taisyklingas Array copy  =================
var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

console.log("indexOf \"Rico\":", names.indexOf("Rico"));

let arRadauVarda = false;

for(var i = 0; i < names.length; i++) {
    if(names[i] == "Rico") {
        arRadauVarda = true;
        console.log(i, "Rico");
        break; // kad gautume tik pirma rico, o ne visus esancius array'iuje dar vietoj break; galim det return; kaip alternatyva
    }

}

if(arRadauVarda == false) { // dar galima trumpiau: (!arRadauVarda)
    console.log("try another name");
}

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)


// Mano versija

function getStalciausNumeris(array, x) {
    let ats = array.indexOf(x);
    return ats;
}

console.log(getStalciausNumeris(lastNames, "Nolan"));

// Versija, kurios buvo tikimasi su for ciklu ir if

function getVardoNumeris(vardas) {
    for(var i = 0; i < names.length; i++) {
        if(names[i] == vardas) {
            let ats = i;
            return ats;

        }
    }
    return "neradau"; // arba return null;
}

console.log(getVardoNumeris("Carmelo"));

// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

console.log("Freidos nr:", getVardoNumeris("Freida"));

let freida = lastNames[37];

// 4) rasti visu zmoniu vardu "Rico" pavardes

for(var i = 0; i < names.length; i++) {
    if(names[i] == "Rico") {
        console.log("Rico pavarde:", lastNames[i]);
    }
}



// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
for(var i = 0; i < ieskomiZmones.length; i++) {
    console.log(ieskomiZmones[i]);
}
// B) isvesti ju pavardes ir vardus

for(var i = 0; i < ieskomiZmones.length; i++) {
    let a = ieskomiZmones[i];
    console.log(lastNames[a], names[a]);
}

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }

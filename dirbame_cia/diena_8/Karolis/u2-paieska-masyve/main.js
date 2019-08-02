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
// var n = names.indexOf("Rico");
// var m = names.indexOf("Rico",n+1)
// var b = names.indexOf("Rico",m+1)
// console.log(n);
// console.log(m);
// console.log(b);
var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
for ( i = 0; i < names.length ; i++){
    if (names[i] == "Rico"){
        var a = names.indexOf("Rico");
    }if (true){
        var b = names.indexOf("Rico", a+1);
    }if (true) {
            var c = names.indexOf("Rico", b+1);
        }else{
            console.log("tokio vardo nera");
        }
    }
console.log(a);
console.log(b);
console.log(c);
//-----------------------------------------------------------------------------------------------
//                                KITAS SPRENDIMAS
//------------------------------------------------------------------------------------------------
let arRadau = false;
for (var y = 0 ; y < names.length ; y++){
    if (names[y] == "Rico"){
        arRadau = true;
        console.log("rico nr",y);
        continue;
    }
}
if (arRadau == false){
    console.log("blogas vardas");
}

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)
// function getStalciausNumeris(x){
//     return names.IndexOf(x);

// console.log(getStalciausNumeris("Rico"));
        // uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
console.log("----------------------------------");
var q = names.indexOf("Freida");
console.log(q);
var w = lastNames[q];
console.log(w);
console.log("----------------------------------");
// 4) rasti visu zmoniu vardu "Rico" pavardes
for ( i = 0; i < names.length ; i++){
    if (names[i] == "Rico"){
        var a = names.indexOf("Rico");
        var b = names[a];
        var c = lastNames[a];
    }if (true){
        var d = names.indexOf("Rico", a+1);
        var e = lastNames[d];
        var f = names[d];
    }if (true) {
            var g = names.indexOf("Rico", d+1);
            var h = lastNames[g];
            var j = names[g];
        }else{
            console.log("tokio vardo nera");
        }
    }
    console.log(b,c);
    console.log(f,e);
    console.log(j,h);

console.log("--------------------------------------");
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];

// A) atspausdinti visus numerius

// B) isvesti ju pavardes ir vardus
for ( z = 0 ; z < ieskomiZmones.length ; z++){
    nr = ieskomiZmones[z];
    console.log("Vardas ir pavarde",names[nr],lastNames[nr]);
}




// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }

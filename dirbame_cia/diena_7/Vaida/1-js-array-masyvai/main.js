console.log("labas");

let zmogus = ["Tomas", "Lojis", 20, true];
// pakeitimas
zmogus[1] = "Koris";

console.log( zmogus[1] );
console.log( zmogus[2] );
console.log( zmogus[3] );

// paemimas
let amzius = zmogus[2];
console.log( "amzius yra: " + amzius);

// pridejimas
zmogus[4] = "1998-08-08";
console.log( zmogus[4] );
//
let ilgis = zmogus.length;
console.log( "masyvo ilgis: " + ilgis);

document.querySelector("body").innerHTML += ilgis;

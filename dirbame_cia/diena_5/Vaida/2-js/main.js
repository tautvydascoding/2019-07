
// failo virsuje sukurti kintamuosius:
// valandinisIkainis = 10
// valandinis Povilas = 160
// valandinis Antanas = 80
// valandinis Tomas = 100
// imones pajamos = 20000
// kitos imones islaidos = 3400


let uzValanda = 10;
let valPovilo = 160;
let valAntano = 80
let valTomo =100;
let imonesPajamos = 20000;
let kitosIslaidos = 3400;


// apskaiciuoja darbuotojo atlyginimas
function getDarbuotojoAtlyginimas(ikainis, val) {
    let atlyginimas = ikainis * val;
    return atlyginimas;
}

let P = getDarbuotojoAtlyginimas(uzValanda, valPovilo );
let A = getDarbuotojoAtlyginimas(uzValanda, valAntano );
let T = getDarbuotojoAtlyginimas(uzValanda, valTomo );

console.log( "povilo alga", P);
console.log( "povilo alga", A);
console.log( "povilo alga", T);
let visiAtlyginimai = P + A + T;
console.log("visi atlyginimai", visiAtlyginimai);

// IMONES PELNAS
function getPelnas(imonesPajamos, kitosIslaidos, visiAtlyginimai) {
    return (imonesPajamos - kitosIslaidos - visiAtlyginimai);

}
console.log( "grynas pelnas:", getPelnas(imonesPajamos, kitosIslaidos, visiAtlyginimai) );

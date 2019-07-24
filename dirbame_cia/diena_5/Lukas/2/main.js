
let valandinisIkainis = 10;
let povilas = 160;
let antanas = 80;
let jokubas = 100;
let imonesPajamos = 20000;
let kitosIslaidos = 3400;

function getDarbuotojoAtlyginimas(ikainis, valandos) {
    let atlygis = ikainis * valandos;
    return atlygis;
}

let poviloAtlyginimas = getDarbuotojoAtlyginimas(valandinisIkainis, povilas);
let antanoAtlyginimas = getDarbuotojoAtlyginimas(valandinisIkainis, antanas);
let jokuboAtlyginimas = getDarbuotojoAtlyginimas(valandinisIkainis, jokubas);

function getImonesPelnas(x, y, z) {
    let bendrosIslaidos = kitosIslaidos + x + y + z;
    let pelnas = imonesPajamos - bendrosIslaidos;
    return pelnas;
}

console.log(getImonesPelnas(poviloAtlyginimas, antanoAtlyginimas, jokuboAtlyginimas));

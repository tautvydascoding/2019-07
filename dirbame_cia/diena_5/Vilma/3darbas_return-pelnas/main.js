console.log("labas");
let valIkainis = 10;
let valPovilas = 160;
let valAntanas = 80;
let valTomas = 100;

let imonesPajamos = 20000;
let ktIslaidos= 3400;

function darbuotojoAtlyginimas (x,y) {
    let at = x*y;
    return at;
}

let P = darbuotojoAtlyginimas (valIkainis, valPovilas);
let A = darbuotojoAtlyginimas (valIkainis, valAntanas);
let T = darbuotojoAtlyginimas (valIkainis, valTomas);

function visuDarbuotojuAtlyginimas (){
let    visi = P + A + T;
return visi;
}
let visas = visuDarbuotojuAtlyginimas ();

function imonesPelnas () {
    let pelnas = imonesPajamos - visas - ktIslaidos;
    return pelnas;
}

let viso = imonesPelnas ();

console.log("Pelnas yra:", viso);

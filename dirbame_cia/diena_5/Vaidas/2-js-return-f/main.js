console.log("labas");

// funkcijos RETURN
// failo virsuje sukurti kintamuosius:

let uzValanda = 10;
let valPovilas = 160;
let valAntanas = 80;
let valTomas = 100;
let kitosIslaidos = 3400;
let imonesPajamos = 20000;

// apskaiciuoja darbuotojo atlyginima

function getDarbuotojoAtlyginimas(ikainis, val){
    let atlyginimas = ikainis * val;
    return atlyginimas;
}
let P = getDarbuotojoAtlyginimas(uzValanda, valPovilas);
let A = getDarbuotojoAtlyginimas(uzValanda, valAntanas);
let T = getDarbuotojoAtlyginimas(uzValanda, valTomas);
console.log( "povilo alga:", P);
console.log( "antano alga:", A);
console.log( "tomo alga:", T);

// reikia tokiau suskaiciuoti visu darbuotoju atlyginimus
// paprastai rasom pasitikrinimui
let visiAtlyginimai = P + A + T;
console.log("visi atlyginimai:", visiAtlyginimai);

// imones pelnas

function getImonesPelnas(pajamos, islaidos, atlyginimai){
    let ats = pajamos - islaidos - atlyginimai;
    return ats;
}
let grynasPelnas = getImonesPelnas(imonesPajamos, kitosIslaidos, visiAtlyginimai)
console.log("imones pelnas:", grynasPelnas);

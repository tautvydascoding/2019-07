console.log("labas");


// UZDUOTIS - f-jos return
// failo virusje sukurti kintamuosius:
// valandinisIkainis = 10
// valandos Povilas = 160
// valandos Antanas = 80
// valandos Tomas   = 100
// imones pajamos = 20000
// kitos imones islaidos = 3400
//  UZDUOTIS: sukurti  f-jas:
//  darbuotojoAtlyginimas
//  visuDarbuotojuAtlyginimai (neprivaloma f-ja)
//  imonesPelnas
//  isvesti pelna i console ar ekrana

let uzValanda = 10;
let valandosPovilo = 160;
let valandosAntano = 80;
let valnadosTomo = 100;
let imonesPajamos = 20000;
let kitosIslaido = 3400;

// apskaiciuoja darbuotojo atlyginima
function getDarbuotojoAtlyginimas( ikainis, val) {
    let atlyginimas = ikainis * val;
    return atlyginimas;
}

 let P = getDarbuotojoAtlyginimas(uzValanda, valandosPovilo);  // 1600
 let A = getDarbuotojoAtlyginimas(uzValanda,  valandosAntano); //
 let T = getDarbuotojoAtlyginimas(uzValanda,  valnadosTomo);   //
 console.log( "povilo alga P ", P);
 console.log( "povilo alga A ", A);
 console.log( "povilo alga T ", T);
 let visiAtlyginimai = P + A + T;
 console.log( "visi Atlyginimai ", visiAtlyginimai);

 function getImonesPelnas(pajamos, islaidos, atlyginimai) {
     let ats = pajamos - islaidos - atlyginimai;
     return ats;
 }
// 
let grynasPelnas = getImonesPelnas(imonesPajamos, kitosIslaido, visiAtlyginimai);
console.log(    "grynas pelnas:",  grynasPelnas  );

//console.log(" Labas ");
//var valsk = document.querySelector("valsk").innerHTML = "";
//var valik = document.querySelector("valik").innerHTML = "";
//var pajamos = document.querySelector("pajamos").innerHTML = "";
//var darbatlyginimas =
//var pelnas =;
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
//PAGAL SAVE (HARDCORE)
//-------------------------------------------------------------------
//pagal destytoja
let uzValanda = 10;
let kitosIslaidos = 3400;
let valPovilas = 160;
let valAntanas = 80;
let valTomas = 100;
let imonesPajamos = 20000;

function getDarbuotojoAtlyginimas(ikainis, val){
    let atl = ikainis * val;
    console.log("atl",atl);
    return atl;
}
let p = getDarbuotojoAtlyginimas(uzValanda,valPovilas);
let a = getDarbuotojoAtlyginimas(uzValanda,valAntanas);
let t = getDarbuotojoAtlyginimas(uzValanda,valTomas);

let visiAtlyginimai = p+a+t;

function getImonesPelnas(x){
    let profit = x - p - a - t - kitosIslaidos;
    console.log("p",profit);
    return profit;
}
getImonesPelnas(imonesPajamos);

// 1 funkcija apskaiciuoja darbuotoju atlyginimus
// 2 funkcija apskaiciuoja imones pajamas

let uzVal = 10;
let valTomas = 160;
let valTadas = 80;
let valMatas = 100;

let imonesPajamos = 20000;
let kitosIslaidos = 3400;


function darbuotojoAtlyginimoSkaiciuokle(ikainis, val){
    let atlyginimas = ikainis * val;
    return atlyginimas;
}
let tomas = darbuotojoAtlyginimoSkaiciuokle(uzVal, valTomas);
let tadas = darbuotojoAtlyginimoSkaiciuokle(uzVal, valTadas);
let matas = darbuotojoAtlyginimoSkaiciuokle(uzVal, valMatas);
console.log("Tomo menesinis atlyginimas: ", tomas);
console.log("Tado menesinis atlyginimas: ", tadas);
console.log("Mato menesinis atlyginimas: ", matas);

function darbuotojuAtlyginimai(){
    let atlyginimuSuma = tomas + tadas + matas;
    return atlyginimuSuma;
}
console.log("Bendra darbuotoju atlyginimu suma: ", darbuotojuAtlyginimai());


function imonesPelnas(){
    let galutinisPelnas = imonesPajamos - kitosIslaidos - darbuotojuAtlyginimai();
    return galutinisPelnas;
}
console.log("Bendras įmones pelnas: ", imonesPelnas());
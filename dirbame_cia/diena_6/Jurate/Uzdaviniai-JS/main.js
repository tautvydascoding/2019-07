/*
// UZDUOTIS 1
sukurti ivedimo lauka, naudojantis pvz 3,
kur reikes ivesti apskritimo spinduli ,,R".
Kai paspaudziamas mygtukas - paskaiciuojamas apskritimo plotas: Plotas = pi * R*R
pi = Math.PI;

 // UZDUOTIS 2
sukurti ivedimo 2 laukus, naudojantis pvz 3,
kur reikes ivesti staciakampio auksti ir ploti.
Kai paspaudziamas mygtukas - paskaiciuojamas staciakampio plotas:
Plotas  = x * y;
*/

//----- UZDUOTIS 1 -----//
function skaiciuojamR() {
    let spindulys = document.querySelector('input[name=r]').value;
    let plotas = Math.PI * (spindulys * spindulys);
    document.querySelector('h3').innerHTML = "Apskritimo plotis lygus: " + plotas;
}


//----- UZDUOTIS 2 -----//

function skaiciuojamPlota(){
    let auktis = document.querySelector('input[name=x]').value;
    let plotis = document.querySelector('input[name=y]').value;
    let bendrasPlotas = auktis * plotis;
    document.querySelector('h4').innerHTML = "Staciakampio plotas: " + bendrasPlotas;
}


// Su komanda addEventListener
document.querySelector('.testas').addEventListener('click', function testuojam(){
    let pirmas = document.querySelector('input[name=a]').value;
    let antras = document.querySelector('input[name=b]').value;
    let suma = pirmas * antras;
    document.querySelector('h6').innerHTML = "Staciakampio plotas: " + suma;
});

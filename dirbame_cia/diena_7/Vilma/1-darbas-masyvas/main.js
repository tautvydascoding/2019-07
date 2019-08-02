console.log("labas");

let prekiautojai = ["Senukai", "Maxima", "Ermitažas",
                    "Iki", "Rimi", "Lidl", "Norfos mažmena",
                ];
console.log(prekiautojai);
prekiautojai[0] = prekiautojai[0] + "ir Co";

document.querySelector('h1').innerHTML=prekiautojai;

let pirmas = prekiautojai[1];
let antras = prekiautojai[2];

prekiautojai[2]=pirmas;
prekiautojai[1]=antras;

document.querySelector('h1').innerHTML+=prekiautojai;
//sukeitimas vietomis
//let isimenam2= prekiautojai[2];
//prekiautojai[2]=prekiautojai[3];
//prekiautojai[3]=isimenam2



function sukeistiMasyvoElementus(x,y) {
    let isimenamx = prekiautojai[x];
    prekiautojai[x] = prekiautojai[y];
    prekiautojai[y] = isimenamx;

    }

sukeistiMasyvoElementus (4,2);
document.querySelector("h1").innerHTML=prekiautojai;

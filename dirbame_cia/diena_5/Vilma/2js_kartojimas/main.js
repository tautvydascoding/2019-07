

function printKaina (x) {
    console.log( "Kaina yra:" ,x);
}

printKaina (15.99);
printKaina (99);
printKaina (105.99);
printKaina (1.99);

function pazymiuVidurkis (a,b,c,d,e) {
    vid = (a + b + c + d + e)/5;
    console.log( "Vidurkis yra:", vid);
}

pazymiuVidurkis (4,5,8,6,9);
pazymiuVidurkis (5,10,8,6,5);

function getVardas () {
let vardas = "Tomas";
    return vardas;
}

let v = getVardas ();

console.log(v);
document.querySelector('h1').innerHTML= v;


function getVardasPavarde() {
    let vardas = "Tomas";
    let pavarde = "Tomauskas";
let   pilnas = vardas + " " + pavarde;
    return pilnas;
}

document.querySelector('body').innerHTML+= getVardasPavarde();


function getPelnas() {
    let pajamos = 12500;
    let islaidos = 7500;
    let pelnas = pajamos - islaidos;
    return pelnas;
}

x= getPelnas();
document.querySelector('h1').innerHTML= x;


function getPelnas1 (pajamos, nuostoliai) {
    let pelnas = pajamos - nuostoliai;
    return pelnas;
}

pp = getPelnas1 (9000, 7500);
document.querySelector('h2').innerHTML= pp;

function pazymiuVidurkis1 (a,b,c,d,e) {
    vid = (a + b + c + d + e)/5;
    return vid;
}

let pV1 = pazymiuVidurkis1 (5,8,6,8,10);
document.querySelector("h3").innerHTML= "Pazymių vidurkis:"+pV1;

function getH1ElementoAukstis() {
var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
var aukstis1 = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
    // aukscio nustatymas:
    // document.querySelector("h1").style.height = "500px"; 		//
    //document.querySelector("h1").innerHTML=
    return aukstis;
}
console.log(getH1ElementoAukstis());

// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

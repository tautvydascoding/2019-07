
let vardas = "Vilma";
let pavarde = "Dzimidavičienė";
let amzius = 41;
let atlyginimas = 1400;


console.log( vardas, pavarde);
console.log(    typeof(vardas)  );
console.log(    typeof(amzius)  );


function printVardasPavardeAmzius () {
    console.log( vardas, pavarde, amzius);
}

function printMetinisPajamuDydis () {
    let metinis = atlyginimas*12;
    console.log( metinis);
}

let salis = "Lietuva";
let miestas = "Kaunas";
let adresas = "Vytauto pr. 24";
let pastoKodas = "LT - 4512";

function printAddressData() {
console.log( salis, miestas, adresas, pastoKodas);
}

let x = "Jokūbo istorijos"
function printTekstas (x) {
    console.log( x);
}

// f-jos paleidimas
printVardasPavardeAmzius () ;
printMetinisPajamuDydis () ;
printAddressData();
printTekstas (x);



function pitagoroTeorema(a,b) {
    c = Math.sqrt(a*a+b*b);
    console.log( "Krastines ilgis", c);
}

pitagoroTeorema ( 3,4);
pitagoroTeorema ( 5,12);
pitagoroTeorema ( 9,5);

let antPopieriaus = 890;
let PSD = 9;
let VSD = 24;


function atlyginimasIRankas () {
    atl=antPopieriaus - antPopieriaus*0.09 - antPopieriaus/2*0.24;
    console.log("I rankas gausi: ", atl);
}


atlyginimasIRankas ();

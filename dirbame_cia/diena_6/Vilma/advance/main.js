console.log("labas333");
// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%


let alga = 680;
let kiekMenesiu = 10*12;
let algosPokytis = alga*0.01;

function poDesimtMetu(){
    for (var i = 0; i < kiekMenesiu; i++) {
        alga = alga + algosPokytis;
    }
console.log("Po desimt metu alga bus:", alga);}


poDesimtMetu ();

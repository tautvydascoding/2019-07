console.log("labas");


// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja

function printDuomenys() {
    var vardas = "Tomas";
    console.log( vardas );
}
printDuomenys();


//   UZDUOTIS  B
//  dabar, pabandykite po f-ja (uz jos ribu) i konsole atspausdinti kintamaji "vardas"
//  console.log( vardas) ;
// NOTE: gausite klaida ""is not defined""

function printDuomenys() {
    var vardas = "Tomas";

}

// console.log( vardas );



//================local && global=========
// var x = "x -viesas ";   // global
// function testLocalVar() {
//    var y = "y -vietinis ";  // local
//    z = "z -viesas";        // global // nereiketu taip daryti
//    console.log("x", x);
//    console.log("y", y);
//    console.log("z", z);
// }


var x = "x -viesas ";   // global
function testLocalVar() {
   var y = "y -vietinis ";  // local
   z = "z -viesas";        // global // nereiketu taip daryti
   console.log("x", x);
   console.log("y", y);
   console.log("z", z);
}

testLocalVar();

// testLocalVar();
// console.log("x", x);
// console.log("z", z);
// console.log("y", y);  // error - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"

testLocalVar();
console.log("x", x);
console.log("z", z);
// console.log("y", y);  // error - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"

//------
 // UZDUOTIS // UZDUOTIS
 // A) sukurti kintamaji var katinas = "juodas"
 // B) sukurti f-ja
 // C) sukurti f-jos viduje kintamaji var katinas = "baltas"
 // D) atspauzdinti abu f-jos viduje
 // E) atspauzdinti  uz f-jos

 var katinas = "juodas";   //global

 function test2() {
     var katinas = "baltas";  // local
    console.log("1 katinas:", katinas);
    console.log("2 this.katinas - f-jos viduje: ",  this.katinas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 }
 test2();

 console.log("3 katinas:", katinas);



//==========================

 var xx = 10; // global

 function isvesti( xx ) {  // xx - (local) naujas issigalvotas LAIKINAS  kintamasis
     xx = 20;  // local
     console.log( "1. xx:", xx);
     console.log( "2. this.xx:",   this.xx);
 }
 isvesti(999);
 console.log( "3. xx:", xx);





 //======================
 var vardas = "Jonas";   // global - kintamasis
 function myName ( vardas ) { //  vardas - local kintamasis
     console.log( " vardas" + vardas);
     console.log("this.vardas - f-jos viduje: ",  this.vardas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 }
 myName("PETRAS");




//======================TEKSTO ISVEDIMAS===============


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

function printAntraste(x) {
    console.log( x );
}

document.querySelector("body").innerHTML += "BMW pinga, nes daugeja" + "<br>";
document.querySelector("body").innerHTML += "Greik pageres orai" + "<br>";
document.querySelector("body").innerHTML += "Vasaros vis salteja";

//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)"
//  kuri atspausdina i DOM-a (ekrana) "<p>" + x + "</p>" (paduota teksta tarp "p")

// klaida kai parasiau let x = "reiksme", nes jau esu priskyrus let x
x = "reiksme";
function printStraipsnis(x) {
    document.querySelector("body").innerHTML += "<p>" + x + "</p>";
}

printStraipsnis( "test straipnis...");

//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",

printAntraste( " Vasaros vis silteja <br>");
printStraipsnis("lorem 1");

printAntraste( " Greit atsils <br>");
printStraipsnis("lorem 2");

printAntraste( " Ruduo dar toli <br>");
printStraipsnis("lorem 3");




//=======================================

var elNumber = document.getElementById("number");
function setupclickHanlers() {
        var elTracks = document.getElementByClassName("track");
        function setupclickHanlers() {
            elNumber.innerHTML = i;
        }
        for (var i = 0; l < elTracks.length; i < l; i++) {
            elTracks[i].addEventlistener("click", clickHanler);
            console.log(i);
        }

}
setupclickHanlers();

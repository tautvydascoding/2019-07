console.log("labas");
//==============TEORIJA ++ / -- ==========
    var x = 10;
    x = x + 3;  // x = 13
    x += 3;     // tas pats kad x = x + 3;
    x++;       //  tas pats kas x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 30 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)
for (i=1;i<=30;i++){
    console.log("azuolas",i);
}

// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML
for ( i = 0 ; i<=30 ; i++){
    let x = "<h3>azuolas</h3>";
    document.querySelector("h3").innerHTML += x;}
// // 1.2 UZDUOTIS
// (HTML faile susikurti <article> elementa)
// isvesti 40 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba
for (i=1;i<=40;i++){
    var z = "<h2>azuolas</h2>";
     document.querySelector("article").innerHTML += z;
}
// 1.3 UZDUOTIS
// (HTML faile susikurti <ul> elementa)
// isvesti 6 kartu zodi "<li> elementas 1 </li> " i <ul> elementa su  innerHTML pagalba
for ( i = 1 ; i <= 6 ; i++){
    var q = "<li> elementas 1 </li>";
    document.querySelector("ul").innerHTML += q;
}
// 1.4 UZDUOTIS
// (HTML faile susikurti <header> elementa)
// isvesti 10 kartu zodi "<p> Aprasymas x </p> " i <header> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 0 iki 9 atsisrandantis automatiskai)
for ( i = 1 ; i <= 10 ; i++){
    var c = "<p>aprasymas" + i + "</p>"  ;
    document.querySelector("header").innerHTML += c;
}
// 1.5 UZDUOTIS
// (HTML faile susikurti <div> elementa)
// isvesti 6 kartu zodi "<li> elementas X </li> " i <div> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 1 iki 6 atsisrandasntis automatiskai)
for ( i = 1 ; i <= 6 ; i++){
    var w = "<li>elementas" + i + "</li>";
    document.querySelector('div').innerHTML += w;
}
// 2.0 UZDUOTIS
// sukurti f-ja "print()", kuri  i browser langa atspausdins  teksta "atspausdintas su f-ja" (panaudojanti document.write arba innerHTML)
function print(){
    var r = "spausdinu is f-jos";
    document.querySelector("h4").innerHTML += r;
}
print()
// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)
function printx(x){
    document.querySelector("h5").innerHTML += x;
}
printx("asdfggh")
// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
for ( i = 0 ; i < 5 ; i++){
    printx("beascbafb  ")
}
// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)




// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%
function ateity(){
    let kiekMenesiu = 10 * 12;
    let menAtlyginimas = 680 ;
    let algosPokytis = 1 ;
        for ( i = 1 ; i <= 10 ; i++){
            var x = menAtlyginimas * (algosPokytis / 100);
            var y = menAtlyginimas + x;
            var z = y + x
            console.log(x,y,z);

        }

}
ateity()
// =========ateit=====SCSS============================

//========= local/global or Frog/Garden =======

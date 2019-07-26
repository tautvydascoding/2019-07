// 1 UZDUOTIS
/*
let zmg = ["Tomas", 21, "Kaunas", 820, true];
//
// patikrinti ar zmogus vedes :
// A) naudoti if  ir "=="
// jeigu vedes - isvesti teksta : "Sveikinu - gausite paskola"
// jeigu nevedes - isvesti teksta: "Deja, jums paskola nepriklauso"
if(zmg == true){
    console.log("Sveikinu - gausite paskola");
} else {
    console.log("Deja, jums paskola nepriklauso");
}

let ats = (zmg != true) ? "Sveikinu - gausite paskola" : "Deja, jums paskola nepriklauso";
console.log(ats);
*/
// B) sunkesnis: patikrinima uz uzrasyti trumpesniu budu be "=="
// C) sunkesnis: perfrazuoti tikrinima
//  ir ji uzrasyti su neiginiu: "!="

// 3 UZDUOTIS

// 1) // sukurti kintamuosius:
 // arRodyti =   (galimi variantai true/ false)
 // vartotojoTipas =   "admin";
 // userName = "Tomas";
let arRodyti = true;
let vartotojoTipas = "admin";
let userName = "Tomas";

if(arRodyti == true && vartotojoTipas == "admin"){
    document.querySelector("body").innerHTML += "<h6>Labas Tomai</h6>";
    document.querySelector("body").innerHTML += '<img src="portfolio-01.jpg" alt="background">';
} else {
    console.log("Sveiki atvyke");
}

// 1.2) parasyti "if", kuris pagal kintamojo reiksme "arRodyti"  :  jeigu "true" isvestu - "Labas Tomai"
// jeigu "false" isvestu : "Sveiki atvykia!"

//  1.3 Jeigu vartotojo tipas 'admin': isvesti ne tik pasisveikinima, bet ir koki nors paveiksliuka

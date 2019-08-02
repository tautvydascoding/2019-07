// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
/*
	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva

	// 2 pervadinti pirma stalciu pvz + "ir KO"
 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
	// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
    let prekiautojai = []; // empty array
    prekiautojai = ["UAB Senukai", "UAB Ermitažas", "UAB Depo"];
    prekiautojai.push("UAB Maxima"); // adding value in array at the end
    prekiautojai[0] = "UAB RIMI";
    let masyvoIlgis = prekiautojai.length;
    // console.log(prekiautojai);
    console.log(masyvoIlgis);

    
    //Sukeičiam 1 ir 2 masyvo elementus vietomis tik ilgesnis variantas
    let a = prekiautojai[1], b = prekiautojai[2];
    prekiautojai[2] = a;
    prekiautojai[1] = b;
    console.log(prekiautojai); // Rezultatas: ["UAB RIMI", "UAB Depo", "UAB Ermitažas", "UAB Maxima"];

    // Arba dėstytojo pasiūlytas variantas ir trumpesnis, tik su vienu kintamuoju
    let a = prekiautojai[1];
    prekiautojai[1] = prekiautojai[2];
    prekiautojai[2] = a;
    console.log(prekiautojai);

    // 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
    // Sukuriam funkciją
    function sukeiciam(nr1, nr2){
        let a = prekiautojai[nr1];
        prekiautojai[nr1] = prekiautojai[nr2];
        prekiautojai[nr2] = a;
    }
    sukeiciam(1, 2);// 1 ir 2 susikeicia depo su ermitazu
    sukeiciam(0, 4);// 0 ir 4 susikeicia rimi su maxima
    console.log("po sukeitimo 2-3 ir 0-4", prekiautojai);

*/
// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"

let automobilis = ["Audi A3", 15000, 8000];
console.log(automobilis);
automobilis[2] = 8100;
automobilis[1] = 10000;
console.log(automobilis);
automobilis.push("Savininkas - Tomas");
console.log(automobilis);
automobilis.push("Automobilio metai \"2008\"");
console.log(automobilis);

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

// Mano variantas bet per ilgas
document.querySelector("body").innerHTML += "<article></article>";
document.querySelector("article").innerHTML += "<h2></h2>";
document.querySelector("article").innerHTML += "<div></div>";
document.querySelector("article").innerHTML += "<span></span>";
document.querySelector("article").innerHTML += "<button></button>";
/*
document.querySelector("h2").innerHTML = automobilis[0];
document.querySelector("div").innerHTML = automobilis[3];
document.querySelector("span").innerHTML = automobilis[4] + " Rida: " + automobilis[1] + " km";
document.querySelector("button").innerHTML = automobilis[2] + "$";
*/

// Trumpesnis variantas ir teisingesnis variantas:
document.querySelector("body").innerHTML += "<article></article>";
document.querySelector("article").innerHTML += "<h2>" + automobilis[0] + "</h2>";
document.querySelector("article").innerHTML += "<div>" + automobilis[3] + "</div>";
document.querySelector("article").innerHTML += "<span>" + automobilis[4] + " Rida: " + automobilis[1] + " km" + "</span>";
document.querySelector("article").innerHTML += "<button>" + automobilis[2] + "$" + "</button>";

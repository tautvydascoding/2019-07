

// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"


let masina = [];
masina[0] = "Audi";
masina[1] = 300000;
masina[2] = 2000;
console.log( masina );

// 2. padidinti kaina: 100
masina[2] = masina[2] + 100;
// arba += prideda prie savaites
// masina[2] += 100

console.log( masina );
// 3. padidinti rida: -50000
masina[1] = masina[1]  - 50000;

console.log( masina );

// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
masina[3] = "Tomas"
console.log( "po pakeitimo", masina );

// 5. i masyva ideti papildomus duomenis: masinos metai "2004"

masina[4] = 2004;
console.log( "po pakeitimo", masina );




// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

//=============bootstrap---sm-md-lg-xl (30-60m)==========


document.querySelector("body").innerHTML += "<artical></artical>";
document.querySelector("artical").innerHTML += "<h2>" + masina[0] + "</h2>";
		// arba
		// let tekstas = "<h2>" + masina[0] + "</h2>";
		// document.querySelector("artical").innerHTML += tekstas;

//      <div> savininko vardas: ...</div>
document.querySelector("artical").innerHTML += "<div>savininko vardas:" + masina[3] + "</div>";
 // <span> masinos metai: ...  Rida: ...</span>
document.querySelector("artical").innerHTML += "<span>masinos metai:" + masina[1] + "</span><br>";
  // i mygtuka ideti: masinos kaina ....
document.querySelector("artical").innerHTML += "<button>masinos kaina:" + masina[2] + "</button>";


// isvedimas su ciklu
//
// for (var i = 0; i < masina.length; i++) {
//     masina[i]
// }


for (var i = 0; i < 5; i++) {
    console.log( masina[i] );
}

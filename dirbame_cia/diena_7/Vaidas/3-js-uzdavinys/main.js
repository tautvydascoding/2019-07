console.log("labas");


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

            // masina  rida    kaina
// let auto = ["audi", 100000, 5000];
// arba:
let auto = [];
auto[0] = "Audi";
auto[1] = 100000;
auto[2] = 5000;

console.log(auto);

auto[1] += -5000;
auto[2] += 100;
auto[3] = "Tomas";
console.log("po pakeitimo: ", auto);
auto[4] = 2004;
console.log("po pakeitimo: ", auto);

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML

// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

//                      si svarbi vieta (body) ir si (article)
document.querySelector ('body').innerHTML += "<article>  </article>";
// arba sudeda viska
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

document.querySelector ('article').innerHTML    += "<h2>" + auto[0] + "</h2>";
// arba taip:
let tekstas = "<h2>" + auto[0] + "</h2>";
document.querySelector ('article').innerHTML    += tekstas;

document.querySelector ('article').innerHTML    += "<div>" + auto[3] + "</div>";
// arba taip:
let savVardas = "<div>" + "Savininko vardas: " + auto[3] + "</div>";
document.querySelector ('article').innerHTML    += savVardas;

let metaiRida = "<span>" + "Masinos metai: " + auto[4] + ", Rida:  " + auto[1] +"</span>";
document.querySelector ('article').innerHTML    += metaiRida;

tekstas = "<button>" + auto[2] + "</button>" ;
document.querySelector ('article').innerHTML    += tekstas;



// --------------isvedimas su ciklu---------
// svarbu:

for (var i = 0; i < 5; i++) {
    console.log(   auto[i]   );
}



//=============bootstrap---sm-md-lg-xl (30-60m)==========

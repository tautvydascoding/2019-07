console.log("labas");

// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
// masyvo sukurimas
//          name     rida    kaina
let auto = ["audi", 250000, 3000];
// arba
auto = [ ];

auto[0] = "audi"; // vardas
auto[1] = 250000; // rida
auto[2] = 3000;   // kaina

// 1. isvesti masyvo duomenis
console.log(   auto );
// 2. padidinti kaina: 100
auto[2] += 100;
// 3. padidinti rida: -50000
auto[1] += -50000;
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
auto[3] = "Tomas";
// 4.1 atspausdinti visus pakeistus masyvo duomenis
console.log( "po pakeitimo: ", auto );
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
auto[4] = "2004";
console.log( "po pakeitimo: ", auto );

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

document.querySelector('body').innerHTML    += "<article> </article>";
let tekstas = "<h2>" + auto[0] + "</h2>";
document.querySelector('article').innerHTML += tekstas;

  tekstas = "<div> savininko vardas: " + auto[3] + "</div>";
document.querySelector('article').innerHTML += tekstas;

  tekstas = "<span> masinos metai:" + auto[4] + " Rida:" + auto[1] + "</span>  <br>";
document.querySelector('article').innerHTML += tekstas;

  tekstas = "<button>" + auto[2] + "</button>";
document.querySelector('article').innerHTML += tekstas;

// ----------------isvedimas su ciklu-----------

for (var i = 0; i < 5; i++) {
    console.log(   auto[i]    );
}

//=============bootstrap---sm-md-lg-xl (30-60m)==========

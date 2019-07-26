// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina

let masina = ['Honda', 4000, 250000];



// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
masina[1] += 100;
// 3. padidinti rida: -50000
masina[2] += -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
masina.unshift("Tomas"); // i prieki

// 4.1 atspausdinti visus pakeistus masyvo duomenis

document.querySelector("body").innerHTML += masina;
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"

masina.push("Masinos metai: 2004"); // i gala


// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

document.querySelector("body").innerHTML += "<article></article>";
document.querySelector("article").innerHTML += "<h2>" + masina[1] + "</h2>";
document.querySelector("article").innerHTML += "<div>" + masina[0] + "</div>";
document.querySelector("article").innerHTML += "<span>" + masina[4] + " Rida " + masina[3] + "</span>";
document.querySelector("article").innerHTML += '<button type="submit">' + masina[2] + '</button>'

// isvedimas su ciklu

for(var i = 0; i < masina.length; i++) {
    console.log(masina[i]);
}

//=============bootstrap---sm-md-lg-xl (30-60m)==========

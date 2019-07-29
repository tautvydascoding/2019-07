console.log("labas");
let masina1 = ["Audi", 80000, 1000];
masina1[2] = masina1[2]+100;
masina1[1] = masina1[1]-50000;
masina1[3] = "Tomas";
masina1[4] = "1998m.";


// document.querySelector('div').innerHTML = "Savininko vardas: " +  masina1[3];
// document.querySelector('span').innerHTML = "metai " + masina1[4];
// document.querySelector('span').innerHTML += " Rida: " + masina1[1];
// document.querySelector('button').innerHTML = masina1[2] +" Eur";


document.querySelector("body").innerHTML += "<article></article>";
document.querySelector("article").innerHTML += "<h2>"+"Pavadinimas: " + masina1[0] +"</h2>";
document.querySelector("article").innerHTML += "<div>"+"Savininko vardas: " +  masina1[3]+" Rida: " + masina1[1] +"</div>";
document.querySelector("article").innerHTML += "<span>"+"metai " + masina1[4]+ "</span>";
document.querySelector("article").innerHTML += "<button>"+masina1[2] +" Eur"+"</button>";

// ----------isvedimas su ciklu-----

for (var i = 0; i < masina1.length; i++) {
    console.log(masina1[i])
}

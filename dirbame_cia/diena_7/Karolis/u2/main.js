console.log("labas");
// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
let masina =["bmw",200000,50000]; //pradinis masyvas
// 1. isvesti masyvo duomenis
// isvestis apacioje
// 2. padidinti kaina: 100
masina[2] += 100;   // didinam kaina
// 3. padidinti rida: -50000
masina[1] -= 50000; // keiciam rida
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
masina[3] = "Karolis"; // pridedam savininkko varda
// 4.1 atspausdinti visus pakeistus masyvo duomenis

// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
masina [4] = "2010"; //pridedam masinos metus
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
document.querySelector("body").innerHTML += "<article> </article>";                                  //susikuriu pagrindini "article" elementa
document.querySelector("article").innerHTML += "<h2>Pavadinimas: " + masina[0] + "</h2>";           //"article" elementui sukuriu "h2" vaika, su turiniu
// let text = "<h2>" + "Pavadinimas: " + masina[0] + "</h2>" ; //>>>>>>>>>>>>>>>>>>>>galima pasidaryti kintamaji naudoti butent ji
document.querySelector("article").innerHTML += text;
document.querySelector("article").innerHTML += "<div>Savininko vardas: " + masina [3] + "</div>";    //"article" elementui sukuriu "div" vaika, su turiniu
document.querySelector("article").innerHTML += "<span> Masinos metas: " + masina[4] + "</span><br>" ;                                                                                                       //"article" elementui sukuriu "span" vaika, su turiniuv
document.querySelector("article").innerHTML += "<span> Rida: " + masina[1] + "</span><br>";              //"article" elementui sukuriu "span" vaika, su turiniu
document.querySelector("article").innerHTML += '<button type "button">' + masina[2] + '</button>';   //"article" elementui sukuriu "button" vaika, su turiniu


console.log(masina);

console.log("labas");


// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)
$("h1").eq(0).text("Antraste nr: 1");
$("h1").eq(1).text("Antraste nr: 2");
//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "
$("section h2 ").text("Pakeista antraste");
// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta
let liElementas = $("li.reklama").text();
console.log("li reklama: " + liElementas);
// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus
let liVisasTekstas = $("li").text();
console.log(liVisasTekstas);
//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)


//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)

// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
// B. pirmam "li" elementui uzddeti dar viena klase: "active"

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'

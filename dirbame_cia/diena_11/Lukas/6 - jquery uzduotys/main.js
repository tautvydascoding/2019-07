
// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)

$("h1").eq(0).text("Antraste Nr. 1");
$("h1").eq(1).text("Antraste Nr. 2");

//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "

$("section h2").text("Pakeista antraste");

// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta

let a = $("li.reklama").text();
console.log(a);

// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus

let b = $("li").text();
console.log(b);

//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)

$("li").eq(2).html("About");
$("li").eq(1).html("Gallery");

//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)

$("li.reklama").attr("style", "color: red");

// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
// B. pirmam "li" elementui uzddeti dar viena klase: "active"

$("li").attr("class", "nav-item");
$("li").eq(0).addClass("active");

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
$("input").attr("value", "xxx");
//  ivesti vardas: 'Tomas'
$("input").eq(0).val("Tomas");
//  ivesti pastas: 'a@a.lt'
$("input").eq(1).val("a@a.lt");

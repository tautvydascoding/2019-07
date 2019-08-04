//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementus "about" ir "gallery" (naujant jQuery)
let galerija = $('li.rek');
$('li.active').before(galerija);

//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)
$('li.rek').attr('style', 'color: red')

// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
$('li').attr('class', 'nav-item');
// B. pirmam "li" elementui uzddeti dar viena klase: "active"
$('li').eq(0).addClass('active');

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'
$('input').eq(0).attr('value', 'Tomas');
$('input').eq(1).attr('value', 'a@a.lt');

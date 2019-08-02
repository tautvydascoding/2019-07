// $('h1').hide(2000);

// jQuery teorija//

// Galima paimti duomenis su:
//.text()
//.html()
//.val() - paima iš input value laukelio reikšmę
/*
var otext = $("h1").text();  // return visu h1 turini
console.log("h1 otext: " + otext);

var oHTML = $("h1").html(); // paima html visus atributus
//console.log("h1 oHTML: " + oHTML);
*/
let manoH1 = $('h1').text();
let manoH2 = $('h1').html();


console.log(manoH1); // ats: Hello World
console.log(manoH2); // ats: Hello <b>World</b>
// console.log(manoInput); // ats: reiksme

// $('body').click(function(){
//     let manoInput = $('input').val();
//     console.log(manoInput);
// });

// Kitas budas, bet paspaudus enter, esc klavišus nesuveiks, nes neišeina iš įvedimo lauko ekrano
$('input').on('blur', function(){
    let manoInput = $('input').val();
    console.log(manoInput);
});


/*
//---- get only first h1 text------
var elm = $("h1").eq(0);   // eq -  return the jquery selector
var elm2 = $("h1")[0];     // [0] - return the DOM element
console.log("eq(): " ,  elm);
console.log("[0]: " ,  elm2);

console.log( elm.text());         // WORKS !!!
// console.log( elm2[0].text();    // ERROR: [0] return the DOM element
// NOTE: $(...)[0] will return the DOM element. If you want to use a jquery function, it has to be on a jquery selector object. If you want to get the jquery selector for a specific index, use the eq function:
// NOTE:  eq( -2 ) - nuo galo antras
*/

// Paimti trečią h2 elementą/paskutinį h2 su visu tekstu
let h2Tekstas = $('h2')[2]; // Paimam DOM elementą ir neveiks jquery komandos, veiks tik DOM komandos
console.log(h2Tekstas);

let h2TekstasQ = $('h2').eq(2).text(); // jquery objektas ir veikia papildomos komandos
console.log(h2TekstasQ);


// Teksto paėmimas ir įdėjimas
$("h1").text("<li>Naujas h1 tekstas 1.1</li>"); // ats: Legit tekstas
$('h1').html("<li>Naujas h1 tekstas 1.1</li>"); // ats: Sąrašo elementas, visiškai pakeičia kas buvo viduje, neina šalia prirašyti teksto


// Pakeisti vidurinį h2
let vidurinisH2 = $('h2')[2].innerHTML = "Pakeistas tekstas";
console.log(vidurinisH2);

let kitasBudas = $('h2').eq(1).text("Keičiam tekstą");
console.log(kitasBudas);

document.querySelectorAll('h2')[0].innerHTML = "Dar kartą keičiam tekstą"; // Vanila JavaScript būdas

//=============SET text/ HTML / VAL=========
//.text(...)
//.html(...)
//.val(...)

//$("h1").text("Naujas h1 tekstas 1.1");
//console.log("h1 otext: " + otext);

// kaip innerHTML=   (!!!  istrina visa vidu)
// $("h1").html("<button> Registruotis </button>");
//console.log("h1 <button>: " + oHTML);

// Form'oje ivesti teksta uz vartotoja "val()"
//$("form input").val("Type Username here");

// $('form input').attr('value', 'Tomas');
// $('form input').attr('class', 'bg-info');


//----------------- jQuery CLASS --------------------//
// addClass()     Adds one or more classes to the selected elements
// addClass( [function( index, curentClass)] ) - // NOTE: receives the INDEX position of the element in the set and the existing class name(s) as ARGUMENTS. Within the function, this refers to the current element in the set
// removeClass() - Removes one or more classes from the selected elements
// toggleClass() - Toggles between adding/removing classes from the selected elements
// hasClass("protected")
// is('.pretty.awesome')

/*
$("h1").addClass(" bg-info ");
$( "p" ).removeClass( "myClass noClass" ).addClass( "yourClass" );
$("h1").toggleClass('change_me newClass');
// Galima naudoti tik if
$('h2').hasClass(" mt-2 "); // tikrinu ar 'h2' elementas turi klase 'mt-2'
$('h2').is(' .mt-2');   // tikrinu ar 'h2' elementas turi klase 'mt-2'

$("button").click(function(){
   $("h1, h2, p").addClass(" bg-info ");  // you can select multiple elements, when adding classes
   $("div").addClass(" w-50 bg-info ");
});
*/

//Given an unordered list with two <li> elements, this example adds the class "item-0" to the first <li> and "item-1" to the second.
// $( "ul li" ).addClass(function( index ) {
//    return "item-" + index;
// });

// $('h2').eq(0).addClass('bg-info');

// jQuery moka keisti ir pridėti atributus
$('h2').attr("class", "bg-primary");


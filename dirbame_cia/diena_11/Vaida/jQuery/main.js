console.log("labas");


// $('h1').hide(2000);




let manoH1 = $('h1').text();
let manoH1html = $('h1').html();
let manoInput = $('input').val();


console.log( manoH1 );
console.log( manoH1html);
console.log( manoInput );

// $('body').click(function(event) {
//     let manoInput = $('input').val();
//     console.log( manoInput );
//
// });


//ant ko paspaudus t.t input
$('input').on('blur', function(event) {
    let manoInput = $('input').val();       //viduej ivedimo laukai
    console.log( manoInput );

});


// paimti paskutini h2 elemento tekstas
let h2Tekstas = $('h2')[2];     //      DOM elementas
console.log( h2Tekstas );

let q = $('h2').eq(2).text();
console.log( q );

// -------------------

$("h1").html(" <li> Naujas </li> ");
$("h1").html(" Naujas");


//-----------------

// paimti antra h2 elemento tekstas
// let h2T = $('h2')[1].text( "Pakeistas" );
//arba
// document.querySelectorAll('h2')[1]


//-------------klases


$("h1").addClass(" bg-info ");
$( "p" ).removeClass( "myClass noClass" ).addClass( "yourClass" );
$("h1").toggleClass('change_me newClass');
$('h2').hasClass(" mt-2 "); // tikrinu ar 'h2' elementas turi klase 'mt-2'
$('h2').is(' .mt-2');   // tikrinu ar 'h2' elementas turi klase 'mt-2'

$("button").click(function(){
   $("h1, h2, p").addClass(" bg-info ");  // you can select multiple elements, when adding classes
   $("div").addClass(" w-50 bg-info ");
});

//Given an unordered list with two <li> elements, this example adds the class "item-0" to the first <li> and "item-1" to the second.
$( "ul li" ).addClass(function( index ) {
   return "item-" + index;
});

// index suskaiciuoja visus elementus


$('h2').attr("width", "200px");
$('h2').attr("class", "bg-info");
$('h2').attr("preke", "1");





//---- get only first h1 text------
// var elm = $("h1").eq(0);   // eq -  return the jquery selector
// var elm2 = $("h1")[0];     // [0] - return the DOM element
// console.log("eq(): " ,  elm);
// console.log("[0]: " ,  elm2);
//
// console.log( elm.text());         // WORKS !!!
// console.log( elm2[0].text();    // ERROR: [0] return the DOM element
// NOTE: $(...)[0] will return the DOM element. If you want to use a jquery function, it has to be on a jquery selector object. If you want to get the jquery selector for a specific index, use the eq function:
// NOTE:  eq( -2 ) - nuo galo antras



//----------------------------

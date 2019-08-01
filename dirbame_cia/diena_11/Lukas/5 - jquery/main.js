
//=============get data=========
//.text()
//.html()
//.val()

var otext = $("h1").text();  // return visu h1 turini
console.log("h1 otext: " + otext);

var oHTML = $("h1").html();
console.log("h1 oHTML: " + oHTML);

let manoInput = $("input").val();
console.log("manoInput:", manoInput);

// $("body").click(function(event) {
//     let manoInput = $("input").val();
//     console.log(manoInput);
// });

$("input").on('blur', function(event) {
    let manoInput = $("input").val();
    console.log(manoInput);
});

//---- get only first h1 text------
var elm = $("h1").eq(0);   // eq -  return the jquery selector
var elm2 = $("h1")[0];     // [0] - return the DOM element
console.log("eq(): " ,  elm);
console.log("[0]: " ,  elm2);

// paimti paskuntinta h2 elementa

let h2 = $("h2")[2]; // DOM element nuo [] tampa nebe jquery ir negali naudot jquery komandu
console.log(h2);

let h2two = $('h2').eq(2).text(); // jQuery objektas, galima deti dar komandu pvz .text();
console.log(h2two);

$("h2").eq(1).text("New Text");

console.log( elm.text());         // WORKS !!!
// console.log( elm2[0].text();    // ERROR: [0] return the DOM element
// NOTE: $(...)[0] will return the DOM element. If you want to use a jquery function, it has to be on a jquery selector object. If you want to get the jquery selector for a specific index, use the eq function:
// NOTE:  eq( -2 ) - nuo galo antras




//=============SET text/ HTML / VAL=========
//.text(...)
//.html(...)
//.val(...)

//$("h1").text("Naujas h1 tekstas 1.1");
//console.log("h1 otext: " + otext);

// kaip innerHTML=   (!!!  istrina visa vidu)
$("h1").html("<button> Registruotis </button>");
//console.log("h1 <button>: " + oHTML);

// Form'oje ivesti teksta uz vartotoja "val()"
//$("form input").val("Type Username here");

// $('form input').attr('value', 'Tomas');
// $('form input').attr('class', 'bg-info');
//---JS ---

// document.getElementsByTagName("input")[0].value = "Tomas";
// document.getElementsByTagName("input")[0].setAttribute('value','Tomas');
// document.myform.vardas.value = 'Tomas';
//                 <form name="myform">
//                         <input class="aa" name="vardas" type="text" value="" >
//                     </form>

console.log("labas");



$('h1').hide(3000);

//=============teksto paėmimas=========
//.text()
//.html()
//.val()

let manoH1 = $("h1").text();  // return visu h1 turini
console.log("h1 otext: " + manoH1);

var manoH1HTML = $("h1").html();
console.log("h1 oHTML: " + manoH1HTML);

let manoInput = $('input').val();
console.log("h1 ivedimo laukas: " +manoInput);

$('body').click(function(event) {
    let manoInput = $('input').val();
    console.log( manoInput);
});

$('input').on('blur', function(event) {
    let manoInput = $('input').val();
    console.log( manoInput);
});


//paimti paskutinio h2 teksta


let h2tekstas = $("h2")[2];   // [0] - DOM elementas
var elm2 = $("h2").eq(2);     //  eq -  jquery selektorius
console.log("h2 tekstas " ,  h2tekstas);
console.log("[0]: " ,  elm2);
//
// console.log( elm.text());         // WORKS !!!
// console.log( elm2[0].text();    // ERROR: [0] return the DOM element
// NOTE: $(...)[0] will return the DOM element. If you want to use a jquery function, it has to be on a jquery selector object. If you want to get the jquery selector for a specific index, use the eq function:
// NOTE:  eq( -2 ) - nuo galo antras


//=============teksto idejimas========
//.text(...)
//.html(...)
//.val(...)

$("h1").text("Naujas h1 tekstas 1.1");
console.log("h1 otext: " + h2tekstas);

$("h2").html("<li> Naujas </li>");
//jquery budas
let naujash2 = $("h2").eq(1).text("Pats naujausias");
// arba js
document.querySelectorAll ('h2')[3].innerHTML = "Pakeistas su INNER";








// kaip innerHTML=   (!!!  istrina visa vidu)
//$("h1").html("<button> Registruotis </button>");
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

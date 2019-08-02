console.log("labas");

//10 d. uzduotyse.....

$('h1').hide(2000);


let manoH1      = $('h1').text();
let manoH1html  = $('h1').html();

console.log(manoH1);
console.log(manoH1html);

let manoInput   = $('input').val();

console.log(manoInput);

$('body').click(function(event) {
    let manoInput   = $('input').val();
    console.log(manoInput);
});

$('input').on('blur', function(event) {
    let manoInput   = $('input').val();
    console.log(manoInput);
});

// paimti paskutini h2 elementa:
let h2Tekstas = $('h2')[2];  //DOM elemetas / egzistuojantis ekrane
console.log( h2Tekstas );

let h2TekstasQ = $('h2').eq(2);  //jQuery Objektas (veikia papildomos komandos)
console.log( h2TekstasQ );
//=======================


//teksto paemimas, idejimas..........

$("h2").text(" <li> Naujas  </li>"); //jei i skliaustelius dedi  <li>  - veikia...

$("h2").html("<li>Naujas</li>");
$("h2").html("Naujas");


$("h2").eq(1).text("Pakeistas");
//arba js ....
document.querySelectorAll('h2')[1].innerHTML = "Pakeistas su Inner";







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
//---JS ---

// document.getElementsByTagName("input")[0].value = "Tomas";
// document.getElementsByTagName("input")[0].setAttribute('value','Tomas');
// document.myform.vardas.value = 'Tomas';
//                 <form name="myform">
//                         <input class="aa" name="vardas" type="text" value="" >
//                     </form>

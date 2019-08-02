console.log("labas");


// $('h1').hide(2000);

let manoH1     = $('h1').text();
let manoH1html = $('h1').html();

console.log(  manoH1  );
console.log(  manoH1html  );

// $('body').click(function(event) {
//     let manoInput = $('input').val();
//     console.log(  manoInput  );
// });
$('input').on('blur', function(event) {
    let manoInput = $('input').val();
    console.log(  manoInput  );
});

// paimti paskutinio h2 elemento teksta
let h2Tekstas = $('h2')[2];  // DOM elementas
console.log(  h2Tekstas  );

let h2TekstasQ = $('h2').eq(2).text();  // jQuery Objektas (veikia papildomos komandos)
console.log(  h2TekstasQ  );
// ================

// $("h1").text(" <li>Naujas h1 tekstas 1.1 </li> ");
$("h1").html(" <li>Naujas  </li> ");
$("h1").html(" Naujas  ");

// jquery
$('h2').eq(1).text("Pakeistas");
// arba  js
document.querySelectorAll('h2')[1].innerHTML = "Pakeists su Inner";

$('h2').attr("width", "200px");
$('h2').attr("class", "bg-info");
$('h2').attr("preke", "1");
//

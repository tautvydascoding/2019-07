// jQuery aprašome taip:
// $('h1');
// Selectors: header, .class, #id

// Vanila JS aprašome taip
// document.querySelector('h1');

// $('h1').hide(3000);

/* $('p').click(function(){
    // action goes here!
});
*/

// click veiksmas

// surandu visus h2, o this suranda tik tą ant kurio paspaudžiau
$('h2').click(function(){
    $(this).hide(2000); // this čia reiškia, kad paspaudus būtent ant to elemento jis ir išnyktų, o ne visi h2
    // console.log("paspaustas");
});

$("h3").click(function(){
    $('h4').fadeToggle(2000);
});

// keičia css stiliu su jquery
$('h4').css('background-color', 'green');

// javascript objekte apsirasom css stiliu ir tada paduodam jquery, kuris mums uzdeda
let manoCSS = {
    'color'     : 'blue',
    'font-size' : '30px',
    'border'    : '1px solid black'
};

// paspaudus ant h2 pritaikom h1 musu sukurta stiliaus objekta
$('h2').click(function(){
    $('h1').css(manoCSS);
});

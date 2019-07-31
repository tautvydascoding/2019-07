console.log("labas");





$("h2").click(function(event) {
    $(this).hide(3000);
    //console.log("h2 paspaustas");
});
$('h3').click(function(event) {
    $('h4').fadeToggle('2000');
/* Act on the event */
});


document.querySelector('h4').style.backgroundColor = "red";
$('h3').css('background-color', "green");




$('h1').click(function(event) {
    let manoCSS = {
        "color"     : "blue",
        "font-size" : "50px",
        "border"    : "dotted 2px green"
    };
    $(this).css( manoCSS);
});

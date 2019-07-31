console.log("labas");




// surandu visus h2
$('h2').click(function(event) {
    $(this).hide(3000);   //this suveiks tik ant tok kurio paspaudus
    // console.log("h2 paspaustas");
});


$('h3').click(function(event) {

    $('h4').fadeToggle(2000);

});


    // norint keist stiliu
    document.querySelector('h4').style.backgroundColor = "red";

// arba



    $('h4').css('background-color', "green");


    $('h2').click(function( event) {
    let manoCSS = {             //jeigu kintamojo daugiau nenaudosiu, tada darau kaip lokalu
    "color": "blue",
    "font-size": "50px",
    "border": "solid 1px red"

    };

    $('h1').css( manoCSS );

});

// $("h1").hide(1000);

$("h2").click(function(event) {
    $(this).hide(2000); // reiketu spausti ant kiekvieno h2 atskirai
});

$("h3").click(function() {
    $('h4').fadeToggle(2000);
});

$("h4").css("background-color", "green");

let manoCSS = {
    "color": "blue",
    "font-size": "80px",
    "border": "1px solid red"
};

$("h2").click(function() {
    $("h1").css(manoCSS);
})

console.log("labas");
// $('h1').hide(3000);


$("h2").click(function(){
  $(this).hide();
});

$("h2").click(function(event) {
    $('h2').hide(3000);
    // console.log("h2 paspaustas");
});

$("h2").click(function(event) {
    // atiminti zodeli this - tai panaikins ta konkretu selektoriu
    $(this).hide(3000);
    // console.log("h2 paspaustas");
});


$("p").dblclick(function(){
  $(this).hide();
});


$("#p1").mouseenter(function(){
  alert("Paspausk cia!");
});

// padarom kad isnuyktu h4 ir vel tsirastu
$('h3').click(function(event) {
    $('h4').fadeToggle(2000);
});

document.querySelector('h4').style.backgroundColor = "red";
// arba
$('h4').css('background-color', "green")

let manoCSS = {
    "color"       : "blue",
    "font-size"   : "50px",
    "border"      : "solid 1 px red"
}
$('h3').css(manoCSS);



$('h2').click(function(event) {
    let manoCSS = {
        "color"       : "blue",
        "font-size"   : "50px",
        "border"      : "solid 1 px red"
    }
    $('h1').css(manoCSS);
})

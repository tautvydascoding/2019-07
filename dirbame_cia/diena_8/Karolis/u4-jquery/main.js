console.log("labas");

//jquery library
// $('h1')

//vanilla JavaScript
// document.querySelelctor('h2')  // suras pirma h2 elementa
// document.querySelelctorAll('h2')[2].innerHTML = *****    // suranda trecia h2 elementa

// $("h2").click(function(event){      nx cia to event??????
$("h2").click(function(){
    $(this).hide(1000);
    console.log("prapuolu");
});



let manoCss = {
    "color" : "blue" , "background-color" : "red" , "font-size" : "50px", "border" : "5px dotted black"
};
$('h1').css( manoCSS);

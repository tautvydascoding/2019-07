console.log("labas");

// jQuery
//  'header .fonas #logo'
// $('h1')
// // vanila js (paprastai)
// document.querySelector('h1')
// // surandam 3-cia <h2> elementa
// document.querySelectorAll('h2')[2].innerHTML = ...






$("h2").click(function(event) {
     $(this).hide(3000);
     // console.log("h2 paspaustas");
});

$('h3').click(function(event) {
    $('h4').fadeToggle(2000);
});

  document.querySelector('h4').style.backgroundColor = "red";
  $('h4').css('background-color', "green");


  $('h2').click(function(event) {
      let manoCSS = {
          "color"    : "blue",
          "font-size": "80px",
          "border"   : "solid 1px  red"
      };
      $('h1').css(  manoCSS   );

  });
//

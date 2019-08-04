// 1.1  sukurti:
$('body').prepend('<section><h1>Tekstas</h1></section>');

//1.2 patobulinti h1 -  ant h1 elemento uzdesime klases: " bg-info  mt-5 aukstis-200" (naudojant jQuery)
$('h1').addClass('bg-info mt-5 aukstis-200');
// pvz: <h1 class="bg-info mt-5 aukstis-200">  Tekstas </h1>

// 1.3  nuo h1 pasalinti mt-5 klase
$('h1').removeClass('mt-5');

// 1.4  paleisti komanda   toggleClass( 'aukstis-200')
$('h1').toggleClass('aukstis-200');
// 1.5  vel paleisti komanda   toggleClass( 'aukstis-200')
$('h1').toggleClass('aukstis-200');
// KAS pasikeite? 
// Pirmą kartą paleidus toggleClass( 'aukstis-200') atsirado display:none, antrą kartą vaizdas grįžo į ekraną


// 2. Patikrinti ar h1 turi klase 'bg-info': 
// jeigu NETURI  uzdeti klase "bg-success", jeigu TURI  uzdeti klase "bg-danger"
if($('h1').attr('bg-info') == true){
    $('h1').addClass('bg-danger');
} else {
    $('h1').addClass('bg-success');
}


// 3. Patikrinti ar 'section' turi klase 'aukstis-200':
// jeigu NETURI  uzdeti klase "aukstis-200"
// jeigu TURI  uzdeti klase "aukstis-500"
if($('section').attr('aukstis-200') == true){
    $('section').addClass('aukstis-500');
} else {
    $('section').addClass('aukstis-200');
}

// 1. su js  pakeisti 'header' H1 teksta i " Pakeistas su js"
document.querySelector('header h1').innerHTML = 'Pakeistas su JavaScript';
// 2. su jQury  pakeisti 'footer' H2 teksta i " Pakeistas su JQ"
$('footer h4').text('Pakeistas su jQuery');

// 3. su jQuery paimti  'footer' h1 tekta ir atspausdinti i console
let footerH1 = $('footer h1');
console.log(footerH1.text());

// UZDUOTYS
// 1. su jQury sukurti elementa 'section' su tekstu 'mano tekstas'
$('body').append('<section>Mano Tekstas</section>');
// 2. su jQury elementa 'section' ideti i HTML faila su jquery tarp 'header' ir 'footer'
let perkeliamSection = $('section');
$('header').after(perkeliamSection);


// UZDUOTYS
// 1. uzdeti klase 'bg-info' ant visu h4
$('h4').addClass('bg-info');

// 2. uzdeti klase bg-warning ant 'header'
$('header').addClass('bg-warning');

// 3. uzdeti atributa 'width=30%' ant 'header'
$('header').attr('width', '30%');
 
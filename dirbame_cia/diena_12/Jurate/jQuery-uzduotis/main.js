// UZDUOTIS
// 1.0 kaip perkelti klase 'h3' po 'h4'
let h3Elementas = $('h3');
$('h4').after(h3Elementas);

// 1.1 kaip perkelti klase 'reklama' virs 'section'
let klaseReklama = $('h2.rekl');
$('section').before(klaseReklama);

// 1.2 kaip perkelti 'h3' po 'div'
$('div').after(h3Elementas);

// 1.3 kaip perkelti 'h4' i  'nav' vidu
let h4Elementas = $('h4');
$('nav').prepend(h4Elementas);

// 1.4 kaip perkelti 'h5'  virs  'article'
let h5Elementas = $('h5');
$('section').after(h5Elementas);

// 1.5 kaip perkelti 'section'  po  'article'
let articleElementas = $('article');
$('section').before(articleElementas);
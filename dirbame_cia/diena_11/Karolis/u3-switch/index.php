

<?php
// PASIZIURETI KAS YRA PHP, js "Switch"

// SPALVOS
$color = "+";

switch ($color) {
    case 'white':
        echo "balta" . "<br>";
        break;
    case 'blue':
        echo "melyna" . "<br>";
        break;
    case 'green':
        echo "zalia" . "<br>";
        break;
    case 'teal':
        echo "turkio" . "<br>";
        break;

    default:                    //deti i apacia nes virsuj netikrins kitu salygu
        echo "spalva negalima" . "<br>";
        break;
}

$marke = "  bmw         ";
$sumazintiRaides = strtolower($marke);
$salinamTarpus = trim($marke); 
switch ($marke) {
    case 'bmw':
        echo "Susimastykite apie greiti ir vairavimo kultura";
        break;
    case 'audi':
        echo "Susimastykite apie variklio prieziura";
        break;
    case 'opel':
        echo "Susimastykite apie naujus priedus";
        break;

    default:
        echo "Nezinau tokios markes";
        break;
}
  // UZDUOTIS  "Switch"
 // paduoti varda ir Jeigu jis lygus:
 // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
 // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
 // "opel" - atspausdinti "Susimastykite apie naujus priedus"

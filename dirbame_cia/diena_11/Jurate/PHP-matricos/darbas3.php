<?php
   // UZDUOTIS  "Switch"
  // paduoti varda ir Jeigu jis lygus:
  // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
  // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
  // "opel" - atspausdinti "Susimastykite apie naujus priedus"

// Kas yra SWITCH? - galima prilyginti jungikliui, kuris leidžia nustatyti daug būsenų
// SWITCH IS CASE SENSITIVE!!!!

$spalva = ' WhITE ';
$sumazintosRaides = strtolower($spalva);
$pasalintiTarpusIrTab = trim($sumazintosRaides);
switch ($pasalintiTarpusIrTab) {
    case 'white':
        echo "Balta";
        break;
    case 'black':
        echo 'Juoda';
        break;
    case 'red':
        echo 'Raudona';
        break;
    default:
        echo 'Tokios spalvos mes nežinom';
        break;
}

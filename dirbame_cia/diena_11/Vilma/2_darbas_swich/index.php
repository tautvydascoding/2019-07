 <h2>Antraštė</h2>


<?php

$spalva = "    BLacK ";
$sumazintosRaides = strtolower($spalva);
$pasalintiTarpai = trim($sumazintosRaides);

switch ($pasalintiTarpai) {
    case 'white':
        echo "balta";
        break;
    case 'red':
        echo "raudona";
        break;
    case 'black':
        echo "juoda";
        break;
    case 'yellow':
        echo "geltona";
        break;
    case 'purple':
        echo "violetinė";
        break;

    default:
        echo "tokios spalvos nėra";
        break;
}


// UZDUOTIS  "Switch"
// paduoti varda ir Jeigu jis lygus:
// "audi" - atspausdinti "Susimastykite apie variklio prieziura"
// "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
// "opel" - atspausdinti "Susimastykite apie naujus priedus"
$vardas = "audi";

 ?>

  <!-- jei daugiau nieko nedarysi tai php failo neuždarinėji -->

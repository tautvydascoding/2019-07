
<h2> Mokomes Switch - ilgas if</h2>

<?php


$spalva = "RED";
$sumazintosRaides = strtolower($spalva);                    //sumazinom kintamojo raides
$pasalintiTarpaiTab = trim($sumazintosRaides);            //pasalina tarpus

switch ($pasalintiTarpaiTab) {
    case 'white':       //busena
        echo "balta";
        echo "balta";
        break;
    case 'black':
        echo "juoda";
        break;
    case 'red':
        echo "raudona";
        break;

    default:
    echo " tokios spalvos nezinome";
        break;
}




// UZDUOTIS  "Switch"
// paduoti varda ir Jeigu jis lygus:
// "audi" - atspausdinti "Susimastykite apie variklio prieziura"
// "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
// "opel" - atspausdinti "Susimastykite apie naujus priedus"

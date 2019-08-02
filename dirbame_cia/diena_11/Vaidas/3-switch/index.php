// PASIZIURETI KAS YRA PHP, js "Switch"

uzduotis ir 11 dienos.


  // UZDUOTIS  "Switch"
 // paduoti varda ir Jeigu jis lygus:
 // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
 // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
 // "opel" - atspausdinti "Susimastykite apie naujus priedus"

<h2>Mokomes Swich - ilgas if</h2>

<?php




$spalva = "ReD";                                //yra skirtumas ar didelise ar mazos raides...
$sumazintosRaides = strtolower($spalva);        // konvertuoja i mazas raides
$pasalintiTarpaiTab = trim($sumazintosRaides);  // pasalina visus taarpus ir TAB

switch ($pasalintiTarpaiTab) {
    case 'white':
            echo "balta";
        break;
    case 'black':
        echo "juoda";
        break;
    case 'red':
        echo "raudona";
        break;


    default:
        echo "tokios spalvos nera";
        break;
}

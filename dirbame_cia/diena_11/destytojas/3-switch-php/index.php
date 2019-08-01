<h2> Mokomes Switch - ilgas if  </h2>

<?php

$spalva = "     ReD     ";
$sumazintosRaides = strtolower($spalva);
$pasalintiTarpaiTab = trim($sumazintosRaides);

switch ($pasalintiTarpaiTab) {
    case 'white':
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
            echo "tokios spalvos mes nezinome";
        break;
}



//

<?php
include_once('classes.php');
$monika = new Zmogus("monce",155);
$tadas = new Zmogus("tadas", 185);
$kestas = new Zmogus("kestas",160);

// $monika->vardas = "monika";
// $monika->ugis = 150;
// $tadas->vardas = "tadas";
// $tadas->ugis = 170;
// $kestas->vardas = "vardas";
// $kestas->ugis = 180;
// echo $monika->vardas; //taip gaut norima objekto elementa (jei public)
// $monika->einu();  //taip iskvieciamos funkcijos esancios objektuose.
echo    $monika->getmanovardas();
 echo $monika->getmanougis();
// echo $monika->getManoVardas() . "<br>";
// echo $monika->getmanougis(). "<br>";;
// echo $tadas->getManoVardas(). "<br>";;
// echo $tadas->getmanougis(). "<br>";;
// echo $kestas->getManoVardas(). "<br>";;
// echo $kestas->getmanougis(). "<br>";;

//-------------------------------UZDUOTIS 3.2-----------------------------------




 ?>

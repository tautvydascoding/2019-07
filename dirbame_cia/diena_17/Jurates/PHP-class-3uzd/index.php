<?php
// PHP OBJEKTAI

// class ManoKlase{
//     public $a = 'Gatvė';
//     protected $b = 'Kiemas';
//     private $c = 'Namas';
//     function atspausdintKintamuosius(){
//         echo $this->a;
//         echo $this->b;
//         echo $this->c;
//     }
// }

// $obj = new ManoKlase();
// echo $obj->a; // Gatvė, nes public
// echo $obj->b; // Fatal Error, nes protected
// echo $obj->c; // Fatal Error, nes private
// $obj->atspausdintKintamuosius(); // Gatvė, Kiemas, Namas

// Kintamiesiems privaloma nurodyti kintamojo tipą (public, private, protected);
// Encapsutaion - kintamųjų ir funkcijų matomumas: public, private, protected
// Inheritance - paveldimumas;
// Polymorphism - taip pat besivadidnanti funkcija atlieka skirtingus veiksmus, pvz: kalbėti($x) ir kalbėti(); tokie patys pavadinimai, bet atlieka skirtungus veiksmus, neveikia JS ir PHP
// Klases kurti atskiruose .php failuose, funkcijas kaip getDoctor, editDoctor kurti irgi atskirame modulio .php faile

require_once('Zmogus.php');

// UZDUOTIS 2:
// susikurti  objektus: Monika, Tadas, Kestas
$Monika = new Zmogus();
$Tadas = new Zmogus();
$Kestas = new Zmogus();

// UZDUOTIS 2.1
// Monikos objektui priskirti reiksmes: Monika, 155
// Tado objektui priskirti reiksmes: Tadas, 180
// Kesto objektui priskirti reiksmes: Kestas, 179

// TAIP PRISKIRIAM/PAKEIČIAM REIKŠMES OBJEKTO KINTAMĄJAM
$Monika->vardas = "Monika";
$Monika->ugis = 155;

// UZDUOTIS 2.2
// Atspausdinti MONIKOS, TADO varda ir ugi
// paleisti f-ja 'einu()
// su echo galima atspausdinti tik viena konkretų kintamąjį
echo "vardas $Monika->vardas <br/>";
echo "ugis $Monika->ugis <br/>";
echo "<hr>";

$Tadas->vardas = "Tadas";
$Tadas->ugis = 180;

echo "vardas $Tadas->vardas <br/>";
echo "ugis $Tadas->ugis <br/>";
echo "<hr>";

$Kestas->vardas = "Kestas";
$Kestas->ugis = 179;

echo "vardas $Kestas->vardas <br/>";
echo "ugis $Kestas->ugis <br/>";
echo "<hr>";

print_r($Monika) . "<br/>";
echo "<hr>";
print_r($Tadas) . "<br/>";
echo "<hr>";
print_r($Kestas) . "<br/>";
echo "<hr>";

var_dump($Monika) . "<br/>";
echo "<hr>";
var_dump($Tadas) . "<br/>";
echo "<hr>";
var_dump($Kestas) . "<br/>";
echo "<hr>";

// Funkcijos iškvietimas
$Monika->einu();
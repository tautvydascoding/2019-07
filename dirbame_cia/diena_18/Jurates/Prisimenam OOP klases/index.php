<?php
include_once('mokykla.php');

$SaulesGimnazija = new Mokykla();
$RasosGimnazija = new Mokykla();

$SaulesGimnazija->miestas = 'Kaunas';
$SaulesGimnazija->adresas = 'Savanoriu pr.100';
$SaulesGimnazija->setDarbuotojuSkaicius(3);
echo "Darbuotojų skaičius " . $SaulesGimnazija->getDarbuotojuSkaicius();

// iki konstruktoriaus sukūrimo
// po konstruktoriaus sukūrimo

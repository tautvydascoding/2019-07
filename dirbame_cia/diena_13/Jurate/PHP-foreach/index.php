<?php
$vardas = 'Jurate';
$pavarde = 'Petrukaityte';
$straipsniai = [];
$straipsniai[0] = ['BMW vel praleke saligatviu',   'Lorem lorem....', '2010-12-01'];
$straipsniai[1] = ['Svinta vis veliau',   '2 Lorem lorem....', '2010-12-01'];
$straipsniai[2] = ['Kainos smarkiai leidziasi',   '3 Lorem lorem....', '2010-12-03'];



print_r($straipsniai);
echo "<br/>";
echo $vardas . " " . $pavarde;

include_once('straipsnis.php');
echo "<hr>";

foreach ($straipsniai as $straipsnis) {
    include('straipsnis.php');
    
}
<?php
$vardas = "Petras";
$pavarde = "Petraitis";
$str1 = ['BMW vel praleke saligatviu',   'Lorem lorem....', '2010-12-01'];
$str2 = ['Svinta vis veliau',   '2 Lorem lorem....', '2017-12-01'];
$str3 = ['Kainos smarkiai leidziasi',   '3 Lorem lorem....', '2018-12-03'];
$str4 = ['Alkoholis smarkiai brangs',   '4 Lorem lorem....', '2019-06-01'];
$str5 = ['Vasara jaučiu baigiasi',   '5 Lorem lorem....', '2019-08-05'];

$straipsniai =[$str1, $str2, $str3, $str4, $str5];

// include('straipsnis.php');

foreach ($straipsniai as $value) {
include('straipsnis.php');
}
 ?>

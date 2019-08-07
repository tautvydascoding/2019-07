

<?php


 // 'container' 'main'

$vardas = "Tomas";
$pavarde = "Tomynas";

echo $vardas . " " . $pavarde;
echo "<hr>";

$straipsnis1 = [
    "antraste" => "BMW vel praleke saligatviu",
    "aprasymas" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "data" => "2010-12-01"
];

$straipsnis2 = [
    "antraste" => "Svinta vis veliau",
    "aprasymas" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "data" => "2010-12-01"
];


$straipsnis3 = [
    "antraste" => "Kainos smarkiai leidziasi",
    "aprasymas" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "data" => "2010-12-03"
];



//arba

// $straipsniai = [];
// $straipsniai[0] = ['BMW vel praleke saligatviu',   'Lorem lorem....', '2010-12-01'];
// $straipsniai[1] = ['Svinta vis veliau',   '2 Lorem lorem....', '2010-12-01'];
// $straipsniai[2] = ['Kainos smarkiai leidziasi',   '3 Lorem lorem....', '2010-12-03'];

// visus straipsnius sudet i masyva

$visiStraipsniai[0] = $straipsnis1;
$visiStraipsniai[1] = $straipsnis2;
$visiStraipsniai[2] = $straipsnis3;



foreach ($visiStraipsniai as $st) {
    include( 'straipsnis.php');
}




//-----------------

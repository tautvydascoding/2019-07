<?php



//get data passed to from main.js script
$username =  $_POST["name"];
// su apsauga nuo hackinimo:
$username = htmlspecialchars(strip_tags($_POST["name"]), ENT_QUOTES);


//=============return "STRING"=================
echo "vardas: " . $username  ;
?>



<?php
//    OR
//============ return json objekta=================
// $x = $_POST["name"];
// $y = $_POST["location"];
// $manoAray = ['vardas' => $x, 'location' => $y   ];
// echo s( $manoAray );

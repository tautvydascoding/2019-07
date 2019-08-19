<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Gyvūnų karalystė</h1>
        <?php
        require_once('vilkas.php');

$Vilkas = new Vilkas;
$Vilkas->tipas = "rudasis";
$Vilkas->svoris = "25";
$Vilkas->pusryciai = "antis";
//$Vilkas->ligos = "kosulys";

echo "Vilko tipas: ".$Vilkas->tipas."<br />";
echo "Vilko ligos: ".$Vilkas->printLigos()."<br />";
//echo "Vilko pusryciai: ".$Vilkas->pusryciai;
// echo "Vilko ligos: ".$Vilkas->ligos; niekada neveiks, nes nepaims kintamojo

echo "Vilko pusryciai: ".$Vilkas->printPusryciai();

         ?>
    </body>
</html>

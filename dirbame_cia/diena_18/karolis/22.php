<?php
include('11.php');
$basanke = new mokykla("kaunas","silainiai",200);
$gruso = new mokykla("kaunas1","silainiai",300);

$basanke->setSkaicius(500);
echo $basanke->getSkaicius();
 ?>

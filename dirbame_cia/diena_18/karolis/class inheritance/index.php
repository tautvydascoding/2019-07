<?php
include('class.php');
$vyrs = new vyras();
$vyrs->settestosteronas(55);
echo $vyrs->gettestosteronas();
echo $vyrs->printzmogausDuomenys();
?>

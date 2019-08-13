<?php
include('vilkas.php');;
$juodasis = new vilkas();

echo $juodasis->printligos();           //paveldi is GYVUNO, nes protected (o ne private)
echo $juodasis->printpusryciai();     //nepaveldi is GYVUNO nes private

 ?>

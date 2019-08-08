<?php
include("db-funkcijos.php");

editDoctor($_GET['id'], $_GET['vardas'], $_GET['pavarde']);
echo "Gydytojas sekmingai redaguotas";
header("Location: index.php");

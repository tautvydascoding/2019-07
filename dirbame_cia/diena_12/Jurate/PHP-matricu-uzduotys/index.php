<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP matricos</title>
</head>
<body>
    
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col art"></div>
        </div>

        <div class="row mb-2">
            <div class="col navi"></div>
        </div>

        <div class="row">
            <div class="col addd"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

<?php
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas
// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina
// 3 budai nuotraukoms
// printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
// printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);

$preke1 = ['Telefonas', 'portfolio-01.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '500 €'];
$preke2 = ['Plansetinis kompiuteris', 'portfolio-02.jpg', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '800 €'];
$preke3 = ['Nesiojamas kompiuteris', 'portfolio-03.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2000 €'];
$prekiuInfo = [];

// Sukeliam visus mini masyvus i pagrindini masyva
$prekiuInfo[0] = $preke1;
$prekiuInfo[1] = $preke2;
$prekiuInfo[2] = $preke3;

// print_r($prekiuInfo);

for ($i=0; $i < count($prekiuInfo); $i++) {
    printf("<img src='./img/" . $prekiuInfo[$i][1] . "' width='200px;' alt=''/>");
    printf("<img src='./img/" . $prekiuInfo[$i][2] . "' width='200px;' alt=''/>");
    printf("<img src='./img/" . $prekiuInfo[$i][3] . "' width='200px;' alt=''/>");
    echo "<h1>" . $prekiuInfo[$i][0] . "</h1>";
    echo "<h1>" . $prekiuInfo[$i][2] . "</h1>";
    echo "<h1>" . $prekiuInfo[$i][3] . "</h1>";
}
?>

</body>
</html>
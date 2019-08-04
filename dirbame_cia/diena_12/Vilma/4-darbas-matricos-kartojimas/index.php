
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <!-- mano css failas visada turi būti apačioj -->
    <link rel="stylesheet" href="css/master.css">
</head>

<!-- // UZDUOTIS 2 --------------
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas

// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina


   // 3 budai nuotraukoms
    // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
    // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]); -->


<?php
$preke1 = ["Svogūnai","pic1.jpg", "Svogūnai balti, kilmės šalis: Lenkija", 2.99];
$preke2 = ["Kopūstai","pic2.jpg", "Kopūstai balti, kilmės šalis: Lietuva", 1.99];
$preke3 = ["Morkos","pic3.jpg", "Morkos spalvotos, kilmės šalis: Ispanija", 9.99];
$preke4 = ["Cukinijos","pic4.jpg", "Cukinijos dryžuotos, kilmės šalis: Italija", 5.99];
$preke5 = ["Paprikos","pic5.jpg", "Paprikos spalvotos, kilmės šalis: Lenkija", 6.99];

$visosPrekes = [$preke1, $preke2, $preke3, $preke4, $preke5];
// print_r($visosPrekes);
// print ("<br/>");


// for ($i=0; $i <count($visosPrekes) ; $i++) {
//     print_r( "<h1>".$visosPrekes [$i] [0]."</h1>");
//     printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
//     print_r("<h3>".$visosPrekes [$i][2]."<br /> Kaina: ".$visosPrekes [$i][3]."</h3>");
//
// }
 ?>
 <body>
    <div class="container-fluid">
         <div class="row">
             <div class="col-lg-4 bg-warning">
                 <?php
                 print_r( "<h1>".$visosPrekes [0] [0]."</h1>");
                 printf("<img src='./img/" . $visosPrekes[0][1] . "' width='200px;' alt=''  />");
                 print_r("<h3>".$visosPrekes [0][2]."<br /> Kaina: ".$visosPrekes [0][3]."</h3>");
                  ?>

             </div>
             <div class="col-lg-4 bg-info">

                 <?php
                 print_r( "<h1>".$visosPrekes [1] [0]."</h1>");
                 printf("<img src='./img/" . $visosPrekes[1][1] . "' width='200px;' alt=''  />");
                 print_r("<h3>".$visosPrekes [1][2]."<br /> Kaina: ".$visosPrekes [1][3]."</h3>");
                  ?>
             </div>
             <div class="col-lg-4 bg-success">
                 <?php
                 print_r( "<h1>".$visosPrekes [2] [0]."</h1>");
                 printf("<img src='./img/" . $visosPrekes[2][1] . "' width='200px;' alt=''  />");
                 print_r("<h3>".$visosPrekes [2][2]."<br /> Kaina: ".$visosPrekes [2][3]."</h3>");
                  ?>

             </div>

         </div>
         <div class="row">
             <div class="col-lg-4 bg-warning">
                 <?php
                 print_r( "<h1>".$visosPrekes [3] [0]."</h1>");
                 printf("<img src='./img/" . $visosPrekes[3][1] . "' width='200px;' alt=''  />");
                 print_r("<h3>".$visosPrekes [3][2]."<br /> Kaina: ".$visosPrekes [3][3]."</h3>");
                  ?>

             </div>
             <div class="col-lg-4 bg-info">

                 <?php
                 print_r( "<h1>".$visosPrekes [4] [0]."</h1>");
                 printf("<img src='./img/" . $visosPrekes[4][1] . "' width='200px;' alt=''  />");
                 print_r("<h3>".$visosPrekes [4][2]."<br /> Kaina: ".$visosPrekes [4][3]."</h3>");
                  ?>
             </div>
             <div class="col-lg-4 bg-success">
                
             </div>

         </div>

     </div>

<script src="libs/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"> </script>

<script type="text/javascript" src="main.js"> </script>
</body>

</html>
